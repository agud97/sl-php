<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_tot_proto</code>
 */
class sl_tot_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     */
    protected $UTC_time = 0;
    /**
     * Generated from protobuf field <code>repeated .sl_descriptor_proto descriptors = 2;</code>
     */
    private $descriptors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $UTC_time
     *     @type \sl_descriptor_proto[]|\Google\Protobuf\Internal\RepeatedField $descriptors
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     * @return int|string
     */
    public function getUTCTime()
    {
        return $this->UTC_time;
    }

    /**
     * Generated from protobuf field <code>uint64 UTC_time = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUTCTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->UTC_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_descriptor_proto descriptors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptors()
    {
        return $this->descriptors;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_descriptor_proto descriptors = 2;</code>
     * @param \sl_descriptor_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_descriptor_proto::class);
        $this->descriptors = $arr;

        return $this;
    }

}

