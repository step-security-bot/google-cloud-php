<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/service.proto

namespace Google\Cloud\AlloyDb\V1beta\BatchCreateInstanceStatus;

use UnexpectedValueException;

/**
 * State contains all valid instance states for the BatchCreateInstances
 * operation. This is mainly used for status reporting through the LRO
 * metadata.
 *
 * Protobuf type <code>google.cloud.alloydb.v1beta.BatchCreateInstanceStatus.State</code>
 */
class State
{
    /**
     * The state of the instance is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Instance is pending creation and has not yet been picked up for
     * processsing in the backend.
     *
     * Generated from protobuf enum <code>PENDING_CREATE = 1;</code>
     */
    const PENDING_CREATE = 1;
    /**
     * The instance is active and running.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * The instance is being created.
     *
     * Generated from protobuf enum <code>CREATING = 3;</code>
     */
    const CREATING = 3;
    /**
     * The instance is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * The creation of the instance failed or a fatal error occurred during
     * an operation on the instance or a batch of instances.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * The instance was created successfully, but was rolled back and deleted
     * due to some other failure during BatchCreateInstances operation.
     *
     * Generated from protobuf enum <code>ROLLED_BACK = 6;</code>
     */
    const ROLLED_BACK = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING_CREATE => 'PENDING_CREATE',
        self::READY => 'READY',
        self::CREATING => 'CREATING',
        self::DELETING => 'DELETING',
        self::FAILED => 'FAILED',
        self::ROLLED_BACK => 'ROLLED_BACK',
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


