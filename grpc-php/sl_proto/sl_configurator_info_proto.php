<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_configurator_info_proto</code>
 */
class sl_configurator_info_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string dll_name = 1;</code>
     */
    protected $dll_name = '';
    /**
     * Generated from protobuf field <code>string class_name = 2;</code>
     */
    protected $class_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dll_name
     *     @type string $class_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string dll_name = 1;</code>
     * @return string
     */
    public function getDllName()
    {
        return $this->dll_name;
    }

    /**
     * Generated from protobuf field <code>string dll_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDllName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dll_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string class_name = 2;</code>
     * @return string
     */
    public function getClassName()
    {
        return $this->class_name;
    }

    /**
     * Generated from protobuf field <code>string class_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClassName($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_name = $var;

        return $this;
    }

}

