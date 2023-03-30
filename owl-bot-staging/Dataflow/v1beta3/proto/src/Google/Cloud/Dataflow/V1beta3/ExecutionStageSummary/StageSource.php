<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of an input or output of an execution stage.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.ExecutionStageSummary.StageSource</code>
 */
class StageSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Human-readable name for this source; may be user or system generated.
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     */
    protected $user_name = '';
    /**
     * Dataflow service generated name for this source.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * User name for the original user transform or collection with which this
     * source is most closely associated.
     *
     * Generated from protobuf field <code>string original_transform_or_collection = 3;</code>
     */
    protected $original_transform_or_collection = '';
    /**
     * Size of the source, if measurable.
     *
     * Generated from protobuf field <code>int64 size_bytes = 4;</code>
     */
    protected $size_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_name
     *           Human-readable name for this source; may be user or system generated.
     *     @type string $name
     *           Dataflow service generated name for this source.
     *     @type string $original_transform_or_collection
     *           User name for the original user transform or collection with which this
     *           source is most closely associated.
     *     @type int|string $size_bytes
     *           Size of the source, if measurable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Human-readable name for this source; may be user or system generated.
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Human-readable name for this source; may be user or system generated.
     *
     * Generated from protobuf field <code>string user_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserName($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_name = $var;

        return $this;
    }

    /**
     * Dataflow service generated name for this source.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Dataflow service generated name for this source.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User name for the original user transform or collection with which this
     * source is most closely associated.
     *
     * Generated from protobuf field <code>string original_transform_or_collection = 3;</code>
     * @return string
     */
    public function getOriginalTransformOrCollection()
    {
        return $this->original_transform_or_collection;
    }

    /**
     * User name for the original user transform or collection with which this
     * source is most closely associated.
     *
     * Generated from protobuf field <code>string original_transform_or_collection = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalTransformOrCollection($var)
    {
        GPBUtil::checkString($var, True);
        $this->original_transform_or_collection = $var;

        return $this;
    }

    /**
     * Size of the source, if measurable.
     *
     * Generated from protobuf field <code>int64 size_bytes = 4;</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Size of the source, if measurable.
     *
     * Generated from protobuf field <code>int64 size_bytes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StageSource::class, \Google\Cloud\Dataflow\V1beta3\ExecutionStageSummary_StageSource::class);

