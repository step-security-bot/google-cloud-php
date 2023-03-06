<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/custom_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the spec of a CustomJob.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CustomJobSpec</code>
 */
class CustomJobSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The spec of the worker pools including machine type and Docker
     * image. All worker pools except the first one are optional and can be
     * skipped by providing an empty value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WorkerPoolSpec worker_pool_specs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $worker_pool_specs;
    /**
     * Scheduling options for a CustomJob.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling scheduling = 3;</code>
     */
    private $scheduling = null;
    /**
     * Specifies the service account for workload run-as account.
     * Users submitting jobs must have act-as permission on this run-as account.
     * If unspecified, the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents)
     * for the CustomJob's project is used.
     *
     * Generated from protobuf field <code>string service_account = 4;</code>
     */
    private $service_account = '';
    /**
     * Optional. The full name of the Compute Engine
     * [network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) to which the Job
     * should be peered. For example, `projects/12345/global/networks/myVPC`.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the job is not peered with any network.
     *
     * Generated from protobuf field <code>string network = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $network = '';
    /**
     * Optional. A list of names for the reserved ip ranges under the VPC network
     * that can be used for this job.
     * If set, we will deploy the job within the provided ip ranges. Otherwise,
     * the job will be deployed to any ip ranges under the provided VPC
     * network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $reserved_ip_ranges;
    /**
     * The Cloud Storage location to store the output of this CustomJob or
     * HyperparameterTuningJob. For HyperparameterTuningJob,
     * the baseOutputDirectory of
     * each child CustomJob backing a Trial is set to a subdirectory of name
     * [id][google.cloud.aiplatform.v1.Trial.id] under its parent
     * HyperparameterTuningJob's baseOutputDirectory.
     * The following Vertex AI environment variables will be passed to
     * containers or python modules when this field is set:
     *   For CustomJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/logs/`
     *   For CustomJob backing a Trial of HyperparameterTuningJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/<trial_id>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/<trial_id>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/<trial_id>/logs/`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination base_output_directory = 6;</code>
     */
    private $base_output_directory = null;
    /**
     * Optional. The name of a Vertex AI
     * [Tensorboard][google.cloud.aiplatform.v1.Tensorboard] resource to which
     * this CustomJob will upload Tensorboard logs. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *
     * Generated from protobuf field <code>string tensorboard = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $tensorboard = '';
    /**
     * Optional. Whether you want Vertex AI to enable [interactive shell
     * access](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * to training containers.
     * If set to `true`, you can access interactive shells at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_web_access = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_web_access = false;
    /**
     * Optional. Whether you want Vertex AI to enable access to the customized
     * dashboard in training chief container.
     * If set to `true`, you can access the dashboard at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_dashboard_access = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_dashboard_access = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\WorkerPoolSpec>|\Google\Protobuf\Internal\RepeatedField $worker_pool_specs
     *           Required. The spec of the worker pools including machine type and Docker
     *           image. All worker pools except the first one are optional and can be
     *           skipped by providing an empty value.
     *     @type \Google\Cloud\AIPlatform\V1\Scheduling $scheduling
     *           Scheduling options for a CustomJob.
     *     @type string $service_account
     *           Specifies the service account for workload run-as account.
     *           Users submitting jobs must have act-as permission on this run-as account.
     *           If unspecified, the [Vertex AI Custom Code Service
     *           Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents)
     *           for the CustomJob's project is used.
     *     @type string $network
     *           Optional. The full name of the Compute Engine
     *           [network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) to which the Job
     *           should be peered. For example, `projects/12345/global/networks/myVPC`.
     *           [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert)
     *           is of the form `projects/{project}/global/networks/{network}`.
     *           Where {project} is a project number, as in `12345`, and {network} is a
     *           network name.
     *           To specify this field, you must have already [configured VPC Network
     *           Peering for Vertex
     *           AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     *           If this field is left unspecified, the job is not peered with any network.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $reserved_ip_ranges
     *           Optional. A list of names for the reserved ip ranges under the VPC network
     *           that can be used for this job.
     *           If set, we will deploy the job within the provided ip ranges. Otherwise,
     *           the job will be deployed to any ip ranges under the provided VPC
     *           network.
     *           Example: ['vertex-ai-ip-range'].
     *     @type \Google\Cloud\AIPlatform\V1\GcsDestination $base_output_directory
     *           The Cloud Storage location to store the output of this CustomJob or
     *           HyperparameterTuningJob. For HyperparameterTuningJob,
     *           the baseOutputDirectory of
     *           each child CustomJob backing a Trial is set to a subdirectory of name
     *           [id][google.cloud.aiplatform.v1.Trial.id] under its parent
     *           HyperparameterTuningJob's baseOutputDirectory.
     *           The following Vertex AI environment variables will be passed to
     *           containers or python modules when this field is set:
     *             For CustomJob:
     *             * AIP_MODEL_DIR = `<base_output_directory>/model/`
     *             * AIP_CHECKPOINT_DIR = `<base_output_directory>/checkpoints/`
     *             * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/logs/`
     *             For CustomJob backing a Trial of HyperparameterTuningJob:
     *             * AIP_MODEL_DIR = `<base_output_directory>/<trial_id>/model/`
     *             * AIP_CHECKPOINT_DIR = `<base_output_directory>/<trial_id>/checkpoints/`
     *             * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/<trial_id>/logs/`
     *     @type string $tensorboard
     *           Optional. The name of a Vertex AI
     *           [Tensorboard][google.cloud.aiplatform.v1.Tensorboard] resource to which
     *           this CustomJob will upload Tensorboard logs. Format:
     *           `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *     @type bool $enable_web_access
     *           Optional. Whether you want Vertex AI to enable [interactive shell
     *           access](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     *           to training containers.
     *           If set to `true`, you can access interactive shells at the URIs given
     *           by
     *           [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     *           or
     *           [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     *           (within
     *           [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *     @type bool $enable_dashboard_access
     *           Optional. Whether you want Vertex AI to enable access to the customized
     *           dashboard in training chief container.
     *           If set to `true`, you can access the dashboard at the URIs given
     *           by
     *           [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     *           or
     *           [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     *           (within
     *           [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\CustomJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The spec of the worker pools including machine type and Docker
     * image. All worker pools except the first one are optional and can be
     * skipped by providing an empty value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WorkerPoolSpec worker_pool_specs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkerPoolSpecs()
    {
        return $this->worker_pool_specs;
    }

    /**
     * Required. The spec of the worker pools including machine type and Docker
     * image. All worker pools except the first one are optional and can be
     * skipped by providing an empty value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.WorkerPoolSpec worker_pool_specs = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\AIPlatform\V1\WorkerPoolSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkerPoolSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\WorkerPoolSpec::class);
        $this->worker_pool_specs = $arr;

        return $this;
    }

    /**
     * Scheduling options for a CustomJob.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling scheduling = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\Scheduling|null
     */
    public function getScheduling()
    {
        return $this->scheduling;
    }

    public function hasScheduling()
    {
        return isset($this->scheduling);
    }

    public function clearScheduling()
    {
        unset($this->scheduling);
    }

    /**
     * Scheduling options for a CustomJob.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Scheduling scheduling = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\Scheduling $var
     * @return $this
     */
    public function setScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Scheduling::class);
        $this->scheduling = $var;

        return $this;
    }

    /**
     * Specifies the service account for workload run-as account.
     * Users submitting jobs must have act-as permission on this run-as account.
     * If unspecified, the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents)
     * for the CustomJob's project is used.
     *
     * Generated from protobuf field <code>string service_account = 4;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Specifies the service account for workload run-as account.
     * Users submitting jobs must have act-as permission on this run-as account.
     * If unspecified, the [Vertex AI Custom Code Service
     * Agent](https://cloud.google.com/vertex-ai/docs/general/access-control#service-agents)
     * for the CustomJob's project is used.
     *
     * Generated from protobuf field <code>string service_account = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. The full name of the Compute Engine
     * [network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) to which the Job
     * should be peered. For example, `projects/12345/global/networks/myVPC`.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the job is not peered with any network.
     *
     * Generated from protobuf field <code>string network = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Optional. The full name of the Compute Engine
     * [network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) to which the Job
     * should be peered. For example, `projects/12345/global/networks/myVPC`.
     * [Format](https://cloud.google.com/compute/docs/reference/rest/v1/networks/insert)
     * is of the form `projects/{project}/global/networks/{network}`.
     * Where {project} is a project number, as in `12345`, and {network} is a
     * network name.
     * To specify this field, you must have already [configured VPC Network
     * Peering for Vertex
     * AI](https://cloud.google.com/vertex-ai/docs/general/vpc-peering).
     * If this field is left unspecified, the job is not peered with any network.
     *
     * Generated from protobuf field <code>string network = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. A list of names for the reserved ip ranges under the VPC network
     * that can be used for this job.
     * If set, we will deploy the job within the provided ip ranges. Otherwise,
     * the job will be deployed to any ip ranges under the provided VPC
     * network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReservedIpRanges()
    {
        return $this->reserved_ip_ranges;
    }

    /**
     * Optional. A list of names for the reserved ip ranges under the VPC network
     * that can be used for this job.
     * If set, we will deploy the job within the provided ip ranges. Otherwise,
     * the job will be deployed to any ip ranges under the provided VPC
     * network.
     * Example: ['vertex-ai-ip-range'].
     *
     * Generated from protobuf field <code>repeated string reserved_ip_ranges = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReservedIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reserved_ip_ranges = $arr;

        return $this;
    }

    /**
     * The Cloud Storage location to store the output of this CustomJob or
     * HyperparameterTuningJob. For HyperparameterTuningJob,
     * the baseOutputDirectory of
     * each child CustomJob backing a Trial is set to a subdirectory of name
     * [id][google.cloud.aiplatform.v1.Trial.id] under its parent
     * HyperparameterTuningJob's baseOutputDirectory.
     * The following Vertex AI environment variables will be passed to
     * containers or python modules when this field is set:
     *   For CustomJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/logs/`
     *   For CustomJob backing a Trial of HyperparameterTuningJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/<trial_id>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/<trial_id>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/<trial_id>/logs/`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination base_output_directory = 6;</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsDestination|null
     */
    public function getBaseOutputDirectory()
    {
        return $this->base_output_directory;
    }

    public function hasBaseOutputDirectory()
    {
        return isset($this->base_output_directory);
    }

    public function clearBaseOutputDirectory()
    {
        unset($this->base_output_directory);
    }

    /**
     * The Cloud Storage location to store the output of this CustomJob or
     * HyperparameterTuningJob. For HyperparameterTuningJob,
     * the baseOutputDirectory of
     * each child CustomJob backing a Trial is set to a subdirectory of name
     * [id][google.cloud.aiplatform.v1.Trial.id] under its parent
     * HyperparameterTuningJob's baseOutputDirectory.
     * The following Vertex AI environment variables will be passed to
     * containers or python modules when this field is set:
     *   For CustomJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/logs/`
     *   For CustomJob backing a Trial of HyperparameterTuningJob:
     *   * AIP_MODEL_DIR = `<base_output_directory>/<trial_id>/model/`
     *   * AIP_CHECKPOINT_DIR = `<base_output_directory>/<trial_id>/checkpoints/`
     *   * AIP_TENSORBOARD_LOG_DIR = `<base_output_directory>/<trial_id>/logs/`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination base_output_directory = 6;</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsDestination $var
     * @return $this
     */
    public function setBaseOutputDirectory($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsDestination::class);
        $this->base_output_directory = $var;

        return $this;
    }

    /**
     * Optional. The name of a Vertex AI
     * [Tensorboard][google.cloud.aiplatform.v1.Tensorboard] resource to which
     * this CustomJob will upload Tensorboard logs. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *
     * Generated from protobuf field <code>string tensorboard = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTensorboard()
    {
        return $this->tensorboard;
    }

    /**
     * Optional. The name of a Vertex AI
     * [Tensorboard][google.cloud.aiplatform.v1.Tensorboard] resource to which
     * this CustomJob will upload Tensorboard logs. Format:
     * `projects/{project}/locations/{location}/tensorboards/{tensorboard}`
     *
     * Generated from protobuf field <code>string tensorboard = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTensorboard($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorboard = $var;

        return $this;
    }

    /**
     * Optional. Whether you want Vertex AI to enable [interactive shell
     * access](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * to training containers.
     * If set to `true`, you can access interactive shells at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_web_access = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableWebAccess()
    {
        return $this->enable_web_access;
    }

    /**
     * Optional. Whether you want Vertex AI to enable [interactive shell
     * access](https://cloud.google.com/vertex-ai/docs/training/monitor-debug-interactive-shell)
     * to training containers.
     * If set to `true`, you can access interactive shells at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_web_access = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableWebAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_web_access = $var;

        return $this;
    }

    /**
     * Optional. Whether you want Vertex AI to enable access to the customized
     * dashboard in training chief container.
     * If set to `true`, you can access the dashboard at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_dashboard_access = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableDashboardAccess()
    {
        return $this->enable_dashboard_access;
    }

    /**
     * Optional. Whether you want Vertex AI to enable access to the customized
     * dashboard in training chief container.
     * If set to `true`, you can access the dashboard at the URIs given
     * by
     * [CustomJob.web_access_uris][google.cloud.aiplatform.v1.CustomJob.web_access_uris]
     * or
     * [Trial.web_access_uris][google.cloud.aiplatform.v1.Trial.web_access_uris]
     * (within
     * [HyperparameterTuningJob.trials][google.cloud.aiplatform.v1.HyperparameterTuningJob.trials]).
     *
     * Generated from protobuf field <code>bool enable_dashboard_access = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDashboardAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_dashboard_access = $var;

        return $this;
    }

}

