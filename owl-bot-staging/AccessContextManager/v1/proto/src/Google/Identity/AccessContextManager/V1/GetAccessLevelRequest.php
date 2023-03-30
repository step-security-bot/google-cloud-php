<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to get a particular `AccessLevel`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.GetAccessLevelRequest</code>
 */
class GetAccessLevelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel].
     * Format:
     * `accessPolicies/{policy_id}/accessLevels/{access_level_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression
     * Language rather than as `BasicLevels`. Defaults to AS_DEFINED, where
     * [Access Levels] [google.identity.accesscontextmanager.v1.AccessLevel]
     * are returned as `BasicLevels` or `CustomLevels` based on how they were
     * created. If set to CEL, all [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] are returned as
     * `CustomLevels`. In the CEL case, `BasicLevels` are translated to equivalent
     * `CustomLevels`.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 2;</code>
     */
    protected $access_level_format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name for the [Access Level]
     *           [google.identity.accesscontextmanager.v1.AccessLevel].
     *           Format:
     *           `accessPolicies/{policy_id}/accessLevels/{access_level_id}`
     *     @type int $access_level_format
     *           Whether to return `BasicLevels` in the Cloud Common Expression
     *           Language rather than as `BasicLevels`. Defaults to AS_DEFINED, where
     *           [Access Levels] [google.identity.accesscontextmanager.v1.AccessLevel]
     *           are returned as `BasicLevels` or `CustomLevels` based on how they were
     *           created. If set to CEL, all [Access Levels]
     *           [google.identity.accesscontextmanager.v1.AccessLevel] are returned as
     *           `CustomLevels`. In the CEL case, `BasicLevels` are translated to equivalent
     *           `CustomLevels`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel].
     * Format:
     * `accessPolicies/{policy_id}/accessLevels/{access_level_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name for the [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel].
     * Format:
     * `accessPolicies/{policy_id}/accessLevels/{access_level_id}`
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

    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression
     * Language rather than as `BasicLevels`. Defaults to AS_DEFINED, where
     * [Access Levels] [google.identity.accesscontextmanager.v1.AccessLevel]
     * are returned as `BasicLevels` or `CustomLevels` based on how they were
     * created. If set to CEL, all [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] are returned as
     * `CustomLevels`. In the CEL case, `BasicLevels` are translated to equivalent
     * `CustomLevels`.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 2;</code>
     * @return int
     */
    public function getAccessLevelFormat()
    {
        return $this->access_level_format;
    }

    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression
     * Language rather than as `BasicLevels`. Defaults to AS_DEFINED, where
     * [Access Levels] [google.identity.accesscontextmanager.v1.AccessLevel]
     * are returned as `BasicLevels` or `CustomLevels` based on how they were
     * created. If set to CEL, all [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] are returned as
     * `CustomLevels`. In the CEL case, `BasicLevels` are translated to equivalent
     * `CustomLevels`.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAccessLevelFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Identity\AccessContextManager\V1\LevelFormat::class);
        $this->access_level_format = $var;

        return $this;
    }

}

