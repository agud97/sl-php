<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_remuxer_model.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47;/////////////////////////////////////////////////////////////////////////////
 * PAT PMT
 *
 * Generated from protobuf message <code>sl_pmt_model_proto</code>
 */
class sl_pmt_model_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * src pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model src = 1;</code>
     */
    protected $src = null;
    /**
     * dst pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model dst = 2;</code>
     */
    protected $dst = null;
    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto reserve = 3;</code>
     */
    protected $reserve = 0;
    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto status = 4;</code>
     */
    protected $status = 0;
    /**
     * src pid, dst pid
     *
     * Generated from protobuf field <code>map<uint32, uint32> streams = 5;</code>
     */
    private $streams;
    /**
     * Generated from protobuf field <code>bool auto_to_reserve = 6;</code>
     */
    protected $auto_to_reserve = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_pair_model $src
     *           src pid, number
     *     @type \sl_pair_model $dst
     *           dst pid, number
     *     @type int $reserve
     *     @type int $status
     *     @type array|\Google\Protobuf\Internal\MapField $streams
     *           src pid, dst pid
     *     @type bool $auto_to_reserve
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlRemuxerModel::initOnce();
        parent::__construct($data);
    }

    /**
     * src pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model src = 1;</code>
     * @return \sl_pair_model
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * src pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model src = 1;</code>
     * @param \sl_pair_model $var
     * @return $this
     */
    public function setSrc($var)
    {
        GPBUtil::checkMessage($var, \sl_pair_model::class);
        $this->src = $var;

        return $this;
    }

    /**
     * dst pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model dst = 2;</code>
     * @return \sl_pair_model
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * dst pid, number
     *
     * Generated from protobuf field <code>.sl_pair_model dst = 2;</code>
     * @param \sl_pair_model $var
     * @return $this
     */
    public function setDst($var)
    {
        GPBUtil::checkMessage($var, \sl_pair_model::class);
        $this->dst = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto reserve = 3;</code>
     * @return int
     */
    public function getReserve()
    {
        return $this->reserve;
    }

    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto reserve = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReserve($var)
    {
        GPBUtil::checkEnum($var, \sl_reserve_state_proto::class);
        $this->reserve = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.sl_reserve_state_proto status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \sl_reserve_state_proto::class);
        $this->status = $var;

        return $this;
    }

    /**
     * src pid, dst pid
     *
     * Generated from protobuf field <code>map<uint32, uint32> streams = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getStreams()
    {
        return $this->streams;
    }

    /**
     * src pid, dst pid
     *
     * Generated from protobuf field <code>map<uint32, uint32> streams = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setStreams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->streams = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool auto_to_reserve = 6;</code>
     * @return bool
     */
    public function getAutoToReserve()
    {
        return $this->auto_to_reserve;
    }

    /**
     * Generated from protobuf field <code>bool auto_to_reserve = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoToReserve($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_to_reserve = $var;

        return $this;
    }

}

