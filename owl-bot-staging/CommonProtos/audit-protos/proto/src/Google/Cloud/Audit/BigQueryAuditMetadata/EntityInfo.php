<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User-provided metadata for an entity, for e.g. dataset, table or model.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.EntityInfo</code>
 */
class EntityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A short name for the entity.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     */
    protected $friendly_name = '';
    /**
     * A long description for the entity.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Labels provided for the entity.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $friendly_name
     *           A short name for the entity.
     *     @type string $description
     *           A long description for the entity.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels provided for the entity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * A short name for the entity.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendly_name;
    }

    /**
     * A short name for the entity.
     *
     * Generated from protobuf field <code>string friendly_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendlyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->friendly_name = $var;

        return $this;
    }

    /**
     * A long description for the entity.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A long description for the entity.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * Labels provided for the entity.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels provided for the entity.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityInfo::class, \Google\Cloud\Audit\BigQueryAuditMetadata_EntityInfo::class);

