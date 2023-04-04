<?php
/**
 * Copyright 2022 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Storage\Connection;

/**
 * Trait which provides helper methods for retry logic.
 *
 * @internal
 */
trait RetryTrait
{
    /**
     * The HTTP codes that will be retried by our custom retry function.
     * @var array
     */
    private static $httpRetryCodes = [
        0, // connetion-refused OR connection-reset gives status code of 0
        200, // partial download cases
        408,
        429,
        500,
        502,
        503,
        504
    ];

    /**
     * The operations which can be retried without any conditions
     * (Idempotent)
     * @var array
     */
    private static $idempotentOps = [
        'bucket_acl.get',
        'bucket_acl.list',
        'buckets.delete',
        'buckets.get',
        'buckets.getIamPolicy',
        'buckets.insert',
        'buckets.list',
        'buckets.lockRetentionPolicy',
        'buckets.testIamPermissions',
        'default_object_acl.get',
        'default_object_acl.list',
        'hmacKey.delete',
        'hmacKey.get',
        'hmacKey.list',
        'notifications.delete',
        'notifications.get',
        'notifications.list',
        'object_acl.get',
        'object_acl.list',
        'objects.get',
        'objects.list',
        'serviceaccount.get',
    ];

    /**
     * The operations which can be retried with specific conditions
     * (Conditionally idempotent)
     * @var array
     */
    private static $condIdempotentOps = [
        'buckets.patch' => ['ifMetagenerationMatch', 'etag'],
        // Currently etag is not supported, so this preCondition never available
        'buckets.setIamPolicy' => ['etag'],
        'buckets.update' => ['ifMetagenerationMatch', 'etag'],
        'hmacKey.update' => ['etag'],
        'objects.compose' => ['ifGenerationMatch'],
        'objects.copy' => ['ifGenerationMatch'],
        'objects.delete' => ['ifGenerationMatch'],
        'objects.insert' => ['ifGenerationMatch', 'ifGenerationNotMatch'],
        'objects.patch' => ['ifMetagenerationMatch', 'etag'],
        'objects.rewrite' => ['ifGenerationMatch'],
        'objects.update' => ['ifMetagenerationMatch']
    ];

    /**
     * Retry strategies which enforce certain behaviour like:
     *     - Always retrying a call when an exception occurs(within the limits of 'max retries').
     *     - Never retrying a call when an exception occurs.
     *     - Retrying only when the operation is considered idempotent(default).
     * These configurations are supplied for per api call basis.
     *
     * We can set $options['retryStrategy'] to one of "always", "never" and
     * "idempotent". Anything apart from them is considered as "idempotent" and will be
     * retried as intended.
     */

    /**
     * Retry an API operation when an exception occurs if the exception has a retryable error code.
     * @var string
     */
    private static $RETRY_STRATEGY_ALWAYS = 'always';

    /**
     * Never retry an API operation.
     * @var string
     */
    private static $RETRY_STRATEGY_NEVER = 'never';

    /**
     * Retry an API operation only if it is considered idempotent
     * and the exception has a retryable error code.
     * @var string
     */
    private static $RETRY_STRATEGY_IDEMPOTENT = 'idempotent';

    /**
     * Return a retry decider function.
     *
     * @param string $resource resource name, eg: buckets.
     * @param string $method method name, eg: get
     * @param array $args
     * @param callable $restRetryFunction User given retry function
     * @return callable
     */
    public function getRestRetryFunction($resource, $method, array $args, $restRetryFunction = null)
    {
        if (isset($args['restRetryFunction'])) {
            return $args['restRetryFunction'];
        } elseif (!is_null($restRetryFunction)) {
            return $restRetryFunction;
        }
        $methodName = sprintf('%s.%s', $resource, $method);
        $maxRetries = (int) (isset($args['retries']) ? $args['retries'] : 3);
        $isOpIdempotent = in_array($methodName, self::$idempotentOps);
        $preconditionNeeded = array_key_exists($methodName, self::$condIdempotentOps);
        $preconditionSupplied = $this->isPreConditionSupplied($methodName, $args);
        $retryStrategy = isset($args['retryStrategy']) ?
            $args['retryStrategy'] :
            self::$RETRY_STRATEGY_IDEMPOTENT;

        return function (
            \Exception $exception,
            $currentAttempt
        ) use (
            $isOpIdempotent,
            $preconditionNeeded,
            $preconditionSupplied,
            $maxRetries,
            $retryStrategy
        ) {
            return $this->retryDeciderFunction(
                $exception,
                $currentAttempt,
                $isOpIdempotent,
                $preconditionNeeded,
                $preconditionSupplied,
                $maxRetries,
                $retryStrategy
            );
        };
    }

    /**
     * This function returns true when the user given
     * precondtions ($preConditions) has values that are present
     * in the precondition map ($this->condIdempotentMap) for that method.
     * eg: condIdempotentMap has entry 'objects.copy' => ['ifGenerationMatch'],
     * if the user has given 'ifGenerationMatch' in the 'objects.copy' operation,
     * it will be available in the $preConditions
     * as an array ['ifGenerationMatch']. This makes the array_intersect
     * function return a non empty result and this function returns true.
     *
     * @param string $methodName method name, eg: buckets.get.
     * @param array $args arguments which include preconditions provided,
     *  eg: ['ifGenerationMatch' => 0].
     * @return bool
     */
    private function isPreConditionSupplied($methodName, array $args)
    {
        if (isset(self::$condIdempotentOps[$methodName])) {
            // return true if required precondition are given.
            return !empty(array_intersect(
                self::$condIdempotentOps[$methodName],
                array_keys($args)
            ));
        }
        return false;
    }

    /**
     * Decide whether the op needs to be retried or not.
     *
     * @param \Exception $exception The exception object received
     * while sending the request.
     * @param int $currentAttempt Current retry attempt.
     * @param bool $isIdempotent
     * @param bool $preconditionNeeded
     * @param bool $preconditionSupplied
     * @param int $maxRetries
     * @return bool
     */
    private function retryDeciderFunction(
        \Exception $exception,
        $currentAttempt,
        $isIdempotent,
        $preconditionNeeded,
        $preconditionSupplied,
        $maxRetries,
        $retryStrategy
    ) {
        // No retry if maxRetries reached
        if ($maxRetries <= $currentAttempt) {
            return false;
        }
        if ($retryStrategy == self::$RETRY_STRATEGY_NEVER) {
            return false;
        }

        $statusCode = $exception->getCode();
        // Retry if the exception status code matches
        // with one of the retriable status code and
        // the operation is either idempotent or conditionally
        // idempotent with preconditions supplied.

        if (in_array($statusCode, self::$httpRetryCodes)) {
            if ($retryStrategy == self::$RETRY_STRATEGY_ALWAYS) {
                return true;
            } elseif ($isIdempotent) {
                return true;
            } elseif ($preconditionNeeded) {
                return $preconditionSupplied;
            }
        }

        return false;
    }
}
