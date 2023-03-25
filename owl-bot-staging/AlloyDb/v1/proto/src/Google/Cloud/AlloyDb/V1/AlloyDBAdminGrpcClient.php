<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2022 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\AlloyDb\V1;

/**
 * Service describing handlers for resources
 */
class AlloyDBAdminGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists Clusters in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\ListClustersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListClusters(\Google\Cloud\AlloyDb\V1\ListClustersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/ListClusters',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\ListClustersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets details of a single Cluster.
     * @param \Google\Cloud\AlloyDb\V1\GetClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCluster(\Google\Cloud\AlloyDb\V1\GetClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/GetCluster',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\Cluster', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Cluster in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\CreateClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCluster(\Google\Cloud\AlloyDb\V1\CreateClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/CreateCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the parameters of a single Cluster.
     * @param \Google\Cloud\AlloyDb\V1\UpdateClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCluster(\Google\Cloud\AlloyDb\V1\UpdateClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/UpdateCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a single Cluster.
     * @param \Google\Cloud\AlloyDb\V1\DeleteClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCluster(\Google\Cloud\AlloyDb\V1\DeleteClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/DeleteCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Cluster in a given project and location, with a volume
     * restored from the provided source, either a backup ID or a point-in-time
     * and a source cluster.
     * @param \Google\Cloud\AlloyDb\V1\RestoreClusterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RestoreCluster(\Google\Cloud\AlloyDb\V1\RestoreClusterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/RestoreCluster',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists Instances in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstances(\Google\Cloud\AlloyDb\V1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/ListInstances',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets details of a single Instance.
     * @param \Google\Cloud\AlloyDb\V1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstance(\Google\Cloud\AlloyDb\V1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/GetInstance',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Instance in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateInstance(\Google\Cloud\AlloyDb\V1\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/CreateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates new instances under the given project, location and cluster.
     * There can be only one primary instance in a cluster. If the primary
     * instance exists in the cluster as well as this request, then API will
     * throw an error.
     * The primary instance should exist before any read pool instance is
     * created. If the primary instance is a part of the request payload, then
     * the API will take care of creating instances in the correct order.
     * This method is here to support Google-internal use cases, and is not meant
     * for external customers to consume. Please do not start relying on it; its
     * behavior is subject to change without notice.
     * @param \Google\Cloud\AlloyDb\V1\BatchCreateInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchCreateInstances(\Google\Cloud\AlloyDb\V1\BatchCreateInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/BatchCreateInstances',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the parameters of a single Instance.
     * @param \Google\Cloud\AlloyDb\V1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateInstance(\Google\Cloud\AlloyDb\V1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/UpdateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a single Instance.
     * @param \Google\Cloud\AlloyDb\V1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteInstance(\Google\Cloud\AlloyDb\V1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/DeleteInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Forces a Failover for a highly available instance.
     * Failover promotes the HA standby instance as the new primary.
     * Imperative only.
     * @param \Google\Cloud\AlloyDb\V1\FailoverInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FailoverInstance(\Google\Cloud\AlloyDb\V1\FailoverInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/FailoverInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Restart an Instance in a cluster.
     * Imperative only.
     * @param \Google\Cloud\AlloyDb\V1\RestartInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RestartInstance(\Google\Cloud\AlloyDb\V1\RestartInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/RestartInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists Backups in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\ListBackupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListBackups(\Google\Cloud\AlloyDb\V1\ListBackupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/ListBackups',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\ListBackupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets details of a single Backup.
     * @param \Google\Cloud\AlloyDb\V1\GetBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBackup(\Google\Cloud\AlloyDb\V1\GetBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/GetBackup',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\Backup', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a new Backup in a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\CreateBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateBackup(\Google\Cloud\AlloyDb\V1\CreateBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/CreateBackup',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the parameters of a single Backup.
     * @param \Google\Cloud\AlloyDb\V1\UpdateBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateBackup(\Google\Cloud\AlloyDb\V1\UpdateBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/UpdateBackup',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a single Backup.
     * @param \Google\Cloud\AlloyDb\V1\DeleteBackupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteBackup(\Google\Cloud\AlloyDb\V1\DeleteBackupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/DeleteBackup',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists SupportedDatabaseFlags for a given project and location.
     * @param \Google\Cloud\AlloyDb\V1\ListSupportedDatabaseFlagsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListSupportedDatabaseFlags(\Google\Cloud\AlloyDb\V1\ListSupportedDatabaseFlagsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.alloydb.v1.AlloyDBAdmin/ListSupportedDatabaseFlags',
        $argument,
        ['\Google\Cloud\AlloyDb\V1\ListSupportedDatabaseFlagsResponse', 'decode'],
        $metadata, $options);
    }

}
