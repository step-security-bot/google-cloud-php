<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/job.proto

namespace Google\Cloud\Batch\V1\AllocationPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A network interface.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.AllocationPolicy.NetworkInterface</code>
 */
class NetworkInterface extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL of an existing network resource.
     * You can specify the network as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/global/networks/{network}
     * projects/{project}/global/networks/{network}
     * global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 1;</code>
     */
    private $network = '';
    /**
     * The URL of an existing subnetwork resource in the network.
     * You can specify the subnetwork as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * regions/{region}/subnetworks/{subnetwork}
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     */
    private $subnetwork = '';
    /**
     * Default is false (with an external IP address). Required if
     * no external public IP address is attached to the VM. If no external
     * public IP address, additional configuration is required to allow the VM
     * to access Google Services. See
     * https://cloud.google.com/vpc/docs/configure-private-google-access and
     * https://cloud.google.com/nat/docs/gce-example#create-nat for more
     * information.
     *
     * Generated from protobuf field <code>bool no_external_ip_address = 3;</code>
     */
    private $no_external_ip_address = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network
     *           The URL of an existing network resource.
     *           You can specify the network as a full or partial URL.
     *           For example, the following are all valid URLs:
     *           https://www.googleapis.com/compute/v1/projects/{project}/global/networks/{network}
     *           projects/{project}/global/networks/{network}
     *           global/networks/{network}
     *     @type string $subnetwork
     *           The URL of an existing subnetwork resource in the network.
     *           You can specify the subnetwork as a full or partial URL.
     *           For example, the following are all valid URLs:
     *           https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetwork}
     *           projects/{project}/regions/{region}/subnetworks/{subnetwork}
     *           regions/{region}/subnetworks/{subnetwork}
     *     @type bool $no_external_ip_address
     *           Default is false (with an external IP address). Required if
     *           no external public IP address is attached to the VM. If no external
     *           public IP address, additional configuration is required to allow the VM
     *           to access Google Services. See
     *           https://cloud.google.com/vpc/docs/configure-private-google-access and
     *           https://cloud.google.com/nat/docs/gce-example#create-nat for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Job::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL of an existing network resource.
     * You can specify the network as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/global/networks/{network}
     * projects/{project}/global/networks/{network}
     * global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 1;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The URL of an existing network resource.
     * You can specify the network as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/global/networks/{network}
     * projects/{project}/global/networks/{network}
     * global/networks/{network}
     *
     * Generated from protobuf field <code>string network = 1;</code>
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
     * The URL of an existing subnetwork resource in the network.
     * You can specify the subnetwork as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * regions/{region}/subnetworks/{subnetwork}
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * The URL of an existing subnetwork resource in the network.
     * You can specify the subnetwork as a full or partial URL.
     * For example, the following are all valid URLs:
     * https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * projects/{project}/regions/{region}/subnetworks/{subnetwork}
     * regions/{region}/subnetworks/{subnetwork}
     *
     * Generated from protobuf field <code>string subnetwork = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Default is false (with an external IP address). Required if
     * no external public IP address is attached to the VM. If no external
     * public IP address, additional configuration is required to allow the VM
     * to access Google Services. See
     * https://cloud.google.com/vpc/docs/configure-private-google-access and
     * https://cloud.google.com/nat/docs/gce-example#create-nat for more
     * information.
     *
     * Generated from protobuf field <code>bool no_external_ip_address = 3;</code>
     * @return bool
     */
    public function getNoExternalIpAddress()
    {
        return $this->no_external_ip_address;
    }

    /**
     * Default is false (with an external IP address). Required if
     * no external public IP address is attached to the VM. If no external
     * public IP address, additional configuration is required to allow the VM
     * to access Google Services. See
     * https://cloud.google.com/vpc/docs/configure-private-google-access and
     * https://cloud.google.com/nat/docs/gce-example#create-nat for more
     * information.
     *
     * Generated from protobuf field <code>bool no_external_ip_address = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoExternalIpAddress($var)
    {
        GPBUtil::checkBool($var);
        $this->no_external_ip_address = $var;

        return $this;
    }

}


