<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NodePool\UpdateInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information relevant to blue-green upgrade.
 *
 * Generated from protobuf message <code>google.container.v1.NodePool.UpdateInfo.BlueGreenInfo</code>
 */
class BlueGreenInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Current blue-green upgrade phase.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo.Phase phase = 1;</code>
     */
    protected $phase = 0;
    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with blue pool.
     *
     * Generated from protobuf field <code>repeated string blue_instance_group_urls = 2;</code>
     */
    private $blue_instance_group_urls;
    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with green pool.
     *
     * Generated from protobuf field <code>repeated string green_instance_group_urls = 3;</code>
     */
    private $green_instance_group_urls;
    /**
     * Time to start deleting blue pool to complete blue-green upgrade,
     * in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string blue_pool_deletion_start_time = 4;</code>
     */
    protected $blue_pool_deletion_start_time = '';
    /**
     * Version of green pool.
     *
     * Generated from protobuf field <code>string green_pool_version = 5;</code>
     */
    protected $green_pool_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $phase
     *           Current blue-green upgrade phase.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $blue_instance_group_urls
     *           The resource URLs of the [managed instance groups]
     *           (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     *           associated with blue pool.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $green_instance_group_urls
     *           The resource URLs of the [managed instance groups]
     *           (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     *           associated with green pool.
     *     @type string $blue_pool_deletion_start_time
     *           Time to start deleting blue pool to complete blue-green upgrade,
     *           in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *     @type string $green_pool_version
     *           Version of green pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Current blue-green upgrade phase.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo.Phase phase = 1;</code>
     * @return int
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Current blue-green upgrade phase.
     *
     * Generated from protobuf field <code>.google.container.v1.NodePool.UpdateInfo.BlueGreenInfo.Phase phase = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPhase($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\NodePool\UpdateInfo\BlueGreenInfo\Phase::class);
        $this->phase = $var;

        return $this;
    }

    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with blue pool.
     *
     * Generated from protobuf field <code>repeated string blue_instance_group_urls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlueInstanceGroupUrls()
    {
        return $this->blue_instance_group_urls;
    }

    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with blue pool.
     *
     * Generated from protobuf field <code>repeated string blue_instance_group_urls = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlueInstanceGroupUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blue_instance_group_urls = $arr;

        return $this;
    }

    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with green pool.
     *
     * Generated from protobuf field <code>repeated string green_instance_group_urls = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGreenInstanceGroupUrls()
    {
        return $this->green_instance_group_urls;
    }

    /**
     * The resource URLs of the [managed instance groups]
     * (/compute/docs/instance-groups/creating-groups-of-managed-instances)
     * associated with green pool.
     *
     * Generated from protobuf field <code>repeated string green_instance_group_urls = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGreenInstanceGroupUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->green_instance_group_urls = $arr;

        return $this;
    }

    /**
     * Time to start deleting blue pool to complete blue-green upgrade,
     * in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string blue_pool_deletion_start_time = 4;</code>
     * @return string
     */
    public function getBluePoolDeletionStartTime()
    {
        return $this->blue_pool_deletion_start_time;
    }

    /**
     * Time to start deleting blue pool to complete blue-green upgrade,
     * in [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) text format.
     *
     * Generated from protobuf field <code>string blue_pool_deletion_start_time = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBluePoolDeletionStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->blue_pool_deletion_start_time = $var;

        return $this;
    }

    /**
     * Version of green pool.
     *
     * Generated from protobuf field <code>string green_pool_version = 5;</code>
     * @return string
     */
    public function getGreenPoolVersion()
    {
        return $this->green_pool_version;
    }

    /**
     * Version of green pool.
     *
     * Generated from protobuf field <code>string green_pool_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setGreenPoolVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->green_pool_version = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlueGreenInfo::class, \Google\Cloud\Container\V1\NodePool_UpdateInfo_BlueGreenInfo::class);

