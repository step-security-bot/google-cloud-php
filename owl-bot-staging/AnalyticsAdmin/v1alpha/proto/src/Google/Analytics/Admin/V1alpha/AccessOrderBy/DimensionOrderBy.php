<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/access_report.proto

namespace Google\Analytics\Admin\V1alpha\AccessOrderBy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sorts by dimension values.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderBy</code>
 */
class DimensionOrderBy extends \Google\Protobuf\Internal\Message
{
    /**
     * A dimension name in the request to order by.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     */
    protected $dimension_name = '';
    /**
     * Controls the rule for dimension value ordering.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderBy.OrderType order_type = 2;</code>
     */
    protected $order_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dimension_name
     *           A dimension name in the request to order by.
     *     @type int $order_type
     *           Controls the rule for dimension value ordering.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AccessReport::initOnce();
        parent::__construct($data);
    }

    /**
     * A dimension name in the request to order by.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     * @return string
     */
    public function getDimensionName()
    {
        return $this->dimension_name;
    }

    /**
     * A dimension name in the request to order by.
     *
     * Generated from protobuf field <code>string dimension_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDimensionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dimension_name = $var;

        return $this;
    }

    /**
     * Controls the rule for dimension value ordering.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderBy.OrderType order_type = 2;</code>
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     * Controls the rule for dimension value ordering.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessOrderBy.DimensionOrderBy.OrderType order_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1alpha\AccessOrderBy\DimensionOrderBy\OrderType::class);
        $this->order_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DimensionOrderBy::class, \Google\Analytics\Admin\V1alpha\AccessOrderBy_DimensionOrderBy::class);

