<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/messages.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rich message format, including a human readable string, a key for
 * identifying the message, and structured data associated with the message for
 * programmatic consumption.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.StructuredMessage</code>
 */
class StructuredMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Human-readable version of message.
     *
     * Generated from protobuf field <code>string message_text = 1;</code>
     */
    protected $message_text = '';
    /**
     * Identifier for this message type.  Used by external systems to
     * internationalize or personalize message.
     *
     * Generated from protobuf field <code>string message_key = 2;</code>
     */
    protected $message_key = '';
    /**
     * The structured data associated with this message.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StructuredMessage.Parameter parameters = 3;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_text
     *           Human-readable version of message.
     *     @type string $message_key
     *           Identifier for this message type.  Used by external systems to
     *           internationalize or personalize message.
     *     @type array<\Google\Cloud\Dataflow\V1beta3\StructuredMessage\Parameter>|\Google\Protobuf\Internal\RepeatedField $parameters
     *           The structured data associated with this message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Messages::initOnce();
        parent::__construct($data);
    }

    /**
     * Human-readable version of message.
     *
     * Generated from protobuf field <code>string message_text = 1;</code>
     * @return string
     */
    public function getMessageText()
    {
        return $this->message_text;
    }

    /**
     * Human-readable version of message.
     *
     * Generated from protobuf field <code>string message_text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageText($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_text = $var;

        return $this;
    }

    /**
     * Identifier for this message type.  Used by external systems to
     * internationalize or personalize message.
     *
     * Generated from protobuf field <code>string message_key = 2;</code>
     * @return string
     */
    public function getMessageKey()
    {
        return $this->message_key;
    }

    /**
     * Identifier for this message type.  Used by external systems to
     * internationalize or personalize message.
     *
     * Generated from protobuf field <code>string message_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_key = $var;

        return $this;
    }

    /**
     * The structured data associated with this message.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StructuredMessage.Parameter parameters = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * The structured data associated with this message.
     *
     * Generated from protobuf field <code>repeated .google.dataflow.v1beta3.StructuredMessage.Parameter parameters = 3;</code>
     * @param array<\Google\Cloud\Dataflow\V1beta3\StructuredMessage\Parameter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataflow\V1beta3\StructuredMessage\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

}

