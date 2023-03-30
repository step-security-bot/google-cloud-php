<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START spanner_v1_generated_DatabaseAdmin_ListBackups_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Spanner\Admin\Database\V1\Backup;
use Google\Cloud\Spanner\Admin\Database\V1\DatabaseAdminClient;

/**
 * Lists completed and pending backups.
 * Backups returned are ordered by `create_time` in descending order,
 * starting from the most recent `create_time`.
 *
 * @param string $formattedParent The instance to list backups from.  Values are of the
 *                                form `projects/<project>/instances/<instance>`. Please see
 *                                {@see DatabaseAdminClient::instanceName()} for help formatting this field.
 */
function list_backups_sample(string $formattedParent): void
{
    // Create a client.
    $databaseAdminClient = new DatabaseAdminClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $databaseAdminClient->listBackups($formattedParent);

        /** @var Backup $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DatabaseAdminClient::instanceName('[PROJECT]', '[INSTANCE]');

    list_backups_sample($formattedParent);
}
// [END spanner_v1_generated_DatabaseAdmin_ListBackups_sync]
