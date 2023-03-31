<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1\AttributePropagationSettings;

use UnexpectedValueException;

/**
 * Supported output credentials for attribute propagation. Each output
 * credential maps to a "field" in the response. For example, selecting JWT
 * will propagate all attributes in the IAP JWT, header in the headers, etc.
 *
 * Protobuf type <code>google.cloud.iap.v1.AttributePropagationSettings.OutputCredentials</code>
 */
class OutputCredentials
{
    /**
     * An output credential is required.
     *
     * Generated from protobuf enum <code>OUTPUT_CREDENTIALS_UNSPECIFIED = 0;</code>
     */
    const OUTPUT_CREDENTIALS_UNSPECIFIED = 0;
    /**
     * Propagate attributes in the headers with "x-goog-iap-attr-" prefix.
     *
     * Generated from protobuf enum <code>HEADER = 1;</code>
     */
    const HEADER = 1;
    /**
     * Propagate attributes in the JWT of the form: `"additional_claims": {
     * "my_attribute": ["value1", "value2"] }`
     *
     * Generated from protobuf enum <code>JWT = 2;</code>
     */
    const JWT = 2;
    /**
     * Propagate attributes in the RCToken of the form: `"additional_claims": {
     * "my_attribute": ["value1", "value2"] }`
     *
     * Generated from protobuf enum <code>RCTOKEN = 3;</code>
     */
    const RCTOKEN = 3;

    private static $valueToName = [
        self::OUTPUT_CREDENTIALS_UNSPECIFIED => 'OUTPUT_CREDENTIALS_UNSPECIFIED',
        self::HEADER => 'HEADER',
        self::JWT => 'JWT',
        self::RCTOKEN => 'RCTOKEN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputCredentials::class, \Google\Cloud\Iap\V1\AttributePropagationSettings_OutputCredentials::class);

