<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_output_program_proto</code>
 */
class sl_output_program_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     */
    protected $guid = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>uint32 pid_pcr = 4;</code>
     */
    protected $pid_pcr = 0;
    /**
     * Generated from protobuf field <code>uint32 program_id = 5;</code>
     */
    protected $program_id = 0;
    /**
     * Generated from protobuf field <code>string provider_name = 6;</code>
     */
    protected $provider_name = '';
    /**
     * Generated from protobuf field <code>.sl_device_proto device = 7;</code>
     */
    protected $device = null;
    /**
     * Generated from protobuf field <code>repeated .sl_stream_proto streams = 8;</code>
     */
    private $streams;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $guid
     *     @type string $name
     *     @type int $number
     *     @type int $pid_pcr
     *     @type int $program_id
     *     @type string $provider_name
     *     @type \sl_device_proto $device
     *     @type \sl_stream_proto[]|\Google\Protobuf\Internal\RepeatedField $streams
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Generated from protobuf field <code>string guid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->guid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pid_pcr = 4;</code>
     * @return int
     */
    public function getPidPcr()
    {
        return $this->pid_pcr;
    }

    /**
     * Generated from protobuf field <code>uint32 pid_pcr = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPidPcr($var)
    {
        GPBUtil::checkUint32($var);
        $this->pid_pcr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 program_id = 5;</code>
     * @return int
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * Generated from protobuf field <code>uint32 program_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setProgramId($var)
    {
        GPBUtil::checkUint32($var);
        $this->program_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string provider_name = 6;</code>
     * @return string
     */
    public function getProviderName()
    {
        return $this->provider_name;
    }

    /**
     * Generated from protobuf field <code>string provider_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProviderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_device_proto device = 7;</code>
     * @return \sl_device_proto
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Generated from protobuf field <code>.sl_device_proto device = 7;</code>
     * @param \sl_device_proto $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \sl_device_proto::class);
        $this->device = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_stream_proto streams = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_stream_proto streams = 8;</code>
     * @param \sl_stream_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_stream_proto::class);
        $this->streams = $arr;

        return $this;
    }

}

