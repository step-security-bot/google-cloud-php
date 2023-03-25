<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1alpha/resources.proto

namespace Google\Cloud\AlloyDb\V1alpha\SslConfig;

use UnexpectedValueException;

/**
 * Certificate Authority (CA) source for SSL/TLS certificates.
 *
 * Protobuf type <code>google.cloud.alloydb.v1alpha.SslConfig.CaSource</code>
 */
class CaSource
{
    /**
     * Certificate Authority (CA) source not specified. Defaults to
     * CA_SOURCE_MANAGED.
     *
     * Generated from protobuf enum <code>CA_SOURCE_UNSPECIFIED = 0;</code>
     */
    const CA_SOURCE_UNSPECIFIED = 0;
    /**
     * Certificate Authority (CA) managed by the AlloyDB Cluster.
     *
     * Generated from protobuf enum <code>CA_SOURCE_MANAGED = 1;</code>
     */
    const CA_SOURCE_MANAGED = 1;

    private static $valueToName = [
        self::CA_SOURCE_UNSPECIFIED => 'CA_SOURCE_UNSPECIFIED',
        self::CA_SOURCE_MANAGED => 'CA_SOURCE_MANAGED',
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
class_alias(CaSource::class, \Google\Cloud\AlloyDb\V1alpha\SslConfig_CaSource::class);

