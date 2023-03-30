<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/instance.proto

namespace Google\Cloud\AppEngine\V1\Instance\Liveness;

use UnexpectedValueException;

/**
 * Liveness health check status for Flex instances.
 *
 * Protobuf type <code>google.appengine.v1.Instance.Liveness.LivenessState</code>
 */
class LivenessState
{
    /**
     * There is no liveness health check for the instance. Only applicable for
     * instances in App Engine standard environment.
     *
     * Generated from protobuf enum <code>LIVENESS_STATE_UNSPECIFIED = 0;</code>
     */
    const LIVENESS_STATE_UNSPECIFIED = 0;
    /**
     * The health checking system is aware of the instance but its health is
     * not known at the moment.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The instance is reachable i.e. a connection to the application health
     * checking endpoint can be established, and conforms to the requirements
     * defined by the health check.
     *
     * Generated from protobuf enum <code>HEALTHY = 2;</code>
     */
    const HEALTHY = 2;
    /**
     * The instance is reachable, but does not conform to the requirements
     * defined by the health check.
     *
     * Generated from protobuf enum <code>UNHEALTHY = 3;</code>
     */
    const UNHEALTHY = 3;
    /**
     * The instance is being drained. The existing connections to the instance
     * have time to complete, but the new ones are being refused.
     *
     * Generated from protobuf enum <code>DRAINING = 4;</code>
     */
    const DRAINING = 4;
    /**
     * The instance is unreachable i.e. a connection to the application health
     * checking endpoint cannot be established, or the server does not respond
     * within the specified timeout.
     *
     * Generated from protobuf enum <code>TIMEOUT = 5;</code>
     */
    const TIMEOUT = 5;

    private static $valueToName = [
        self::LIVENESS_STATE_UNSPECIFIED => 'LIVENESS_STATE_UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HEALTHY => 'HEALTHY',
        self::UNHEALTHY => 'UNHEALTHY',
        self::DRAINING => 'DRAINING',
        self::TIMEOUT => 'TIMEOUT',
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
class_alias(LivenessState::class, \Google\Cloud\AppEngine\V1\Instance_Liveness_LivenessState::class);

