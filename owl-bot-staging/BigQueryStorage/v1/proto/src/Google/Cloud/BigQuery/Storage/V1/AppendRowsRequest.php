<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AppendRows`.
 * Due to the nature of AppendRows being a bidirectional streaming RPC, certain
 * parts of the AppendRowsRequest need only be specified for the first request
 * sent each time the gRPC network connection is opened/reopened.
 * The size of a single AppendRowsRequest must be less than 10 MB in size.
 * Requests larger than this return an error, typically `INVALID_ARGUMENT`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.AppendRowsRequest</code>
 */
class AppendRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The write_stream identifies the target of the append operation,
     * and only needs to be specified as part of the first request on the gRPC
     * connection. If provided for subsequent requests, it must match the value of
     * the first request.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $write_stream = '';
    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     */
    protected $offset = null;
    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     */
    protected $trace_id = '';
    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     */
    private $missing_value_interpretations;
    protected $rows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $write_stream
     *           Required. The write_stream identifies the target of the append operation,
     *           and only needs to be specified as part of the first request on the gRPC
     *           connection. If provided for subsequent requests, it must match the value of
     *           the first request.
     *           For explicitly created write streams, the format is:
     *           * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     *           For the special default stream, the format is:
     *           * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *     @type \Google\Protobuf\Int64Value $offset
     *           If present, the write is only performed if the next append offset is same
     *           as the provided value. If not present, the write is performed at the
     *           current end of stream. Specifying a value for this field is not allowed
     *           when calling AppendRows for the '_default' stream.
     *     @type \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData $proto_rows
     *           Rows in proto format.
     *     @type string $trace_id
     *           Id set by client to annotate its identity. Only initial request setting is
     *           respected.
     *     @type array|\Google\Protobuf\Internal\MapField $missing_value_interpretations
     *           A map to indicate how to interpret missing value for some fields. Missing
     *           values are fields present in user schema but missing in rows. The key is
     *           the field name. The value is the interpretation of missing values for the
     *           field.
     *           For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     *           missing values in field foo are interpreted as NULL, all missing values in
     *           field bar are interpreted as the default value of field bar in table
     *           schema.
     *           If a field is not in this map and has missing values, the missing values
     *           in this field are interpreted as NULL.
     *           This field only applies to the current request, it won't affect other
     *           requests on the connection.
     *           Currently, field name can only be top-level column name, can't be a struct
     *           field path like 'foo.bar'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The write_stream identifies the target of the append operation,
     * and only needs to be specified as part of the first request on the gRPC
     * connection. If provided for subsequent requests, it must match the value of
     * the first request.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWriteStream()
    {
        return $this->write_stream;
    }

    /**
     * Required. The write_stream identifies the target of the append operation,
     * and only needs to be specified as part of the first request on the gRPC
     * connection. If provided for subsequent requests, it must match the value of
     * the first request.
     * For explicitly created write streams, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/{id}`
     * For the special default stream, the format is:
     * * `projects/{project}/datasets/{dataset}/tables/{table}/streams/_default`.
     *
     * Generated from protobuf field <code>string write_stream = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWriteStream($var)
    {
        GPBUtil::checkString($var, True);
        $this->write_stream = $var;

        return $this;
    }

    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    public function hasOffset()
    {
        return isset($this->offset);
    }

    public function clearOffset()
    {
        unset($this->offset);
    }

    /**
     * Returns the unboxed value from <code>getOffset()</code>

     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @return int|string|null
     */
    public function getOffsetUnwrapped()
    {
        return $this->readWrapperValue("offset");
    }

    /**
     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->offset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * If present, the write is only performed if the next append offset is same
     * as the provided value. If not present, the write is performed at the
     * current end of stream. Specifying a value for this field is not allowed
     * when calling AppendRows for the '_default' stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value offset = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setOffsetUnwrapped($var)
    {
        $this->writeWrapperValue("offset", $var);
        return $this;}

    /**
     * Rows in proto format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ProtoData proto_rows = 4;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData|null
     */
    public function getProtoRows()
    {
        return $this->readOneof(4);
    }

    public function hasProtoRows()
    {
        return $this->hasOneof(4);
    }

    /**
     * Rows in proto format.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.AppendRowsRequest.ProtoData proto_rows = 4;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData $var
     * @return $this
     */
    public function setProtoRows($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\ProtoData::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Id set by client to annotate its identity. Only initial request setting is
     * respected.
     *
     * Generated from protobuf field <code>string trace_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMissingValueInterpretations()
    {
        return $this->missing_value_interpretations;
    }

    /**
     * A map to indicate how to interpret missing value for some fields. Missing
     * values are fields present in user schema but missing in rows. The key is
     * the field name. The value is the interpretation of missing values for the
     * field.
     * For example, a map {'foo': NULL_VALUE, 'bar': DEFAULT_VALUE} means all
     * missing values in field foo are interpreted as NULL, all missing values in
     * field bar are interpreted as the default value of field bar in table
     * schema.
     * If a field is not in this map and has missing values, the missing values
     * in this field are interpreted as NULL.
     * This field only applies to the current request, it won't affect other
     * requests on the connection.
     * Currently, field name can only be top-level column name, can't be a struct
     * field path like 'foo.bar'.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.bigquery.storage.v1.AppendRowsRequest.MissingValueInterpretation> missing_value_interpretations = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMissingValueInterpretations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\BigQuery\Storage\V1\AppendRowsRequest\MissingValueInterpretation::class);
        $this->missing_value_interpretations = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getRows()
    {
        return $this->whichOneof("rows");
    }

}

