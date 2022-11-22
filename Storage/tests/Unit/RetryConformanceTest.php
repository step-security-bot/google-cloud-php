<?php
/**
 * Copyright 2019 Google Inc.
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

namespace Google\Cloud\Storage\Tests\Unit;

use Google\Cloud\Storage\StorageClient;
use GuzzleHttp\Client;
use Yoast\PHPUnitPolyfills\TestCases\TestCase;

/**
 * @group storage
 * @group storage-retry-conformance
 */
class RetryConformanceTest extends TestCase
{
    // Http client to interact with the test bench emulator
    private static $httpClient;

    private static $projectId = 'test';

    // The Cloud storage client
    private static $storageClient;

    private static $bucketPrefix = 'bucket-';

    private static $keyPrefix = 'key-';

    private static $objectPrefix = 'file-';

    private static $cases = [];

    // Storage test bench URL. To be populated by an env variable.
    private static $emaulatorUrl = 'https://storage.googleapis.com';

    public static function set_up_before_class()
    {
        static $setup = false;
        if ($setup) {
            return;
        }

        $setup = true;
        self::$httpClient = new Client([
            'base_uri' => self::$emaulatorUrl
        ]);
        self::$storageClient = new StorageClient([
            'apiEndpoint' => self::$emaulatorUrl,
            'projectId' => self::$projectId
        ]);

        $data = json_decode(file_get_contents(__DIR__ . '/data/retry_tests.json'), true);
        $scenarios = $data['retryTests'];
        $methodInvocations = self::getMethodInvocationMapping();

        // create the permutations to be used for tests
        foreach ($scenarios as $scenario) {
            $scenarioId = $scenario['id'];
            $errorCases = $scenario['cases'];
            $methods = $scenario['methods'];
            $expectedSuccess = $scenario['expectSuccess'];
            $preconditionProvided = $scenario['preconditionProvided'];

            if (!isset(self::$cases[$scenarioId])) {
                self::$cases[$scenarioId] = [];
            }

            foreach ($errorCases as $row) {
                $instructions = $row['instructions'];
                foreach ($methods as $method) {
                    $methodName = $method['name'];
                    $resources = $method['resources'];

                    if (array_key_exists($methodName, $methodInvocations)) {
                        foreach ($methodInvocations[$methodName] as $invocationIndex => $callable) {
                            self::$cases[$scenarioId][] = compact(
                                'methodName',
                                'instructions',
                                'resources',
                                'expectedSuccess',
                                'preconditionProvided',
                                'invocationIndex'
                            );
                        }
                    }
                }
            }
        }
    }

    public function casesProvider()
    {
        self::set_up_before_class();
        $scenarioId = 2;

        return self::$cases[$scenarioId];
    }

    /**
     * @dataProvider casesProvider
     */
    public function testOps($methodName, $instructions, $resources, $expectedSuccess, $precondtionProvided, $invocationIndex)
    {
        $this->markTestSkipped();
        $caseId = $this->createRetryTestResource($methodName, $instructions, null);

        $methodInvocations = self::getMethodInvocationMapping();
        $callable = $methodInvocations[$methodName][$invocationIndex];

        if (!$expectedSuccess) {
            $this->expectException('Exception');
        }

        $options = [
            'restOptions' => [
                'headers' => [
                    'x-retry-test-id' => $caseId
                ]
            ]
        ];

        // call the implementation and pass the case id to the testbench emulator
        call_user_func($callable, $options, $precondtionProvided);

        // if an exception was thrown, then this block would never reach
        if ($expectedSuccess) {
            $this->assertTrue(true);
        }

        if (!$this->checkCaseCompletion($caseId)) {
            $this->fail(sprintf(
                'The test case didn\'t complete for %s(invocation: %d).',
                $methodName,
                $invocationIndex
            ));
        }
    }

