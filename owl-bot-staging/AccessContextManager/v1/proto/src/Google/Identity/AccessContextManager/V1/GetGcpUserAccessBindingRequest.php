<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request of [GetGcpUserAccessBinding]
 * [google.identity.accesscontextmanager.v1.AccessContextManager.GetGcpUserAccessBinding].
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.GetGcpUserAccessBindingRequest</code>
 */
class GetGcpUserAccessBindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Example: "organizations/256/gcpUserAccessBindings/b3-BhcX_Ud5N"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

