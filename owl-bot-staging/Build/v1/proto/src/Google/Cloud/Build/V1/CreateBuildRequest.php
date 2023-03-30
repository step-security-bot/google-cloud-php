<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a new build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.CreateBuildRequest</code>
 */
class CreateBuildRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource where this build will be created.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * Required. Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $build = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource where this build will be created.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $project_id
     *           Required. ID of the project.
     *     @type \Google\Cloud\Build\V1\Build $build
     *           Required. Build resource to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource where this build will be created.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource where this build will be created.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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

