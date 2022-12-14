<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * EIT
 *
 * Generated from protobuf message <code>sl_eit_service_model_proto</code>
 */
class sl_eit_service_model_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * src service_id, dst service_id
     *
     * Generated from protobuf field <code>map<uint32, uint32> services = 1;</code>
     */
    private $services;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $services
     *           src service_id, dst service_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlRemuxerModel::initOnce();
        parent::__construct($data);
    }

    /**
     * src service_id, dst service_id
     *
     * Generated from protobuf field <code>map<uint32, uint32> services = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * src service_id, dst service_id
     *
     * Generated from protobuf field <code>map<uint32, uint32> services = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setServices($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->services = $arr;

        return $this;
    }

}

