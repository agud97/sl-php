<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

/**
 * Protobuf type <code>sl_graph_type_proto</code>
 */
class sl_graph_type_proto
{
    /**
     * Generated from protobuf enum <code>sl_encoder_decoder = 0;</code>
     */
    const sl_encoder_decoder = 0;
    /**
     * Generated from protobuf enum <code>sl_remuxer = 1;</code>
     */
    const sl_remuxer = 1;

    private static $valueToName = [
        self::sl_encoder_decoder => 'sl_encoder_decoder',
        self::sl_remuxer => 'sl_remuxer',
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

