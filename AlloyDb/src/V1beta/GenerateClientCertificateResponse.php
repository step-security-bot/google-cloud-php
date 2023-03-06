<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/service.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message returned by a GenerateClientCertificate operation.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.GenerateClientCertificateResponse</code>
 */
class GenerateClientCertificateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $pem_certificate = '';
    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pem_certificate_chain;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pem_certificate
     *           Output only. The pem-encoded, signed X.509 certificate.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pem_certificate_chain
     *           Output only. The pem-encoded chain that may be used to verify the X.509
     *           certificate. Expected to be in issuer-to-root order according to RFC 5246.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPemCertificate()
    {
        return $this->pem_certificate;
    }

    /**
     * Output only. The pem-encoded, signed X.509 certificate.
     *
     * Generated from protobuf field <code>string pem_certificate = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_certificate = $var;

        return $this;
    }

    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPemCertificateChain()
    {
        return $this->pem_certificate_chain;
    }

    /**
     * Output only. The pem-encoded chain that may be used to verify the X.509
     * certificate. Expected to be in issuer-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificate_chain = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPemCertificateChain($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pem_certificate_chain = $arr;

        return $this;
    }

}

