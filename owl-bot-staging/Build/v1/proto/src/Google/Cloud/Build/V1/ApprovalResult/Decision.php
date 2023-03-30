<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1\ApprovalResult;

use UnexpectedValueException;

/**
 * Specifies whether or not this manual approval result is to approve
 * or reject a build.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.ApprovalResult.Decision</code>
 */
class Decision
{
    /**
     * Default enum type. This should not be used.
     *
     * Generated from protobuf enum <code>DECISION_UNSPECIFIED = 0;</code>
     */
    const DECISION_UNSPECIFIED = 0;
    /**
     * Build is approved.
     *
     * Generated from protobuf enum <code>APPROVED = 1;</code>
     */
    const APPROVED = 1;
    /**
     * Build is rejected.
     *
     * Generated from protobuf enum <code>REJECTED = 2;</code>
     */
    const REJECTED = 2;

    private static $valueToName = [
        self::DECISION_UNSPECIFIED => 'DECISION_UNSPECIFIED',
        self::APPROVED => 'APPROVED',
        self::REJECTED => 'REJECTED',
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
class_alias(Decision::class, \Google\Cloud\Build\V1\ApprovalResult_Decision::class);