    /**
     * Create a Retry Test Resource by sending a request to the testbench emulator.
     * @return string
     */
    private function createRetryTestResource(string $method, array $instruction)
    {
        $data = [
            'json' => ["instructions" => [
                $method => $instruction
            ]]
        ];
        $response = self::$httpClient->request('POST', 'retry_test', $data);

        $responseObj = json_decode($response->getBody()->getContents());
        return $responseObj->id;
    }

    /**
     * Helper method that checks if a test case resource has been completed or not.
     *
     * @param string $caseId The test case resource ID
     * @return boolean
     */
    private function checkCaseCompletion(string $caseId)
    {
        $response = self::$httpClient->request('GET', sprintf('retry_test/%s', $caseId));
        $obj = json_decode($response->getBody()->getContents());

        return $obj->completed;
    }

    /**
     * Lists the different ways of invocing an API.
     */
    private static function getMethodInvocationMapping()
    {
        return [
            'storage.bucket_acl.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'bucket_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $acl = $bucket->acl();

                    // this makes the storage.bucket_acl.get call
                    $options['entity'] = 'allUsers';
                    $acl->get($options);

                    self::disposeResources(['bucket' => $bucketName, 'bucket_acl' => true]);
                },
            ],
            'storage.bucket_acl.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'bucket_acl' => true]);

                    $bucket = self::$storageClient->bucket('my-bucket');
                    $acl = $bucket->acl();

                    // this makes the storage.bucket_acl.list call
                    $acl->get($options);

