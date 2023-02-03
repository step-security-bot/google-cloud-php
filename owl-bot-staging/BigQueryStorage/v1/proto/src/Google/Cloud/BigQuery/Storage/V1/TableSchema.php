<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/table.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema of a table. This schema is a subset of
 * google.cloud.bigquery.v2.TableSchema containing information necessary to
 * generate valid message to write to BigQuery.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.TableSchema</code>
 */
class TableSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes the fields in a table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 1;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\BigQuery\Storage\V1\TableFieldSchema>|\Google\Protobuf\Internal\RepeatedField $fields
     *           Describes the fields in a table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes the fields in a table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Describes the fields in a table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.storage.v1.TableFieldSchema fields = 1;</code>
     * @param array<\Google\Cloud\BigQuery\Storage\V1\TableFieldSchema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Storage\V1\TableFieldSchema::class);
        $this->fields = $arr;

        return $this;
    }

}

