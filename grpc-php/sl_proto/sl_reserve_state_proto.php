<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

/**
 * Protobuf type <code>sl_reserve_state_proto</code>
 */
class sl_reserve_state_proto
{
    /**
     * Generated from protobuf enum <code>sl_normal = 0;</code>
     */
    const sl_normal = 0;
    /**
     * Generated from protobuf enum <code>sl_reserve = 1;</code>
     */
    const sl_reserve = 1;
    /**
     * Generated from protobuf enum <code>sl_gochs = 2;</code>
     */
    const sl_gochs = 2;

    private static $valueToName = [
        self::sl_normal => 'sl_normal',
        self::sl_reserve => 'sl_reserve',
        self::sl_gochs => 'sl_gochs',
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

