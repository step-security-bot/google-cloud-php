<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_level.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An `AccessLevel` is a label that can be applied to requests to Google Cloud
 * services, along with a list of requirements necessary for the label to be
 * applied.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.AccessLevel</code>
 */
class AccessLevel extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the Access Level. The `short_name` component
     * must begin with a letter and only include alphanumeric and '_'. Format:
     * `accessPolicies/{access_policy}/accessLevels/{access_level}`. The maximum
     * length of the `access_level` component is 50 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Human readable title. Must be unique within the Policy.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Description of the `AccessLevel` and its use. Does not affect behavior.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Output only. Time the `AccessLevel` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    private $create_time = null;
    /**
     * Output only. Time the `AccessLevel` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     */
    private $update_time = null;
    protected $level;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name for the Access Level. The `short_name` component
     *           must begin with a letter and only include alphanumeric and '_'. Format:
     *           `accessPolicies/{access_policy}/accessLevels/{access_level}`. The maximum
     *           length of the `access_level` component is 50 characters.
     *     @type string $title
     *           Human readable title. Must be unique within the Policy.
     *     @type string $description
     *           Description of the `AccessLevel` and its use. Does not affect behavior.
     *     @type \Google\Identity\AccessContextManager\V1\BasicLevel $basic
     *           A `BasicLevel` composed of `Conditions`.
     *     @type \Google\Identity\AccessContextManager\V1\CustomLevel $custom
     *           A `CustomLevel` written in the Common Expression Language.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the `AccessLevel` was created in UTC.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time the `AccessLevel` was updated in UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessLevel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the Access Level. The `short_name` component
     * must begin with a letter and only include alphanumeric and '_'. Format:
     * `accessPolicies/{access_policy}/accessLevels/{access_level}`. The maximum
     * length of the `access_level` component is 50 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name for the Access Level. The `short_name` component
     * must begin with a letter and only include alphanumeric and '_'. Format:
     * `accessPolicies/{access_policy}/accessLevels/{access_level}`. The maximum
     * length of the `access_level` component is 50 characters.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Human readable title. Must be unique within the Policy.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Human readable title. Must be unique within the Policy.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Description of the `AccessLevel` and its use. Does not affect behavior.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the `AccessLevel` and its use. Does not affect behavior.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * A `BasicLevel` composed of `Conditions`.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.BasicLevel basic = 4;</code>
     * @return \Google\Identity\AccessContextManager\V1\BasicLevel|null
     */
    public function getBasic()
    {
        return $this->readOneof(4);
    }

    public function hasBasic()
    {
        return $this->hasOneof(4);
    }

    /**
     * A `BasicLevel` composed of `Conditions`.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.BasicLevel basic = 4;</code>
     * @param \Google\Identity\AccessContextManager\V1\BasicLevel $var
     * @return $this
     */
    public function setBasic($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\BasicLevel::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A `CustomLevel` written in the Common Expression Language.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.CustomLevel custom = 5;</code>
     * @return \Google\Identity\AccessContextManager\V1\CustomLevel|null
     */
    public function getCustom()
    {
        return $this->readOneof(5);
    }

    public function hasCustom()
    {
        return $this->hasOneof(5);
    }

    /**
     * A `CustomLevel` written in the Common Expression Language.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.CustomLevel custom = 5;</code>
     * @param \Google\Identity\AccessContextManager\V1\CustomLevel $var
     * @return $this
     */
    public function setCustom($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\CustomLevel::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Time the `AccessLevel` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time the `AccessLevel` was created in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time the `AccessLevel` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time the `AccessLevel` was updated in UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->whichOneof("level");
    }

}

