<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1/resources.proto

namespace Google\Cloud\AlloyDb\V1\SslConfig;

use UnexpectedValueException;

/**
 * SSL mode options.
 *
 * Protobuf type <code>google.cloud.alloydb.v1.SslConfig.SslMode</code>
 */
class SslMode
{
    /**
     * SSL mode not specified. Defaults to SSL_MODE_ALLOW.
     *
     * Generated from protobuf enum <code>SSL_MODE_UNSPECIFIED = 0;</code>
     */
    const SSL_MODE_UNSPECIFIED = 0;
    /**
     * SSL connections are optional. CA verification not enforced.
     *
     * Generated from protobuf enum <code>SSL_MODE_ALLOW = 1;</code>
     */
    const SSL_MODE_ALLOW = 1;
    /**
     * SSL connections are required. CA verification not enforced.
     * Clients may use locally self-signed certificates (default psql client
     * behavior).
     *
     * Generated from protobuf enum <code>SSL_MODE_REQUIRE = 2;</code>
     */
    const SSL_MODE_REQUIRE = 2;
    /**
     * SSL connections are required. CA verification enforced.
     * Clients must have certificates signed by a Cluster CA, e.g. via
     * GenerateClientCertificate.
     *
     * Generated from protobuf enum <code>SSL_MODE_VERIFY_CA = 3;</code>
     */
    const SSL_MODE_VERIFY_CA = 3;

    private static $valueToName = [
        self::SSL_MODE_UNSPECIFIED => 'SSL_MODE_UNSPECIFIED',
        self::SSL_MODE_ALLOW => 'SSL_MODE_ALLOW',
        self::SSL_MODE_REQUIRE => 'SSL_MODE_REQUIRE',
        self::SSL_MODE_VERIFY_CA => 'SSL_MODE_VERIFY_CA',
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
class_alias(SslMode::class, \Google\Cloud\AlloyDb\V1\SslConfig_SslMode::class);

