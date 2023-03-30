<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response of [ListGcpUserAccessBindings]
 * [google.identity.accesscontextmanager.v1.AccessContextManager.ListGcpUserAccessBindings].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ListGcpUserAccessBindingsResponse</code>
 */
class ListGcpUserAccessBindingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_bindings = 1;</code>
     */
    private $gcp_user_access_bindings;
    /**
     * Token to get the next page of items. If blank, there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Identity\AccessContextManager\V1\GcpUserAccessBinding>|\Google\Protobuf\Internal\RepeatedField $gcp_user_access_bindings
     *           [GcpUserAccessBinding]
     *           [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *     @type string $next_page_token
     *           Token to get the next page of items. If blank, there are no more items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_bindings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGcpUserAccessBindings()
    {
        return $this->gcp_user_access_bindings;
    }

    /**
     * [GcpUserAccessBinding]
     * [google.identity.accesscontextmanager.v1.GcpUserAccessBinding]
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.GcpUserAccessBinding gcp_user_access_bindings = 1;</code>
     * @param array<\Google\Identity\AccessContextManager\V1\GcpUserAccessBinding>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGcpUserAccessBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\GcpUserAccessBinding::class);
        $this->gcp_user_access_bindings = $arr;

        return $this;
    }

    /**
     * Token to get the next page of items. If blank, there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to get the next page of items. If blank, there are no more items.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

