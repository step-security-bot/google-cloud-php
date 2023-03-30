<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for fetching SCM read/write token.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.FetchReadWriteTokenRequest</code>
 */
class FetchReadWriteTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the repository in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string repository = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $repository = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $repository
     *           Required. The resource name of the repository in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;repositories/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the repository in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string repository = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Required. The resource name of the repository in the format
     * `projects/&#42;&#47;locations/&#42;&#47;connections/&#42;&#47;repositories/&#42;`.
     *
     * Generated from protobuf field <code>string repository = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkString($var, True);
        $this->repository = $var;

        return $this;
    }

}