                    self::disposeResources(['bucket' => $bucketName, 'bucket_acl' => true]);
                },
            ],
            'storage.buckets.delete' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $bucket->delete($options);
                },
            ],
            'storage.buckets.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $info = $bucket->reload($options);

                    self::disposeResources(['bucket' => $bucketName]);
                },
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $exists = $bucket->exists($options);

                    self::disposeResources(['bucket' => $bucketName]);
                },
            ],
            'storage.buckets.getIamPolicy' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $iam = $bucket->iam();
                    $iam->reload($options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.buckets.insert' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $bucket = self::$storageClient->createBucket($bucketName, $options);
                    $name = $bucket->name();

                    self::disposeResources(['bucket' => $bucketName]);
                },
            ],
            'storage.buckets.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $buckets = self::$storageClient->buckets($options);
                    foreach ($buckets as $bucket) {
                    }
                },
            ],
            'storage.buckets.lockRetentionPolicy' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $bucket->lockRetentionPolicy($options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.buckets.testIamPermissions' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $iam = $bucket->iam();
                    $iam->testPermissions([], $options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.default_object_acl.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'bucket_default_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $acl = $bucket->defaultAcl();
                    
                    $options['entity'] = 'allUsers';
                    $acl->get($options);
                    self::disposeResources(['bucket' => $bucketName, 'bucket_default_acl' => true]);
                }
            ],
            'storage.default_object_acl.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'bucket_default_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $acl = $bucket->defaultAcl();
                    
                    $acl->get($options);
                    self::disposeResources(['bucket' => $bucketName, 'bucket_default_acl' => true]);
                }
            ],
            'storage.hmacKey.delete' => [
                function ($options, $precondition = false) {
                    $keyName = uniqid(self::$keyPrefix);
                    $ids = self::createResources(['hmacKey' => $keyName]);
                    $accessId = $ids['hmacKeyId'];

                    $key = self::$storageClient->hmacKey($accessId);
                    $key->update('INACTIVE');
                    $key->delete($options);
                }
            ],
            'storage.hmacKey.get' => [
                function ($options, $precondition = false) {
                    $keyName = uniqid(self::$keyPrefix);
                    $ids = self::createResources(['hmacKey' => $keyName]);
                    $accessId = $ids['hmacKeyId'];

                    $key = self::$storageClient->hmacKey($accessId);
                    $key->reload($options);

                    self::disposeResources(['hmacKey' => $accessId]);
                }
            ],
            'storage.hmacKey.list' => [
                function ($options, $precondition = false) {
                    $keyName = uniqid(self::$keyPrefix);
                    $ids = self::createResources(['hmacKey' => $keyName]);
                    $accessId = $ids['hmacKeyId'];

                    $keys = self::$storageClient->hmacKeys($options);
                    foreach ($keys as $key) {
                    }

                    self::disposeResources(['hmacKey' => $accessId]);
                }
            ],
            'storage.notifications.delete' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $ids = self::createResources(['bucket' => $bucketName, 'notification' => 'test']);

                    $notificationId = $ids['notificationId'];
                    $bucket = self::$storageClient->bucket($bucketName);
                    $notification = $bucket->notification($notificationId);
                    $notification->delete($options);

                    self::disposeResources(['bucket' => $bucketName, 'notification' => true]);
                }
            ],
            'storage.notifications.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $ids = self::createResources(['bucket' => $bucketName, 'notification' => 'test']);

                    $notificationId = $ids['notificationId'];
                    $bucket = self::$storageClient->bucket($bucketName);
                    $notification = $bucket->notification($notificationId);
                    $notification->reload($options);

                    self::disposeResources(['bucket' => $bucketName, 'notification' => true]);
                },
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $ids = self::createResources(['bucket' => $bucketName, 'notification' => 'test']);

                    $notificationId = $ids['notificationId'];
                    $bucket = self::$storageClient->bucket($bucketName);
                    $notification = $bucket->notification($notificationId);
                    $notification->exists($options);

                    self::disposeResources(['bucket' => $bucketName, 'notification' => true]);
                }
            ],
            'storage.notifications.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $ids = self::createResources(['bucket' => $bucketName, 'notification' => 'test']);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $notifs = $bucket->notifications($options);
                    foreach ($notifs as $notif) {
                    }

                    self::disposeResources(['bucket' => $bucketName, 'notification' => true]);
                }
            ],
            'storage.object_acl.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $objectName = sprintf('%s.txt', uniqid(self::$objectPrefix));
                    self::createResources(['bucket' => $bucketName, 'object' => $objectName,'object_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object($objectName);
                    $acl = $object->acl();
                    $options['entity'] = 'allUsers';
                    $acl->get($options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => $objectName, 'object_acl' => true]);
                }
            ],
            'storage.object_acl.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $objectName = sprintf('%s.txt', uniqid(self::$objectPrefix));
                    self::createResources(['bucket' => $bucketName, 'object' => $objectName,'object_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object($objectName);
                    $acl = $object->acl();
                    $options['entity'] = 'allUsers';
                    if($precondition){
                        $options['generation'] = $object->info()['generation'];
                    }
                    $acl->get($options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => $objectName, 'object_acl' => true]);
                }
            ],
            'storage.object_acl.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $objectName = sprintf('%s.txt', uniqid(self::$objectPrefix));
                    self::createResources(['bucket' => $bucketName, 'object' => $objectName,'object_acl' => true]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object($objectName);
                    $acl = $object->acl();
                    if($precondition){
                        $options['generation'] = $object->info()['generation'];
                    }
                    $acl->get($options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => $objectName, 'object_acl' => true]);
                }
            ],
            'storage.objects.get' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $objectName = sprintf('%s.txt', uniqid(self::$objectPrefix));
                    self::createResources(['bucket' => $bucketName, 'object' => $objectName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object($objectName);
                    $object->reload($options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => $objectName]);
                },
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    $objectName = sprintf('%s.txt', uniqid(self::$objectPrefix));
                    self::createResources(['bucket' => $bucketName, 'object' => $objectName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object($objectName);
                    $object->exists($options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => $objectName]);
                }
            ],
            'storage.objects.list' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $objects = $bucket->objects($options);
                    foreach ($objects as $obj) {
                    }

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.serviceaccount.get' => [
                function ($options, $precondition = false) {
                    self::$storageClient->getServiceAccount($options);
                }
            ],
            'storage.buckets.patch' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $options['labels'] = ['key' => 'value'];
                    $bucket = self::$storageClient->bucket('my-bucket');

                    if($precondition){
                        $metageneration = $bucket->info()['metageneration'];
                        $options['ifMetagenerationMatch'] = $metageneration;
                    }

                    $bucket->update($options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.buckets.setIamPolicy' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket('my-bucket');
                    $iam = $bucket->iam();
                    $policy = $iam->policy();

                    $policy['bindings'][0]['members'] = ['user:test@test.com'];
                    $iam->setPolicy($policy, $options);

                    if($precondition){
                        $metageneration = $bucket->info()['metageneration'];
                        $options['ifMetagenerationMatch'] = $metageneration;
                    }

                    $bucket->update($options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.buckets.update' => [
                // This isn't used in the library
            ],
            'storage.hmacKey.update' => [
                function ($options, $precondition) {
                    $keyName = uniqid(self::$keyPrefix);
                    $ids = self::createResources(['hmacKey' => $keyName]);
                    $accessId = $ids['hmacKeyId'];

                    $key = self::$storageClient->hmacKey($accessId);
                    if($precondition){
                        self::disposeResources(['hmacKey' => $accessId]);
                        $this->markTestSkipped('Etag is currently not supported.');
                    }
                    $key->update('INACTIVE', $options);

                    self::disposeResources(['hmacKey' => $accessId]);
                }
            ],
            'storage.objects.compose' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket('my-bucket');
                    $obj1 = $bucket->upload("line1",["name" => "file1.txt"]);
                    $obj2 = $bucket->upload("line2",["name" => "file2.txt"]);
                    $obj3 = $bucket->upload("test", ["name" => "combined.txt"]);

                    $sourceObjects = ['file1.txt', 'file2.txt'];
                    if($precondition){
                        $options['ifMetagenerationMatch'] = $obj3->info()['metageneration'];
                        $options['ifGenerationMatch'] = $obj3->info()['generation'];
                    }
                    $bucket->compose($sourceObjects, 'combined.txt', $options);

                    $obj1->delete();
                    $obj2->delete();
                    $obj3->delete();

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.objects.copy' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'object' => 'file.txt']);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object('file.txt');
                    $copy = $bucket->upload("copy", ["name" => "copy.txt"]);
                    $options['name'] = 'copy.txt';
                    if($precondition){
                        $options['ifMetagenerationMatch'] = $copy->info()['metageneration'];
                        $options['ifGenerationMatch'] = $copy->info()['generation'];
                    }
                    $object->copy($bucketName, $options);

                    $copy->delete();
                    self::disposeResources(['bucket' => $bucketName, 'object' => 'file.txt']);
                }
            ],
            'storage.objects.delete' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'object' => 'file.txt']);

                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object('file.txt');
                    
                    if($precondition){
                        $options['ifMetagenerationMatch'] = $object->info()['metageneration'];
                        $options['ifGenerationMatch'] = $object->info()['generation'];
                    }

                    $object->delete($options);

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.objects.insert' => [
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    
                    if($precondition){
                        // 0 generation for a new file
                        $options['ifGenerationMatch'] = 0;
                    }

                    $object = $bucket->upload('text', ['name'=> 'file.txt'], $options);

                    $object->delete();

                    self::disposeResources(['bucket' => $bucketName]);
                },
                function ($options, $precondition = false) {
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName]);

                    $bucket = self::$storageClient->bucket($bucketName);
                    
                    if($precondition){
                        // 0 generation for a new file
                        $options['ifGenerationMatch'] = 0;
                    }

                    $promise = $bucket->uploadAsync('text', ['name'=> 'file.txt'], $options);
                    $object = $promise->wait();

                    $object->delete();

                    self::disposeResources(['bucket' => $bucketName]);
                }
            ],
            'storage.objects.patch' => [
                function($options, $precondition = false){
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'object' => 'file.txt']);
    
                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object('file.txt');
                    if($precondition){
                        $options['ifGenerationMatch'] = $object->info()['generation'];
                    }

                    $object->update(['name' => 'updated.txt'], $options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => 'updated.txt']);
                }
            ],
            'storage.objects.rewrite' => [
                function($options, $precondition = false){
                    $bucketName = uniqid(self::$bucketPrefix);
                    self::createResources(['bucket' => $bucketName, 'object' => 'file.txt']);
    
                    $bucket = self::$storageClient->bucket($bucketName);
                    $object = $bucket->object('file.txt');
                    if($precondition){
                        $options['ifGenerationMatch'] = 0;
                    }

                    $options['name'] = 'updated-file.txt';
                    $object->rewrite($bucket, $options);

                    self::disposeResources(['bucket' => $bucketName, 'object' => 'updated-file.txt']);
                }
            ],
            'storage.objects.update' =>[
                // This isn't used in the library
            ],
        ];
    }

    /**
     * Helper function to create the resources needed by a test.
     *
     * @param $list array List of resources to create.
     *
     * @return array The ids of resources created(where applicable).
     */
    private function createResources(array $list)
    {
        $ids = [];

        if (isset($list['bucket'])) {
            $bucket = self::$storageClient->createBucket($list['bucket']);

            if (isset($list['bucket_acl'])) {
                $acl = $bucket->acl();
                $acl->add('allUsers', 'READER');
                $acl->add('allAuthenticatedUsers', 'READER');
            }
            if (isset($list['bucket_default_acl'])) {
                $acl = $bucket->defaultAcl();
                $acl->add('allUsers', 'READER');
                $acl->add('allAuthenticatedUsers', 'READER');
            }
            if (isset($list['notification'])) {
                $notification = $bucket->createNotification($list['notification']);
                $ids['notificationId'] = $notification->id();
            }
            if (isset($list['object'])) {
                $object = $bucket->upload('file text', ['name' => $list['object']]);
                $ids['objectName'] = $list['object'];

                if (isset($list['object_acl'])) {
                    $acl = $object->acl();
                    $acl->add('allUsers', 'READER');
                    $acl->add('allAuthenticatedUsers', 'READER');
                }
            }
        }
        if (isset($list['hmacKey'])) {
            $keyEmail = sprintf('%s@%s.iam.gserviceaccount.com', $list['hmacKey'], self::$projectId);
            $response = self::$storageClient->createHmacKey($keyEmail);
            $key = $response->hmacKey();
            $ids['hmacKeyId'] = $key->accessId();
        }

        return $ids;
    }

    /**
     * Helper function to dispose off the resources after a test has been performed.
     *
     * @param $list array List of resources to destroy.
     */
    private static function disposeResources(array $list)
    {
        if (isset($list['bucket'])) {
            $bucket = self::$storageClient->bucket($list['bucket']);

            // delete the ACLs related to that bucket
            if (isset($list['bucket_acl'])) {
                $acl = $bucket->acl();

                $acl->delete('allUsers');
                $acl->delete('allAuthenticatedUsers');
            }

            if (isset($list['bucket_default_acl'])) {
                $acl = $bucket->defaultAcl();

                $acl->delete('allUsers');
                $acl->delete('allAuthenticatedUsers');
            }

            // delete the notifications if we created any
            if (isset($list['notification'])) {
                $notifications = $bucket->notifications();
                foreach ($notifications as $notification) {
                    $notification->delete();
                }
            }

            if (isset($list['object'])) {
                $object = $bucket->object($list['object']);

                if (isset($list['object_acl'])) {
                    $acl = $object->acl();
                    
                    $acl->delete('allUsers');
                    $acl->delete('allAuthenticatedUsers');
                }
                // delete the file
                $object->delete();
            }

            // finally delete the bucket
            $bucket->delete();
        }
        if (isset($list['hmacKey'])) {
            $key = self::$storageClient->hmacKey($list['hmacKey']);
            $key->update('INACTIVE');
            $key->delete();
        }
    }
}
