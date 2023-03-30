<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\PrivatePoolV1Config;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the configuration to be used for creating workers in
 * the pool.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.PrivatePoolV1Config.WorkerConfig</code>
 */
class WorkerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Machine type of a worker, such as `e2-medium`.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * If left blank, Cloud Build will use a sensible default.
     *
     * Generated from protobuf field <code>string machine_type = 1;</code>
     */
    protected $machine_type = '';
    /**
     * Size of the disk attached to the worker, in GB.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * Specify a value of up to 1000. If `0` is specified, Cloud Build will use
     * a standard disk size.
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     */
    protected $disk_size_gb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $machine_type
     *           Machine type of a worker, such as `e2-medium`.
     *           See [Worker pool config
     *           file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     *           If left blank, Cloud Build will use a sensible default.
     *     @type int|string $disk_size_gb
     *           Size of the disk attached to the worker, in GB.
     *           See [Worker pool config
     *           file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     *           Specify a value of up to 1000. If `0` is specified, Cloud Build will use
     *           a standard disk size.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Machine type of a worker, such as `e2-medium`.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * If left blank, Cloud Build will use a sensible default.
     *
     * Generated from protobuf field <code>string machine_type = 1;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * Machine type of a worker, such as `e2-medium`.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * If left blank, Cloud Build will use a sensible default.
     *
     * Generated from protobuf field <code>string machine_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * Size of the disk attached to the worker, in GB.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * Specify a value of up to 1000. If `0` is specified, Cloud Build will use
     * a standard disk size.
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     * @return int|string
     */
    public function getDiskSizeGb()
    {
        return $this->disk_size_gb;
    }

    /**
     * Size of the disk attached to the worker, in GB.
     * See [Worker pool config
     * file](https://cloud.google.com/build/docs/private-pools/worker-pool-config-file-schema).
     * Specify a value of up to 1000. If `0` is specified, Cloud Build will use
     * a standard disk size.
     *
     * Generated from protobuf field <code>int64 disk_size_gb = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDiskSizeGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->disk_size_gb = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkerConfig::class, \Google\Cloud\Build\V1\PrivatePoolV1Config_WorkerConfig::class);

