<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for a Data Access Record Report.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.RunAccessReportRequest</code>
 */
class RunAccessReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The Data Access Report supports requesting at the property level or account
     * level. If requested at the account level, Data Access Reports include all
     * access for all properties under that account.
     * To request at the property level, entity should be for example
     * 'properties/123' if "123" is your GA4 property ID. To request at the
     * account level, entity should be for example 'accounts/1234' if "1234" is
     * your GA4 Account ID.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     */
    protected $entity = '';
    /**
     * The dimensions requested and displayed in the response. Requests are
     * allowed up to 9 dimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics requested and displayed in the response. Requests are allowed
     * up to 10 metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessMetric metrics = 3;</code>
     */
    private $metrics;
    /**
     * Date ranges of access records to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index. If
     * two date ranges overlap, the access records for the overlapping days is
     * included in the response rows for both date ranges. Requests are allowed up
     * to 2 date ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDateRange date_ranges = 4;</code>
     */
    private $date_ranges;
    /**
     * Dimension filters let you restrict report response to specific
     * dimension values which match the filter. For example, filtering on access
     * records of a single user. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression dimension_filter = 5;</code>
     */
    protected $dimension_filter = null;
    /**
     * Metric filters allow you to restrict report response to specific metric
     * values which match the filter. Metric filters are applied after aggregating
     * the report's rows, similar to SQL having-clause. Dimensions cannot be used
     * in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression metric_filter = 6;</code>
     */
    protected $metric_filter = null;
    /**
     * The row count of the start row. The first row is counted as row 0. If
     * offset is unspecified, it is treated as 0. If offset is zero, then this
     * method will return the first page of results with `limit` entries.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     */
    protected $offset = 0;
    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API may return fewer rows than the requested `limit`, if there aren't
     * as many remaining rows as the `limit`. For instance, there are fewer than
     * 300 possible values for the dimension `country`, so when reporting on only
     * `country`, you can't get more than 300 rows, even if you set `limit` to a
     * higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     */
    protected $limit = 0;
    /**
     * This request's time zone if specified. If unspecified, the property's time
     * zone is used. The request's time zone is used to interpret the start & end
     * dates of the report.
     * Formatted as strings from the IANA Time Zone database
     * (https://www.iana.org/time-zones); for example "America/New_York" or
     * "Asia/Tokyo".
     *
     * Generated from protobuf field <code>string time_zone = 9;</code>
     */
    protected $time_zone = '';
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessOrderBy order_bys = 10;</code>
     */
    private $order_bys;
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [AccessQuota](#AccessQuota). For account-level
     * requests, this field must be false.
     *
     * Generated from protobuf field <code>bool return_entity_quota = 11;</code>
     */
    protected $return_entity_quota = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity
     *           The Data Access Report supports requesting at the property level or account
     *           level. If requested at the account level, Data Access Reports include all
     *           access for all properties under that account.
     *           To request at the property level, entity should be for example
     *           'properties/123' if "123" is your GA4 property ID. To request at the
     *           account level, entity should be for example 'accounts/1234' if "1234" is
     *           your GA4 Account ID.
     *     @type array<\Google\Analytics\Admin\V1beta\AccessDimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions requested and displayed in the response. Requests are
     *           allowed up to 9 dimensions.
     *     @type array<\Google\Analytics\Admin\V1beta\AccessMetric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics requested and displayed in the response. Requests are allowed
     *           up to 10 metrics.
     *     @type array<\Google\Analytics\Admin\V1beta\AccessDateRange>|\Google\Protobuf\Internal\RepeatedField $date_ranges
     *           Date ranges of access records to read. If multiple date ranges are
     *           requested, each response row will contain a zero based date range index. If
     *           two date ranges overlap, the access records for the overlapping days is
     *           included in the response rows for both date ranges. Requests are allowed up
     *           to 2 date ranges.
     *     @type \Google\Analytics\Admin\V1beta\AccessFilterExpression $dimension_filter
     *           Dimension filters let you restrict report response to specific
     *           dimension values which match the filter. For example, filtering on access
     *           records of a single user. To learn more, see [Fundamentals of Dimension
     *           Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     *           for examples. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Admin\V1beta\AccessFilterExpression $metric_filter
     *           Metric filters allow you to restrict report response to specific metric
     *           values which match the filter. Metric filters are applied after aggregating
     *           the report's rows, similar to SQL having-clause. Dimensions cannot be used
     *           in this filter.
     *     @type int|string $offset
     *           The row count of the start row. The first row is counted as row 0. If
     *           offset is unspecified, it is treated as 0. If offset is zero, then this
     *           method will return the first page of results with `limit` entries.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int|string $limit
     *           The number of rows to return. If unspecified, 10,000 rows are returned. The
     *           API returns a maximum of 100,000 rows per request, no matter how many you
     *           ask for. `limit` must be positive.
     *           The API may return fewer rows than the requested `limit`, if there aren't
     *           as many remaining rows as the `limit`. For instance, there are fewer than
     *           300 possible values for the dimension `country`, so when reporting on only
     *           `country`, you can't get more than 300 rows, even if you set `limit` to a
     *           higher value.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type string $time_zone
     *           This request's time zone if specified. If unspecified, the property's time
     *           zone is used. The request's time zone is used to interpret the start & end
     *           dates of the report.
     *           Formatted as strings from the IANA Time Zone database
     *           (https://www.iana.org/time-zones); for example "America/New_York" or
     *           "Asia/Tokyo".
     *     @type array<\Google\Analytics\Admin\V1beta\AccessOrderBy>|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Specifies how rows are ordered in the response.
     *     @type bool $return_entity_quota
     *           Toggles whether to return the current state of this Analytics Property's
     *           quota. Quota is returned in [AccessQuota](#AccessQuota). For account-level
     *           requests, this field must be false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The Data Access Report supports requesting at the property level or account
     * level. If requested at the account level, Data Access Reports include all
     * access for all properties under that account.
     * To request at the property level, entity should be for example
     * 'properties/123' if "123" is your GA4 property ID. To request at the
     * account level, entity should be for example 'accounts/1234' if "1234" is
     * your GA4 Account ID.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * The Data Access Report supports requesting at the property level or account
     * level. If requested at the account level, Data Access Reports include all
     * access for all properties under that account.
     * To request at the property level, entity should be for example
     * 'properties/123' if "123" is your GA4 property ID. To request at the
     * account level, entity should be for example 'accounts/1234' if "1234" is
     * your GA4 Account ID.
     *
     * Generated from protobuf field <code>string entity = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity = $var;

        return $this;
    }

    /**
     * The dimensions requested and displayed in the response. Requests are
     * allowed up to 9 dimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The dimensions requested and displayed in the response. Requests are
     * allowed up to 9 dimensions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDimension dimensions = 2;</code>
     * @param array<\Google\Analytics\Admin\V1beta\AccessDimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\AccessDimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * The metrics requested and displayed in the response. Requests are allowed
     * up to 10 metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessMetric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics requested and displayed in the response. Requests are allowed
     * up to 10 metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessMetric metrics = 3;</code>
     * @param array<\Google\Analytics\Admin\V1beta\AccessMetric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\AccessMetric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Date ranges of access records to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index. If
     * two date ranges overlap, the access records for the overlapping days is
     * included in the response rows for both date ranges. Requests are allowed up
     * to 2 date ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDateRange date_ranges = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDateRanges()
    {
        return $this->date_ranges;
    }

    /**
     * Date ranges of access records to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index. If
     * two date ranges overlap, the access records for the overlapping days is
     * included in the response rows for both date ranges. Requests are allowed up
     * to 2 date ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessDateRange date_ranges = 4;</code>
     * @param array<\Google\Analytics\Admin\V1beta\AccessDateRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDateRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\AccessDateRange::class);
        $this->date_ranges = $arr;

        return $this;
    }

    /**
     * Dimension filters let you restrict report response to specific
     * dimension values which match the filter. For example, filtering on access
     * records of a single user. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression dimension_filter = 5;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessFilterExpression|null
     */
    public function getDimensionFilter()
    {
        return $this->dimension_filter;
    }

    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }

    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }

    /**
     * Dimension filters let you restrict report response to specific
     * dimension values which match the filter. For example, filtering on access
     * records of a single user. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression dimension_filter = 5;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessFilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessFilterExpression::class);
        $this->dimension_filter = $var;

        return $this;
    }

    /**
     * Metric filters allow you to restrict report response to specific metric
     * values which match the filter. Metric filters are applied after aggregating
     * the report's rows, similar to SQL having-clause. Dimensions cannot be used
     * in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression metric_filter = 6;</code>
     * @return \Google\Analytics\Admin\V1beta\AccessFilterExpression|null
     */
    public function getMetricFilter()
    {
        return $this->metric_filter;
    }

    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }

    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }

    /**
     * Metric filters allow you to restrict report response to specific metric
     * values which match the filter. Metric filters are applied after aggregating
     * the report's rows, similar to SQL having-clause. Dimensions cannot be used
     * in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.AccessFilterExpression metric_filter = 6;</code>
     * @param \Google\Analytics\Admin\V1beta\AccessFilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\AccessFilterExpression::class);
        $this->metric_filter = $var;

        return $this;
    }

    /**
     * The row count of the start row. The first row is counted as row 0. If
     * offset is unspecified, it is treated as 0. If offset is zero, then this
     * method will return the first page of results with `limit` entries.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * The row count of the start row. The first row is counted as row 0. If
     * offset is unspecified, it is treated as 0. If offset is zero, then this
     * method will return the first page of results with `limit` entries.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API may return fewer rows than the requested `limit`, if there aren't
     * as many remaining rows as the `limit`. For instance, there are fewer than
     * 300 possible values for the dimension `country`, so when reporting on only
     * `country`, you can't get more than 300 rows, even if you set `limit` to a
     * higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 100,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API may return fewer rows than the requested `limit`, if there aren't
     * as many remaining rows as the `limit`. For instance, there are fewer than
     * 300 possible values for the dimension `country`, so when reporting on only
     * `country`, you can't get more than 300 rows, even if you set `limit` to a
     * higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * This request's time zone if specified. If unspecified, the property's time
     * zone is used. The request's time zone is used to interpret the start & end
     * dates of the report.
     * Formatted as strings from the IANA Time Zone database
     * (https://www.iana.org/time-zones); for example "America/New_York" or
     * "Asia/Tokyo".
     *
     * Generated from protobuf field <code>string time_zone = 9;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * This request's time zone if specified. If unspecified, the property's time
     * zone is used. The request's time zone is used to interpret the start & end
     * dates of the report.
     * Formatted as strings from the IANA Time Zone database
     * (https://www.iana.org/time-zones); for example "America/New_York" or
     * "Asia/Tokyo".
     *
     * Generated from protobuf field <code>string time_zone = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessOrderBy order_bys = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.AccessOrderBy order_bys = 10;</code>
     * @param array<\Google\Analytics\Admin\V1beta\AccessOrderBy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Admin\V1beta\AccessOrderBy::class);
        $this->order_bys = $arr;

        return $this;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [AccessQuota](#AccessQuota). For account-level
     * requests, this field must be false.
     *
     * Generated from protobuf field <code>bool return_entity_quota = 11;</code>
     * @return bool
     */
    public function getReturnEntityQuota()
    {
        return $this->return_entity_quota;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * quota. Quota is returned in [AccessQuota](#AccessQuota). For account-level
     * requests, this field must be false.
     *
     * Generated from protobuf field <code>bool return_entity_quota = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnEntityQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->return_entity_quota = $var;

        return $this;
    }

}

