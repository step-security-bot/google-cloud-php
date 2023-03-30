<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for build operations.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuildOperationMetadata</code>
 */
class BuildOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     */
    protected $build = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Build\V1\Build $build
     *           The build that the operation is tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     * @return \Google\Cloud\Build\V1\Build|null
     */
    public function getBuild()
    {
        return $this->build;
    }

    public function hasBuild()
    {
        return isset($this->build);
    }

    public function clearBuild()
    {
        unset($this->build);
    }

    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     * @param \Google\Cloud\Build\V1\Build $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\Build::class);
        $this->build = $var;

        return $this;
    }

}

