<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\Instance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * QueryInsights Instance specific configuration.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1alpha.Instance.QueryInsightsInstanceConfig</code>
 */
class QueryInsightsInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Record application tags for an instance.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_application_tags = 2;</code>
     */
    protected $record_application_tags = null;
    /**
     * Record client address for an instance. Client address is PII information.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_client_address = 3;</code>
     */
    protected $record_client_address = null;
    /**
     * Query string length. The default value is 1024.
     * Any integer between 256 and 4500 is considered valid.
     *
     * Generated from protobuf field <code>uint32 query_string_length = 4;</code>
     */
    protected $query_string_length = 0;
    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. The default value is 5.
     * Any integer between 0 and 20 is considered valid.
     *
     * Generated from protobuf field <code>optional uint32 query_plans_per_minute = 5;</code>
     */
    protected $query_plans_per_minute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $record_application_tags
     *           Record application tags for an instance.
     *           This flag is turned "on" by default.
     *     @type bool $record_client_address
     *           Record client address for an instance. Client address is PII information.
     *           This flag is turned "on" by default.
     *     @type int $query_string_length
     *           Query string length. The default value is 1024.
     *           Any integer between 256 and 4500 is considered valid.
     *     @type int $query_plans_per_minute
     *           Number of query execution plans captured by Insights per minute
     *           for all queries combined. The default value is 5.
     *           Any integer between 0 and 20 is considered valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Record application tags for an instance.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_application_tags = 2;</code>
     * @return bool
     */
    public function getRecordApplicationTags()
    {
        return isset($this->record_application_tags) ? $this->record_application_tags : false;
    }

    public function hasRecordApplicationTags()
    {
        return isset($this->record_application_tags);
    }

    public function clearRecordApplicationTags()
    {
        unset($this->record_application_tags);
    }

    /**
     * Record application tags for an instance.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_application_tags = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecordApplicationTags($var)
    {
        GPBUtil::checkBool($var);
        $this->record_application_tags = $var;

        return $this;
    }

    /**
     * Record client address for an instance. Client address is PII information.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_client_address = 3;</code>
     * @return bool
     */
    public function getRecordClientAddress()
    {
        return isset($this->record_client_address) ? $this->record_client_address : false;
    }

    public function hasRecordClientAddress()
    {
        return isset($this->record_client_address);
    }

    public function clearRecordClientAddress()
    {
        unset($this->record_client_address);
    }

    /**
     * Record client address for an instance. Client address is PII information.
     * This flag is turned "on" by default.
     *
     * Generated from protobuf field <code>optional bool record_client_address = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecordClientAddress($var)
    {
        GPBUtil::checkBool($var);
        $this->record_client_address = $var;

        return $this;
    }

    /**
     * Query string length. The default value is 1024.
     * Any integer between 256 and 4500 is considered valid.
     *
     * Generated from protobuf field <code>uint32 query_string_length = 4;</code>
     * @return int
     */
    public function getQueryStringLength()
    {
        return $this->query_string_length;
    }

    /**
     * Query string length. The default value is 1024.
     * Any integer between 256 and 4500 is considered valid.
     *
     * Generated from protobuf field <code>uint32 query_string_length = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setQueryStringLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->query_string_length = $var;

        return $this;
    }

    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. The default value is 5.
     * Any integer between 0 and 20 is considered valid.
     *
     * Generated from protobuf field <code>optional uint32 query_plans_per_minute = 5;</code>
     * @return int
     */
    public function getQueryPlansPerMinute()
    {
        return isset($this->query_plans_per_minute) ? $this->query_plans_per_minute : 0;
    }

    public function hasQueryPlansPerMinute()
    {
        return isset($this->query_plans_per_minute);
    }

    public function clearQueryPlansPerMinute()
    {
        unset($this->query_plans_per_minute);
    }

    /**
     * Number of query execution plans captured by Insights per minute
     * for all queries combined. The default value is 5.
     * Any integer between 0 and 20 is considered valid.
     *
     * Generated from protobuf field <code>optional uint32 query_plans_per_minute = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setQueryPlansPerMinute($var)
    {
        GPBUtil::checkUint32($var);
        $this->query_plans_per_minute = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryInsightsInstanceConfig::class, \Google\Cloud\AlloyDb\V1alpha\Instance_QueryInsightsInstanceConfig::class);

