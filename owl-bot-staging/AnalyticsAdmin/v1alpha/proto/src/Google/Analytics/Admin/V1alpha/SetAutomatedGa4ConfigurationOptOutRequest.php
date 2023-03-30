<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for setting the opt out status for the automated GA4 setup process.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SetAutomatedGa4ConfigurationOptOutRequest</code>
 */
class SetAutomatedGa4ConfigurationOptOutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The UA property to set the opt out status. Note this request uses
     * the internal property ID, not the tracking ID of the form UA-XXXXXX-YY.
     * Format: properties/{internalWebPropertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $property = '';
    /**
     * The status to set.
     *
     * Generated from protobuf field <code>bool opt_out = 2;</code>
     */
    protected $opt_out = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           Required. The UA property to set the opt out status. Note this request uses
     *           the internal property ID, not the tracking ID of the form UA-XXXXXX-YY.
     *           Format: properties/{internalWebPropertyId}
     *           Example: properties/1234
     *     @type bool $opt_out
     *           The status to set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The UA property to set the opt out status. Note this request uses
     * the internal property ID, not the tracking ID of the form UA-XXXXXX-YY.
     * Format: properties/{internalWebPropertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Required. The UA property to set the opt out status. Note this request uses
     * the internal property ID, not the tracking ID of the form UA-XXXXXX-YY.
     * Format: properties/{internalWebPropertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * The status to set.
     *
     * Generated from protobuf field <code>bool opt_out = 2;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->opt_out;
    }

    /**
     * The status to set.
     *
     * Generated from protobuf field <code>bool opt_out = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptOut($var)
    {
        GPBUtil::checkBool($var);
        $this->opt_out = $var;

        return $this;
    }

}

