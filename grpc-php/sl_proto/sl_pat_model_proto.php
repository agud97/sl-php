<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_pat_model_proto</code>
 */
class sl_pat_model_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>map<string, .sl_pmts_model_proto> inputs = 1;</code>
     */
    private $inputs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $inputs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlRemuxerModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>map<string, .sl_pmts_model_proto> inputs = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>map<string, .sl_pmts_model_proto> inputs = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_pmts_model_proto::class);
        $this->inputs = $arr;

        return $this;
    }

}

