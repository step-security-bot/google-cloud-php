<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LocalNvmeSsdBlockConfig contains configuration for using raw-block local
 * NVMe SSD.
 *
 * Generated from protobuf message <code>google.container.v1.LocalNvmeSsdBlockConfig</code>
 */
class LocalNvmeSsdBlockConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of raw-block local NVMe SSD disks to be attached to the node.
     * Each local SSD is 375 GB in size. If zero, it means no raw-block local NVMe
     * SSD disks to be attached to the node.
     * The limit for this value is dependent upon the maximum number of
     * disks available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     */
    protected $local_ssd_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $local_ssd_count
     *           The number of raw-block local NVMe SSD disks to be attached to the node.
     *           Each local SSD is 375 GB in size. If zero, it means no raw-block local NVMe
     *           SSD disks to be attached to the node.
     *           The limit for this value is dependent upon the maximum number of
     *           disks available on a machine per zone. See:
     *           https://cloud.google.com/compute/docs/disks/local-ssd
     *           for more information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of raw-block local NVMe SSD disks to be attached to the node.
     * Each local SSD is 375 GB in size. If zero, it means no raw-block local NVMe
     * SSD disks to be attached to the node.
     * The limit for this value is dependent upon the maximum number of
     * disks available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     * @return int
     */
    public function getLocalSsdCount()
    {
        return $this->local_ssd_count;
    }

    /**
     * The number of raw-block local NVMe SSD disks to be attached to the node.
     * Each local SSD is 375 GB in size. If zero, it means no raw-block local NVMe
     * SSD disks to be attached to the node.
     * The limit for this value is dependent upon the maximum number of
     * disks available on a machine per zone. See:
     * https://cloud.google.com/compute/docs/disks/local-ssd
     * for more information.
     *
     * Generated from protobuf field <code>int32 local_ssd_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLocalSsdCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->local_ssd_count = $var;

        return $this;
    }

}

