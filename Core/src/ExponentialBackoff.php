<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Core;

/**
 * Exponential backoff implementation.
 */
class ExponentialBackoff
{
    const MAX_DELAY_MICROSECONDS = 60000000;

    /**
     * @var int
     */
    private $retries;

    /**
     * @var callable|null
     */
    private $retryFunction;

    /**
     * @var callable
     */
    private $delayFunction;

    /**
     * @var callable|null
     */
    private $calcDelayFunction;

    /**
     * @var callable|null
     */
    private $onRetryExceptionFunction;

    /**
     * @var callable|null
     */
    private $onExecutionStartFunction;

    /**
     * @param int $retries [optional] Number of retries for a failed request.
     * @param callable $retryFunction [optional] returns bool for whether or not to retry
     * @param callable $onRetryExceptionFunction [optional] runs before the $retryFunction. Unlike the $retryFunction,
     *        this function isn't responsible to decide if a retry should happen or not,
     *        but it gives the users flexibility to consume exception messages and add custom logic.
     *        Function definition should match: function (\Exception $e, int $attempt, array &$arguments) : void
     *        Ex: One might want to change headers on every retry, this function can be used to achieve
     *        such a functionality.
     * @param callable $onExecutionStartFunction [optional] runs before execution of the
     *        execute function. Taken in $arguments as reference and thus gives users,
     *        the flexibility to add custom logic before the execution of request
     *        and override request / options in the $arguments.
     *        Function definition should match: function (\Exception $e, int $attempt, array &$arguments) : void
     */
    public function __construct(
        $retries = null,
        callable $retryFunction = null,
        callable $onRetryExceptionFunction = null,
        callable $onExecutionStartFunction = null
    ) {
        $this->retries = $retries !== null ? (int) $retries : 3;
        $this->retryFunction = $retryFunction;
        $this->onRetryExceptionFunction = $onRetryExceptionFunction;
        $this->onExecutionStartFunction = $onExecutionStartFunction;
        // @todo revisit this approach
        // @codeCoverageIgnoreStart
        $this->delayFunction = static function ($delay) {
            usleep($delay);
        };
        // @codeCoverageIgnoreEnd
    }

    /**
     * Executes the retry process.
     *
     * @param callable $function
     * @param array $arguments [optional]
     * @return mixed
     * @throws \Exception The last exception caught while retrying.
     */
    public function execute(callable $function, array $arguments = [])
    {
        $delayFunction = $this->delayFunction;
        $calcDelayFunction = $this->calcDelayFunction ?: [$this, 'calculateDelay'];
        $retryAttempt = 0;
        $exception = null;

        // The $arguments are passed by reference
        // thus are modifiable before the execution starts.
        if ($this->onExecutionStartFunction) {
            call_user_func_array($this->onExecutionStartFunction, [&$arguments]);
        }

        while (true) {
            try {
                return call_user_func_array($function, $arguments);
            } catch (\Exception $exception) {
                if ($this->onRetryExceptionFunction) {
                    // The $arguments are passed by reference so that the user has the ability to modify
                    // some elements of the request on every retry(for example headers).
                    call_user_func_array(
                        $this->onRetryExceptionFunction,
                        [$exception, $retryAttempt, &$arguments]
                    );
                }
                if ($this->retryFunction) {
                    if (!call_user_func($this->retryFunction, $exception, $retryAttempt)) {
                        throw $exception;
                    }
                }

                if ($retryAttempt >= $this->retries) {
                    break;
                }

                $delayFunction($calcDelayFunction($retryAttempt));
                $retryAttempt++;
            }
        }

        throw $exception;
    }

    /**
     * If not set, defaults to using `usleep`.
     *
     * @param callable $delayFunction
     * @return void
     */
    public function setDelayFunction(callable $delayFunction)
    {
        $this->delayFunction = $delayFunction;
    }

    /**
     * If not set, defaults to using
     * {@see Google\Cloud\Core\ExponentialBackoff::calculateDelay()}.
     *
     * @param callable $calcDelayFunction
     * @return void
     */
    public function setCalcDelayFunction(callable $calcDelayFunction)
    {
        $this->calcDelayFunction = $calcDelayFunction;
    }

    /**
     * Calculates exponential delay.
     *
     * @param int $attempt The attempt number used to calculate the delay.
     * @return int
     */
    public static function calculateDelay($attempt)
    {
        return min(
            mt_rand(0, 1000000) + (pow(2, $attempt) * 1000000),
            self::MAX_DELAY_MICROSECONDS
        );
    }
}
