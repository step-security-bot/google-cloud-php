<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\AIPlatform\V1\Trial;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message representing a parameter to be tuned.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Trial.Parameter</code>
 */
class Parameter extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The ID of the parameter. The parameter should be defined in
     * [StudySpec's
     * Parameters][google.cloud.aiplatform.v1.StudySpec.parameters].
     *
     * Generated from protobuf field <code>string parameter_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $parameter_id = '';
    /**
     * Output only. The value of the parameter.
     * `number_value` will be set if a parameter defined in StudySpec is
     * in type 'INTEGER', 'DOUBLE' or 'DISCRETE'.
     * `string_value` will be set if a parameter defined in StudySpec is
     * in type 'CATEGORICAL'.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parameter_id
     *           Output only. The ID of the parameter. The parameter should be defined in
     *           [StudySpec's
     *           Parameters][google.cloud.aiplatform.v1.StudySpec.parameters].
     *     @type \Google\Protobuf\Value $value
     *           Output only. The value of the parameter.
     *           `number_value` will be set if a parameter defined in StudySpec is
     *           in type 'INTEGER', 'DOUBLE' or 'DISCRETE'.
     *           `string_value` will be set if a parameter defined in StudySpec is
     *           in type 'CATEGORICAL'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The ID of the parameter. The parameter should be defined in
     * [StudySpec's
     * Parameters][google.cloud.aiplatform.v1.StudySpec.parameters].
     *
     * Generated from protobuf field <code>string parameter_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getParameterId()
    {
        return $this->parameter_id;
    }

    /**
     * Output only. The ID of the parameter. The parameter should be defined in
     * [StudySpec's
     * Parameters][google.cloud.aiplatform.v1.StudySpec.parameters].
     *
     * Generated from protobuf field <code>string parameter_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setParameterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter_id = $var;

        return $this;
    }

    /**
     * Output only. The value of the parameter.
     * `number_value` will be set if a parameter defined in StudySpec is
     * in type 'INTEGER', 'DOUBLE' or 'DISCRETE'.
     * `string_value` will be set if a parameter defined in StudySpec is
     * in type 'CATEGORICAL'.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getValue()
    {
        return $this->value;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Output only. The value of the parameter.
     * `number_value` will be set if a parameter defined in StudySpec is
     * in type 'INTEGER', 'DOUBLE' or 'DISCRETE'.
     * `string_value` will be set if a parameter defined in StudySpec is
     * in type 'CATEGORICAL'.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->value = $var;

        return $this;
    }

}


