<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a diagnostic message (error or warning)
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.Diagnostic</code>
 */
class Diagnostic extends \Google\Protobuf\Internal\Message
{
    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    protected $location = '';
    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     */
    protected $kind = 0;
    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     */
    protected $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           File name and line number of the error or warning.
     *     @type int $kind
     *           The kind of diagnostic information provided.
     *     @type string $message
     *           Message describing the error or warning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * File name and line number of the error or warning.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of diagnostic information provided.
     *
     * Generated from protobuf field <code>.google.api.servicemanagement.v1.Diagnostic.Kind kind = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceManagement\V1\Diagnostic\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Message describing the error or warning.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

