<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BigQuery row access policy.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicy</code>
 */
class RowAccessPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Row access policy URI.
     * Format:
     * `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>/rowAccessPolicies/<row_access_policy_id>`
     *
     * Generated from protobuf field <code>string row_access_policy_name = 1;</code>
     */
    protected $row_access_policy_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $row_access_policy_name
     *           Row access policy URI.
     *           Format:
     *           `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>/rowAccessPolicies/<row_access_policy_id>`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Row access policy URI.
     * Format:
     * `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>/rowAccessPolicies/<row_access_policy_id>`
     *
     * Generated from protobuf field <code>string row_access_policy_name = 1;</code>
     * @return string
     */
    public function getRowAccessPolicyName()
    {
        return $this->row_access_policy_name;
    }

    /**
     * Row access policy URI.
     * Format:
     * `projects/<project_id>/datasets/<dataset_id>/tables/<table_id>/rowAccessPolicies/<row_access_policy_id>`
     *
     * Generated from protobuf field <code>string row_access_policy_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRowAccessPolicyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->row_access_policy_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RowAccessPolicy::class, \Google\Cloud\Audit\BigQueryAuditMetadata_RowAccessPolicy::class);

