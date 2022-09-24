<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_program_map_proto</code>
 */
class sl_program_map_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 program_number = 1;</code>
     */
    protected $program_number = 0;
    /**
     * Generated from protobuf field <code>uint32 map_PID = 2;</code>
     */
    protected $map_PID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $program_number
     *     @type int $map_PID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 program_number = 1;</code>
     * @return int
     */
    public function getProgramNumber()
    {
        return $this->program_number;
    }

    /**
     * Generated from protobuf field <code>uint32 program_number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProgramNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->program_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 map_PID = 2;</code>
     * @return int
     */
    public function getMapPID()
    {
        return $this->map_PID;
    }

    /**
     * Generated from protobuf field <code>uint32 map_PID = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMapPID($var)
    {
        GPBUtil::checkUint32($var);
        $this->map_PID = $var;

        return $this;
    }

}
