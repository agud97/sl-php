<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_input_pat_proto</code>
 */
class sl_input_pat_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl_pat_proto pat = 1;</code>
     */
    protected $pat = null;
    /**
     * Generated from protobuf field <code>repeated .sl_pmt_proto pmt = 2;</code>
     */
    private $pmt;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_pat_proto $pat
     *     @type \sl_pmt_proto[]|\Google\Protobuf\Internal\RepeatedField $pmt
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl_pat_proto pat = 1;</code>
     * @return \sl_pat_proto
     */
    public function getPat()
    {
        return $this->pat;
    }

    /**
     * Generated from protobuf field <code>.sl_pat_proto pat = 1;</code>
     * @param \sl_pat_proto $var
     * @return $this
     */
    public function setPat($var)
    {
        GPBUtil::checkMessage($var, \sl_pat_proto::class);
        $this->pat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_pmt_proto pmt = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPmt()
    {
        return $this->pmt;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_pmt_proto pmt = 2;</code>
     * @param \sl_pmt_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPmt($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_pmt_proto::class);
        $this->pmt = $arr;

        return $this;
    }

}

