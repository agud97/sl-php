<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_device_proto</code>
 */
class sl_device_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>.sl_device_proto.sl_device_type_proto type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated .sl_ll_device_info_proto ll_device_info = 3;</code>
     */
    private $ll_device_info;
    /**
     * Generated from protobuf field <code>string settings = 4;</code>
     */
    protected $settings = '';
    /**
     * Generated from protobuf field <code>.sl_configurator_info_proto configurator_info = 5;</code>
     */
    protected $configurator_info = null;
    /**
     * Generated from protobuf field <code>string guid = 6;</code>
     */
    protected $guid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *     @type int $type
     *     @type \sl_ll_device_info_proto[]|\Google\Protobuf\Internal\RepeatedField $ll_device_info
     *     @type string $settings
     *     @type \sl_configurator_info_proto $configurator_info
     *     @type string $guid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_device_proto.sl_device_type_proto type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.sl_device_proto.sl_device_type_proto type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \sl_device_proto_sl_device_type_proto::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_ll_device_info_proto ll_device_info = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLlDeviceInfo()
    {
        return $this->ll_device_info;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_ll_device_info_proto ll_device_info = 3;</code>
     * @param \sl_ll_device_info_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLlDeviceInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_ll_device_info_proto::class);
        $this->ll_device_info = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string settings = 4;</code>
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>string settings = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkString($var, True);
        $this->settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_configurator_info_proto configurator_info = 5;</code>
     * @return \sl_configurator_info_proto
     */
    public function getConfiguratorInfo()
    {
        return $this->configurator_info;
    }

    /**
     * Generated from protobuf field <code>.sl_configurator_info_proto configurator_info = 5;</code>
     * @param \sl_configurator_info_proto $var
     * @return $this
     */
    public function setConfiguratorInfo($var)
    {
        GPBUtil::checkMessage($var, \sl_configurator_info_proto::class);
        $this->configurator_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string guid = 6;</code>
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Generated from protobuf field <code>string guid = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setGuid($var)
    {
        GPBUtil::checkString($var, True);
        $this->guid = $var;

        return $this;
    }

}

