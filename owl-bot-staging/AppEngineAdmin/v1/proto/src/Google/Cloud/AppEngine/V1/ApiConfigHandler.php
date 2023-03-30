<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Google Cloud Endpoints](https://cloud.google.com/appengine/docs/python/endpoints/)
 * configuration for API handlers.
 *
 * Generated from protobuf message <code>google.appengine.v1.ApiConfigHandler</code>
 */
class ApiConfigHandler extends \Google\Protobuf\Internal\Message
{
    /**
     * Action to take when users access resources that require
     * authentication. Defaults to `redirect`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.AuthFailAction auth_fail_action = 1;</code>
     */
    protected $auth_fail_action = 0;
    /**
     * Level of login required to access this resource. Defaults to
     * `optional`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.LoginRequirement login = 2;</code>
     */
    protected $login = 0;
    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script = 3;</code>
     */
    protected $script = '';
    /**
     * Security (HTTPS) enforcement for this URL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SecurityLevel security_level = 4;</code>
     */
    protected $security_level = 0;
    /**
     * URL to serve the endpoint at.
     *
     * Generated from protobuf field <code>string url = 5;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $auth_fail_action
     *           Action to take when users access resources that require
     *           authentication. Defaults to `redirect`.
     *     @type int $login
     *           Level of login required to access this resource. Defaults to
     *           `optional`.
     *     @type string $script
     *           Path to the script from the application root directory.
     *     @type int $security_level
     *           Security (HTTPS) enforcement for this URL.
     *     @type string $url
     *           URL to serve the endpoint at.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AppYaml::initOnce();
        parent::__construct($data);
    }

    /**
     * Action to take when users access resources that require
     * authentication. Defaults to `redirect`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.AuthFailAction auth_fail_action = 1;</code>
     * @return int
     */
    public function getAuthFailAction()
    {
        return $this->auth_fail_action;
    }

    /**
     * Action to take when users access resources that require
     * authentication. Defaults to `redirect`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.AuthFailAction auth_fail_action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAuthFailAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\AuthFailAction::class);
        $this->auth_fail_action = $var;

        return $this;
    }

    /**
     * Level of login required to access this resource. Defaults to
     * `optional`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.LoginRequirement login = 2;</code>
     * @return int
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Level of login required to access this resource. Defaults to
     * `optional`.
     *
     * Generated from protobuf field <code>.google.appengine.v1.LoginRequirement login = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLogin($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\LoginRequirement::class);
        $this->login = $var;

        return $this;
    }

    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script = 3;</code>
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->script = $var;

        return $this;
    }

    /**
     * Security (HTTPS) enforcement for this URL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SecurityLevel security_level = 4;</code>
     * @return int
     */
    public function getSecurityLevel()
    {
        return $this->security_level;
    }

    /**
     * Security (HTTPS) enforcement for this URL.
     *
     * Generated from protobuf field <code>.google.appengine.v1.SecurityLevel security_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSecurityLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppEngine\V1\SecurityLevel::class);
        $this->security_level = $var;

        return $this;
    }

    /**
     * URL to serve the endpoint at.
     *
     * Generated from protobuf field <code>string url = 5;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * URL to serve the endpoint at.
     *
     * Generated from protobuf field <code>string url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

