<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/operation.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for [google.longrunning.Operation][google.longrunning.Operation] results from
 * [FirestoreAdmin.UpdateField][google.firestore.admin.v1.FirestoreAdmin.UpdateField].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.FieldOperationMetadata</code>
 */
class FieldOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    protected $start_time = null;
    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    protected $end_time = null;
    /**
     * The field resource that this operation is acting on. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     *
     * Generated from protobuf field <code>string field = 3;</code>
     */
    protected $field = '';
    /**
     * A list of [IndexConfigDelta][google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta], which describe the intent of this
     * operation.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta index_config_deltas = 4;</code>
     */
    private $index_config_deltas;
    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState state = 5;</code>
     */
    protected $state = 0;
    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 6;</code>
     */
    protected $progress_documents = null;
    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 7;</code>
     */
    protected $progress_bytes = null;
    /**
     * Describes the deltas of TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta ttl_config_delta = 8;</code>
     */
    protected $ttl_config_delta = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time this operation started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time this operation completed. Will be unset if operation still in
     *           progress.
     *     @type string $field
     *           The field resource that this operation is acting on. For example:
     *           `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     *     @type array<\Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\IndexConfigDelta>|\Google\Protobuf\Internal\RepeatedField $index_config_deltas
     *           A list of [IndexConfigDelta][google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta], which describe the intent of this
     *           operation.
     *     @type int $state
     *           The state of the operation.
     *     @type \Google\Cloud\Firestore\Admin\V1\Progress $progress_documents
     *           The progress, in documents, of this operation.
     *     @type \Google\Cloud\Firestore\Admin\V1\Progress $progress_bytes
     *           The progress, in bytes, of this operation.
     *     @type \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\TtlConfigDelta $ttl_config_delta
     *           Describes the deltas of TTL configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time this operation started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time this operation completed. Will be unset if operation still in
     * progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * The field resource that this operation is acting on. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     *
     * Generated from protobuf field <code>string field = 3;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * The field resource that this operation is acting on. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     *
     * Generated from protobuf field <code>string field = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * A list of [IndexConfigDelta][google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta], which describe the intent of this
     * operation.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta index_config_deltas = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexConfigDeltas()
    {
        return $this->index_config_deltas;
    }

    /**
     * A list of [IndexConfigDelta][google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta], which describe the intent of this
     * operation.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.FieldOperationMetadata.IndexConfigDelta index_config_deltas = 4;</code>
     * @param array<\Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\IndexConfigDelta>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexConfigDeltas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\IndexConfigDelta::class);
        $this->index_config_deltas = $arr;

        return $this;
    }

    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState state = 5;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.OperationState state = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\OperationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 6;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Progress|null
     */
    public function getProgressDocuments()
    {
        return $this->progress_documents;
    }

    public function hasProgressDocuments()
    {
        return isset($this->progress_documents);
    }

    public function clearProgressDocuments()
    {
        unset($this->progress_documents);
    }

    /**
     * The progress, in documents, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_documents = 6;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressDocuments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Progress::class);
        $this->progress_documents = $var;

        return $this;
    }

    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 7;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Progress|null
     */
    public function getProgressBytes()
    {
        return $this->progress_bytes;
    }

    public function hasProgressBytes()
    {
        return isset($this->progress_bytes);
    }

    public function clearProgressBytes()
    {
        unset($this->progress_bytes);
    }

    /**
     * The progress, in bytes, of this operation.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Progress progress_bytes = 7;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Progress $var
     * @return $this
     */
    public function setProgressBytes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Progress::class);
        $this->progress_bytes = $var;

        return $this;
    }

    /**
     * Describes the deltas of TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta ttl_config_delta = 8;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\TtlConfigDelta|null
     */
    public function getTtlConfigDelta()
    {
        return $this->ttl_config_delta;
    }

    public function hasTtlConfigDelta()
    {
        return isset($this->ttl_config_delta);
    }

    public function clearTtlConfigDelta()
    {
        unset($this->ttl_config_delta);
    }

    /**
     * Describes the deltas of TTL configuration.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta ttl_config_delta = 8;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\TtlConfigDelta $var
     * @return $this
     */
    public function setTtlConfigDelta($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\TtlConfigDelta::class);
        $this->ttl_config_delta = $var;

        return $this;
    }

}

