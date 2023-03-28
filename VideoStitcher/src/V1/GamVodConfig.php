<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/sessions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for registering a VOD Session with Google Ad Manager (GAM).
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.GamVodConfig</code>
 */
class GamVodConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Ad Manager network code.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network_code = '';
    /**
     * Required. The stream ID generated by Ad Manager.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $stream_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_code
     *           Required. Ad Manager network code.
     *     @type string $stream_id
     *           Required. The stream ID generated by Ad Manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Ad Manager network code.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkCode()
    {
        return $this->network_code;
    }

    /**
     * Required. Ad Manager network code.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_code = $var;

        return $this;
    }

    /**
     * Required. The stream ID generated by Ad Manager.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * Required. The stream ID generated by Ad Manager.
     *
     * Generated from protobuf field <code>string stream_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

}

