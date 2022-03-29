<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ComputeEngineTargetDetails is a collection of details for creating a VM in a
 * target Compute Engine project.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.ComputeEngineTargetDetails</code>
 */
class ComputeEngineTargetDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the VM to create.
     *
     * Generated from protobuf field <code>string vm_name = 1;</code>
     */
    private $vm_name = '';
    /**
     * The GCP target project ID or project name.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';
    /**
     * The zone in which to create the VM.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     */
    private $zone = '';
    /**
     * The machine type series to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type_series = 4;</code>
     */
    private $machine_type_series = '';
    /**
     * The machine type to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     */
    private $machine_type = '';
    /**
     * A map of network tags to associate with the VM.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6;</code>
     */
    private $network_tags;
    /**
     * List of NICs connected to this VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.NetworkInterface network_interfaces = 7;</code>
     */
    private $network_interfaces;
    /**
     * The service account to associate the VM with.
     *
     * Generated from protobuf field <code>string service_account = 8;</code>
     */
    private $service_account = '';
    /**
     * The disk type to use in the VM.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineDiskType disk_type = 9;</code>
     */
    private $disk_type = 0;
    /**
     * A map of labels to associate with the VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     */
    private $labels;
    /**
     * The license type to use in OS adaptation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineLicenseType license_type = 11;</code>
     */
    private $license_type = 0;
    /**
     * The OS license returned from the adaptation module report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AppliedLicense applied_license = 12;</code>
     */
    private $applied_license = null;
    /**
     * Compute instance scheduling information (if empty default is used).
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeScheduling compute_scheduling = 13;</code>
     */
    private $compute_scheduling = null;
    /**
     * Defines whether the instance has Secure Boot enabled.
     * This can be set to true only if the vm boot option is EFI.
     *
     * Generated from protobuf field <code>bool secure_boot = 14;</code>
     */
    private $secure_boot = false;
    /**
     * The VM Boot Option, as set in the source vm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineBootOption boot_option = 15;</code>
     */
    private $boot_option = 0;
    /**
     * The metadata key/value pairs to assign to the VM.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 16;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vm_name
     *           The name of the VM to create.
     *     @type string $project
     *           The GCP target project ID or project name.
     *     @type string $zone
     *           The zone in which to create the VM.
     *     @type string $machine_type_series
     *           The machine type series to create the VM with.
     *     @type string $machine_type
     *           The machine type to create the VM with.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $network_tags
     *           A map of network tags to associate with the VM.
     *     @type \Google\Cloud\VMMigration\V1\NetworkInterface[]|\Google\Protobuf\Internal\RepeatedField $network_interfaces
     *           List of NICs connected to this VM.
     *     @type string $service_account
     *           The service account to associate the VM with.
     *     @type int $disk_type
     *           The disk type to use in the VM.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A map of labels to associate with the VM.
     *     @type int $license_type
     *           The license type to use in OS adaptation.
     *     @type \Google\Cloud\VMMigration\V1\AppliedLicense $applied_license
     *           The OS license returned from the adaptation module report.
     *     @type \Google\Cloud\VMMigration\V1\ComputeScheduling $compute_scheduling
     *           Compute instance scheduling information (if empty default is used).
     *     @type bool $secure_boot
     *           Defines whether the instance has Secure Boot enabled.
     *           This can be set to true only if the vm boot option is EFI.
     *     @type int $boot_option
     *           The VM Boot Option, as set in the source vm.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           The metadata key/value pairs to assign to the VM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the VM to create.
     *
     * Generated from protobuf field <code>string vm_name = 1;</code>
     * @return string
     */
    public function getVmName()
    {
        return $this->vm_name;
    }

    /**
     * The name of the VM to create.
     *
     * Generated from protobuf field <code>string vm_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVmName($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_name = $var;

        return $this;
    }

    /**
     * The GCP target project ID or project name.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * The GCP target project ID or project name.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The zone in which to create the VM.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The zone in which to create the VM.
     *
     * Generated from protobuf field <code>string zone = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * The machine type series to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type_series = 4;</code>
     * @return string
     */
    public function getMachineTypeSeries()
    {
        return $this->machine_type_series;
    }

    /**
     * The machine type series to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type_series = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineTypeSeries($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type_series = $var;

        return $this;
    }

    /**
     * The machine type to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @return string
     */
    public function getMachineType()
    {
        return $this->machine_type;
    }

    /**
     * The machine type to create the VM with.
     *
     * Generated from protobuf field <code>string machine_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineType($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_type = $var;

        return $this;
    }

    /**
     * A map of network tags to associate with the VM.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkTags()
    {
        return $this->network_tags;
    }

    /**
     * A map of network tags to associate with the VM.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_tags = $arr;

        return $this;
    }

    /**
     * List of NICs connected to this VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.NetworkInterface network_interfaces = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkInterfaces()
    {
        return $this->network_interfaces;
    }

    /**
     * List of NICs connected to this VM.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.NetworkInterface network_interfaces = 7;</code>
     * @param \Google\Cloud\VMMigration\V1\NetworkInterface[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkInterfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\NetworkInterface::class);
        $this->network_interfaces = $arr;

        return $this;
    }

    /**
     * The service account to associate the VM with.
     *
     * Generated from protobuf field <code>string service_account = 8;</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * The service account to associate the VM with.
     *
     * Generated from protobuf field <code>string service_account = 8;</code>
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
     * The disk type to use in the VM.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineDiskType disk_type = 9;</code>
     * @return int
     */
    public function getDiskType()
    {
        return $this->disk_type;
    }

    /**
     * The disk type to use in the VM.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineDiskType disk_type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDiskType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\ComputeEngineDiskType::class);
        $this->disk_type = $var;

        return $this;
    }

    /**
     * A map of labels to associate with the VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A map of labels to associate with the VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The license type to use in OS adaptation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineLicenseType license_type = 11;</code>
     * @return int
     */
    public function getLicenseType()
    {
        return $this->license_type;
    }

    /**
     * The license type to use in OS adaptation.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineLicenseType license_type = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLicenseType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\ComputeEngineLicenseType::class);
        $this->license_type = $var;

        return $this;
    }

    /**
     * The OS license returned from the adaptation module report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AppliedLicense applied_license = 12;</code>
     * @return \Google\Cloud\VMMigration\V1\AppliedLicense|null
     */
    public function getAppliedLicense()
    {
        return $this->applied_license;
    }

    public function hasAppliedLicense()
    {
        return isset($this->applied_license);
    }

    public function clearAppliedLicense()
    {
        unset($this->applied_license);
    }

    /**
     * The OS license returned from the adaptation module report.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AppliedLicense applied_license = 12;</code>
     * @param \Google\Cloud\VMMigration\V1\AppliedLicense $var
     * @return $this
     */
    public function setAppliedLicense($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\AppliedLicense::class);
        $this->applied_license = $var;

        return $this;
    }

    /**
     * Compute instance scheduling information (if empty default is used).
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeScheduling compute_scheduling = 13;</code>
     * @return \Google\Cloud\VMMigration\V1\ComputeScheduling|null
     */
    public function getComputeScheduling()
    {
        return $this->compute_scheduling;
    }

    public function hasComputeScheduling()
    {
        return isset($this->compute_scheduling);
    }

    public function clearComputeScheduling()
    {
        unset($this->compute_scheduling);
    }

    /**
     * Compute instance scheduling information (if empty default is used).
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeScheduling compute_scheduling = 13;</code>
     * @param \Google\Cloud\VMMigration\V1\ComputeScheduling $var
     * @return $this
     */
    public function setComputeScheduling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ComputeScheduling::class);
        $this->compute_scheduling = $var;

        return $this;
    }

    /**
     * Defines whether the instance has Secure Boot enabled.
     * This can be set to true only if the vm boot option is EFI.
     *
     * Generated from protobuf field <code>bool secure_boot = 14;</code>
     * @return bool
     */
    public function getSecureBoot()
    {
        return $this->secure_boot;
    }

    /**
     * Defines whether the instance has Secure Boot enabled.
     * This can be set to true only if the vm boot option is EFI.
     *
     * Generated from protobuf field <code>bool secure_boot = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setSecureBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->secure_boot = $var;

        return $this;
    }

    /**
     * The VM Boot Option, as set in the source vm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineBootOption boot_option = 15;</code>
     * @return int
     */
    public function getBootOption()
    {
        return $this->boot_option;
    }

    /**
     * The VM Boot Option, as set in the source vm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineBootOption boot_option = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setBootOption($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\ComputeEngineBootOption::class);
        $this->boot_option = $var;

        return $this;
    }

    /**
     * The metadata key/value pairs to assign to the VM.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 16;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * The metadata key/value pairs to assign to the VM.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 16;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

