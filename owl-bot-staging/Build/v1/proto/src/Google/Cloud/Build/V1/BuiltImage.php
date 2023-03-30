<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An image built by the pipeline.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuiltImage</code>
 */
class BuiltImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Name used to push the container image to Google Container Registry, as
     * presented to `docker push`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Docker Registry 2.0 digest.
     *
     * Generated from protobuf field <code>string digest = 3;</code>
     */
    protected $digest = '';
    /**
     * Output only. Stores timing information for pushing the specified image.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $push_timing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name used to push the container image to Google Container Registry, as
     *           presented to `docker push`.
     *     @type string $digest
     *           Docker Registry 2.0 digest.
     *     @type \Google\Cloud\Build\V1\TimeSpan $push_timing
     *           Output only. Stores timing information for pushing the specified image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Name used to push the container image to Google Container Registry, as
     * presented to `docker push`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name used to push the container image to Google Container Registry, as
     * presented to `docker push`.
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
     * Docker Registry 2.0 digest.
     *
     * Generated from protobuf field <code>string digest = 3;</code>
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Docker Registry 2.0 digest.
     *
     * Generated from protobuf field <code>string digest = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDigest($var)
    {
        GPBUtil::checkString($var, True);
        $this->digest = $var;

        return $this;
    }

    /**
     * Output only. Stores timing information for pushing the specified image.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Build\V1\TimeSpan|null
     */
    public function getPushTiming()
    {
        return $this->push_timing;
    }

    public function hasPushTiming()
    {
        return isset($this->push_timing);
    }

    public function clearPushTiming()
    {
        unset($this->push_timing);
    }

    /**
     * Output only. Stores timing information for pushing the specified image.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan push_timing = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Build\V1\TimeSpan $var
     * @return $this
     */
    public function setPushTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\TimeSpan::class);
        $this->push_timing = $var;

        return $this;
    }

}

