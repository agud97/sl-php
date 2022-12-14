<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

/**
 * Protobuf type <code>sl_table_state_proto</code>
 */
class sl_table_state_proto
{
    /**
     * Generated from protobuf enum <code>e_none = 0;</code>
     */
    const e_none = 0;
    /**
     * Generated from protobuf enum <code>e_generate = 1;</code>
     */
    const e_generate = 1;
    /**
     * Generated from protobuf enum <code>e_passthru = 2;</code>
     */
    const e_passthru = 2;

    private static $valueToName = [
        self::e_none => 'e_none',
        self::e_generate => 'e_generate',
        self::e_passthru => 'e_passthru',
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

