<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [Firestore.ListDocuments][google.firestore.v1.Firestore.ListDocuments].
 *
 * Generated from protobuf message <code>google.firestore.v1.ListDocumentsRequest</code>
 */
class ListDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Optional. The collection ID, relative to `parent`, to list.
     * For example: `chatrooms` or `messages`.
     * This is optional, and when not provided, Firestore will list documents
     * from all collections under the provided `parent`.
     *
     * Generated from protobuf field <code>string collection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $collection_id = '';
    /**
     * Optional. The maximum number of documents to return in a single response.
     * Firestore may return fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListDocuments` response.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters (with the exception of `page_size`) must match the values set
     * in the request that generated the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The optional ordering of the documents to return.
     * For example: `priority desc, __name__ desc`.
     * This mirrors the [`ORDER BY`][google.firestore.v1.StructuredQuery.order_by]
     * used in Firestore queries but in a string representation. When absent,
     * documents are ordered based on `__name__ ASC`.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';
    /**
     * Optional. The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $mask = null;
    /**
     * If the list should show missing documents.
     * A document is missing if it does not exist, but there are sub-documents
     * nested underneath it. When true, such missing documents will be returned
     * with a key but will not have fields,
     * [`create_time`][google.firestore.v1.Document.create_time], or
     * [`update_time`][google.firestore.v1.Document.update_time] set.
     * Requests with `show_missing` may not specify `where` or `order_by`.
     *
     * Generated from protobuf field <code>bool show_missing = 12;</code>
     */
    protected $show_missing = false;
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents` or
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *           For example:
     *           `projects/my-project/databases/my-database/documents` or
     *           `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *     @type string $collection_id
     *           Optional. The collection ID, relative to `parent`, to list.
     *           For example: `chatrooms` or `messages`.
     *           This is optional, and when not provided, Firestore will list documents
     *           from all collections under the provided `parent`.
     *     @type int $page_size
     *           Optional. The maximum number of documents to return in a single response.
     *           Firestore may return fewer than this value.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListDocuments` response.
     *           Provide this to retrieve the subsequent page. When paginating, all other
     *           parameters (with the exception of `page_size`) must match the values set
     *           in the request that generated the page token.
     *     @type string $order_by
     *           Optional. The optional ordering of the documents to return.
     *           For example: `priority desc, __name__ desc`.
     *           This mirrors the [`ORDER BY`][google.firestore.v1.StructuredQuery.order_by]
     *           used in Firestore queries but in a string representation. When absent,
     *           documents are ordered based on `__name__ ASC`.
     *     @type \Google\Cloud\Firestore\V1\DocumentMask $mask
     *           Optional. The fields to return. If not set, returns all fields.
     *           If a document has a field that is not present in this mask, that field
     *           will not be returned in the response.
     *     @type string $transaction
     *           Perform the read as part of an already active transaction.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Perform the read at the provided time.
     *           This may not be older than 270 seconds.
     *     @type bool $show_missing
     *           If the list should show missing documents.
     *           A document is missing if it does not exist, but there are sub-documents
     *           nested underneath it. When true, such missing documents will be returned
     *           with a key but will not have fields,
     *           [`create_time`][google.firestore.v1.Document.create_time], or
     *           [`update_time`][google.firestore.v1.Document.update_time] set.
     *           Requests with `show_missing` may not specify `where` or `order_by`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name. In the format:
     * `projects/{project_id}/databases/{database_id}/documents` or
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     * For example:
     * `projects/my-project/databases/my-database/documents` or
     * `projects/my-project/databases/my-database/documents/chatrooms/my-chatroom`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The collection ID, relative to `parent`, to list.
     * For example: `chatrooms` or `messages`.
     * This is optional, and when not provided, Firestore will list documents
     * from all collections under the provided `parent`.
     *
     * Generated from protobuf field <code>string collection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * Optional. The collection ID, relative to `parent`, to list.
     * For example: `chatrooms` or `messages`.
     * This is optional, and when not provided, Firestore will list documents
     * from all collections under the provided `parent`.
     *
     * Generated from protobuf field <code>string collection_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of documents to return in a single response.
     * Firestore may return fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of documents to return in a single response.
     * Firestore may return fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListDocuments` response.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters (with the exception of `page_size`) must match the values set
     * in the request that generated the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListDocuments` response.
     * Provide this to retrieve the subsequent page. When paginating, all other
     * parameters (with the exception of `page_size`) must match the values set
     * in the request that generated the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The optional ordering of the documents to return.
     * For example: `priority desc, __name__ desc`.
     * This mirrors the [`ORDER BY`][google.firestore.v1.StructuredQuery.order_by]
     * used in Firestore queries but in a string representation. When absent,
     * documents are ordered based on `__name__ ASC`.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. The optional ordering of the documents to return.
     * For example: `priority desc, __name__ desc`.
     * This mirrors the [`ORDER BY`][google.firestore.v1.StructuredQuery.order_by]
     * used in Firestore queries but in a string representation. When absent,
     * documents are ordered based on `__name__ ASC`.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Optional. The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Firestore\V1\DocumentMask|null
     */
    public function getMask()
    {
        return $this->mask;
    }

    public function hasMask()
    {
        return isset($this->mask);
    }

    public function clearMask()
    {
        unset($this->mask);
    }

    /**
     * Optional. The fields to return. If not set, returns all fields.
     * If a document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Firestore\V1\DocumentMask $var
     * @return $this
     */
    public function setMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\DocumentMask::class);
        $this->mask = $var;

        return $this;
    }

    /**
     * Perform the read as part of an already active transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 8;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(8);
    }

    public function hasTransaction()
    {
        return $this->hasOneof(8);
    }

    /**
     * Perform the read as part of an already active transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Perform the read at the provided time.
     * This may not be older than 270 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(10);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(10);
    }

    /**
     * Perform the read at the provided time.
     * This may not be older than 270 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * If the list should show missing documents.
     * A document is missing if it does not exist, but there are sub-documents
     * nested underneath it. When true, such missing documents will be returned
     * with a key but will not have fields,
     * [`create_time`][google.firestore.v1.Document.create_time], or
     * [`update_time`][google.firestore.v1.Document.update_time] set.
     * Requests with `show_missing` may not specify `where` or `order_by`.
     *
     * Generated from protobuf field <code>bool show_missing = 12;</code>
     * @return bool
     */
    public function getShowMissing()
    {
        return $this->show_missing;
    }

    /**
     * If the list should show missing documents.
     * A document is missing if it does not exist, but there are sub-documents
     * nested underneath it. When true, such missing documents will be returned
     * with a key but will not have fields,
     * [`create_time`][google.firestore.v1.Document.create_time], or
     * [`update_time`][google.firestore.v1.Document.update_time] set.
     * Requests with `show_missing` may not specify `where` or `order_by`.
     *
     * Generated from protobuf field <code>bool show_missing = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->show_missing = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

