<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A definition for a CustomDimension.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.CustomDimension</code>
 */
class CustomDimension extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name for this CustomDimension resource.
     * Format: properties/{property}/customDimensions/{customDimension}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. Tagging parameter name for this custom dimension.
     * If this is a user-scoped dimension, then this is the user property name.
     * If this is an event-scoped dimension, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore characters, starting with a
     * letter. Max length of 24 characters for user-scoped dimensions, 40
     * characters for event-scoped dimensions.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $parameter_name = '';
    /**
     * Required. Display name for this custom dimension as shown in the Analytics
     * UI. Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Optional. Description for this custom dimension. Max length of 150
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Required. Immutable. The scope of this dimension.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomDimension.DimensionScope scope = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $scope = 0;
    /**
     * Optional. If set to true, sets this dimension as NPA and excludes it from
     * ads personalization.
     * This is currently only supported by user-scoped custom dimensions.
     *
     * Generated from protobuf field <code>bool disallow_ads_personalization = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $disallow_ads_personalization = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name for this CustomDimension resource.
     *           Format: properties/{property}/customDimensions/{customDimension}
     *     @type string $parameter_name
     *           Required. Immutable. Tagging parameter name for this custom dimension.
     *           If this is a user-scoped dimension, then this is the user property name.
     *           If this is an event-scoped dimension, then this is the event parameter
     *           name.
     *           May only contain alphanumeric and underscore characters, starting with a
     *           letter. Max length of 24 characters for user-scoped dimensions, 40
     *           characters for event-scoped dimensions.
     *     @type string $display_name
     *           Required. Display name for this custom dimension as shown in the Analytics
     *           UI. Max length of 82 characters, alphanumeric plus space and underscore
     *           starting with a letter. Legacy system-generated display names may contain
     *           square brackets, but updates to this field will never permit square
     *           brackets.
     *     @type string $description
     *           Optional. Description for this custom dimension. Max length of 150
     *           characters.
     *     @type int $scope
     *           Required. Immutable. The scope of this dimension.
     *     @type bool $disallow_ads_personalization
     *           Optional. If set to true, sets this dimension as NPA and excludes it from
     *           ads personalization.
     *           This is currently only supported by user-scoped custom dimensions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name for this CustomDimension resource.
     * Format: properties/{property}/customDimensions/{customDimension}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name for this CustomDimension resource.
     * Format: properties/{property}/customDimensions/{customDimension}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Immutable. Tagging parameter name for this custom dimension.
     * If this is a user-scoped dimension, then this is the user property name.
     * If this is an event-scoped dimension, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore characters, starting with a
     * letter. Max length of 24 characters for user-scoped dimensions, 40
     * characters for event-scoped dimensions.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameter_name;
    }

    /**
     * Required. Immutable. Tagging parameter name for this custom dimension.
     * If this is a user-scoped dimension, then this is the user property name.
     * If this is an event-scoped dimension, then this is the event parameter
     * name.
     * May only contain alphanumeric and underscore characters, starting with a
     * letter. Max length of 24 characters for user-scoped dimensions, 40
     * characters for event-scoped dimensions.
     *
     * Generated from protobuf field <code>string parameter_name = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setParameterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter_name = $var;

        return $this;
    }

    /**
     * Required. Display name for this custom dimension as shown in the Analytics
     * UI. Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Display name for this custom dimension as shown in the Analytics
     * UI. Max length of 82 characters, alphanumeric plus space and underscore
     * starting with a letter. Legacy system-generated display names may contain
     * square brackets, but updates to this field will never permit square
     * brackets.
     *
     * Generated from protobuf field <code>string display_name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Description for this custom dimension. Max length of 150
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description for this custom dimension. Max length of 150
     * characters.
     *
     * Generated from protobuf field <code>string description = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Immutable. The scope of this dimension.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomDimension.DimensionScope scope = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. Immutable. The scope of this dimension.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomDimension.DimensionScope scope = 5 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\CustomDimension\DimensionScope::class);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. If set to true, sets this dimension as NPA and excludes it from
     * ads personalization.
     * This is currently only supported by user-scoped custom dimensions.
     *
     * Generated from protobuf field <code>bool disallow_ads_personalization = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisallowAdsPersonalization()
    {
        return $this->disallow_ads_personalization;
    }

    /**
     * Optional. If set to true, sets this dimension as NPA and excludes it from
     * ads personalization.
     * This is currently only supported by user-scoped custom dimensions.
     *
     * Generated from protobuf field <code>bool disallow_ads_personalization = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisallowAdsPersonalization($var)
    {
        GPBUtil::checkBool($var);
        $this->disallow_ads_personalization = $var;

        return $this;
    }

}

