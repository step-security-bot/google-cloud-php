<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelService.BatchImportModelEvaluationSlices][google.cloud.aiplatform.v1.ModelService.BatchImportModelEvaluationSlices]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchImportModelEvaluationSlicesRequest</code>
 */
class BatchImportModelEvaluationSlicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Model evaluation slice resource to be imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelEvaluationSlice model_evaluation_slices = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $model_evaluation_slices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent ModelEvaluation resource.
     *           Format:
     *           `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *     @type array<\Google\Cloud\AIPlatform\V1\ModelEvaluationSlice>|\Google\Protobuf\Internal\RepeatedField $model_evaluation_slices
     *           Required. Model evaluation slice resource to be imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent ModelEvaluation resource.
     * Format:
     * `projects/{project}/locations/{location}/models/{model}/evaluations/{evaluation}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Model evaluation slice resource to be imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelEvaluationSlice model_evaluation_slices = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModelEvaluationSlices()
    {
        return $this->model_evaluation_slices;
    }

    /**
     * Required. Model evaluation slice resource to be imported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.ModelEvaluationSlice model_evaluation_slices = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\ModelEvaluationSlice>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModelEvaluationSlices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\ModelEvaluationSlice::class);
        $this->model_evaluation_slices = $arr;

        return $this;
    }

}

