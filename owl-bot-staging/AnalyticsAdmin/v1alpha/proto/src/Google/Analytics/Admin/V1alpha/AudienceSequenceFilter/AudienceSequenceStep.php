<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/audience.proto

namespace Google\Analytics\Admin\V1alpha\AudienceSequenceFilter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition that must occur in the specified step order for this user
 * to match the sequence.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AudienceSequenceFilter.AudienceSequenceStep</code>
 */
class AudienceSequenceStep extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. Specifies the scope for this step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterScope scope = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $scope = 0;
    /**
     * Optional. If true, the event satisfying this step must be the very next
     * event after the event satisfying the last step. If unset or false, this
     * step indirectly follows the prior step; for example, there may be
     * events between the prior step and this step. It is ignored for the
     * first step.
     *
     * Generated from protobuf field <code>bool immediately_follows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $immediately_follows = false;
    /**
     * Optional. When set, this step must be satisfied within the
     * constraint_duration of the previous step (i.e., t[i] - t[i-1] <=
     * constraint_duration). If not set, there is no duration requirement (the
     * duration is effectively unlimited). It is ignored for the first step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration constraint_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $constraint_duration = null;
    /**
     * Required. Immutable. A logical expression of Audience dimension, metric,
     * or event filters in each step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterExpression filter_expression = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $filter_expression = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $scope
     *           Required. Immutable. Specifies the scope for this step.
     *     @type bool $immediately_follows
     *           Optional. If true, the event satisfying this step must be the very next
     *           event after the event satisfying the last step. If unset or false, this
     *           step indirectly follows the prior step; for example, there may be
     *           events between the prior step and this step. It is ignored for the
     *           first step.
     *     @type \Google\Protobuf\Duration $constraint_duration
     *           Optional. When set, this step must be satisfied within the
     *           constraint_duration of the previous step (i.e., t[i] - t[i-1] <=
     *           constraint_duration). If not set, there is no duration requirement (the
     *           duration is effectively unlimited). It is ignored for the first step.
     *     @type \Google\Analytics\Admin\V1alpha\AudienceFilterExpression $filter_expression
     *           Required. Immutable. A logical expression of Audience dimension, metric,
     *           or event filters in each step.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Audience::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. Specifies the scope for this step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterScope scope = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. Immutable. Specifies the scope for this step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterScope scope = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\AudienceFilterScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. If true, the event satisfying this step must be the very next
     * event after the event satisfying the last step. If unset or false, this
     * step indirectly follows the prior step; for example, there may be
     * events between the prior step and this step. It is ignored for the
     * first step.
     *
     * Generated from protobuf field <code>bool immediately_follows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getImmediatelyFollows()
    {
        return $this->immediately_follows;
    }

    /**
     * Optional. If true, the event satisfying this step must be the very next
     * event after the event satisfying the last step. If unset or false, this
     * step indirectly follows the prior step; for example, there may be
     * events between the prior step and this step. It is ignored for the
     * first step.
     *
     * Generated from protobuf field <code>bool immediately_follows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setImmediatelyFollows($var)
    {
        GPBUtil::checkBool($var);
        $this->immediately_follows = $var;

        return $this;
    }

    /**
     * Optional. When set, this step must be satisfied within the
     * constraint_duration of the previous step (i.e., t[i] - t[i-1] <=
     * constraint_duration). If not set, there is no duration requirement (the
     * duration is effectively unlimited). It is ignored for the first step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration constraint_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getConstraintDuration()
    {
        return $this->constraint_duration;
    }

    public function hasConstraintDuration()
    {
        return isset($this->constraint_duration);
    }

    public function clearConstraintDuration()
    {
        unset($this->constraint_duration);
    }

    /**
     * Optional. When set, this step must be satisfied within the
     * constraint_duration of the previous step (i.e., t[i] - t[i-1] <=
     * constraint_duration). If not set, there is no duration requirement (the
     * duration is effectively unlimited). It is ignored for the first step.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration constraint_duration = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setConstraintDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->constraint_duration = $var;

        return $this;
    }

    /**
     * Required. Immutable. A logical expression of Audience dimension, metric,
     * or event filters in each step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterExpression filter_expression = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Analytics\Admin\V1alpha\AudienceFilterExpression|null
     */
    public function getFilterExpression()
    {
        return $this->filter_expression;
    }

    public function hasFilterExpression()
    {
        return isset($this->filter_expression);
    }

    public function clearFilterExpression()
    {
        unset($this->filter_expression);
    }

    /**
     * Required. Immutable. A logical expression of Audience dimension, metric,
     * or event filters in each step.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceFilterExpression filter_expression = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Analytics\Admin\V1alpha\AudienceFilterExpression $var
     * @return $this
     */
    public function setFilterExpression($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AudienceFilterExpression::class);
        $this->filter_expression = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudienceSequenceStep::class, \Google\Analytics\Admin\V1alpha\AudienceSequenceFilter_AudienceSequenceStep::class);

