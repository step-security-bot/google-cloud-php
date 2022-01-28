<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1alpha2/domains.proto

namespace Google\Cloud\Domains\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `RetrieveTransferParameters` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1alpha2.RetrieveTransferParametersResponse</code>
 */
class RetrieveTransferParametersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Parameters to use when calling the `TransferDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.TransferParameters transfer_parameters = 1;</code>
     */
    private $transfer_parameters = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Domains\V1alpha2\TransferParameters $transfer_parameters
     *           Parameters to use when calling the `TransferDomain` method.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Alpha2\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Parameters to use when calling the `TransferDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.TransferParameters transfer_parameters = 1;</code>
     * @return \Google\Cloud\Domains\V1alpha2\TransferParameters|null
     */
    public function getTransferParameters()
    {
        return $this->transfer_parameters;
    }

    public function hasTransferParameters()
    {
        return isset($this->transfer_parameters);
    }

    public function clearTransferParameters()
    {
        unset($this->transfer_parameters);
    }

    /**
     * Parameters to use when calling the `TransferDomain` method.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1alpha2.TransferParameters transfer_parameters = 1;</code>
     * @param \Google\Cloud\Domains\V1alpha2\TransferParameters $var
     * @return $this
     */
    public function setTransferParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Domains\V1alpha2\TransferParameters::class);
        $this->transfer_parameters = $var;

        return $this;
    }

}

