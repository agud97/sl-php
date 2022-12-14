<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_teletext_descriptor_proto</code>
 */
class sl_teletext_descriptor_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     */
    protected $descriptor_tag = 0;
    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     */
    protected $descriptor_length = 0;
    /**
     * Generated from protobuf field <code>repeated .sl_teletext_descriptor_page_proto pages = 3;</code>
     */
    private $pages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $descriptor_tag
     *     @type int $descriptor_length
     *     @type \sl_teletext_descriptor_page_proto[]|\Google\Protobuf\Internal\RepeatedField $pages
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     * @return int
     */
    public function getDescriptorTag()
    {
        return $this->descriptor_tag;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_tag = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriptorTag($var)
    {
        GPBUtil::checkUint32($var);
        $this->descriptor_tag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     * @return int
     */
    public function getDescriptorLength()
    {
        return $this->descriptor_length;
    }

    /**
     * Generated from protobuf field <code>uint32 descriptor_length = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDescriptorLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->descriptor_length = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_teletext_descriptor_page_proto pages = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Generated from protobuf field <code>repeated .sl_teletext_descriptor_page_proto pages = 3;</code>
     * @param \sl_teletext_descriptor_page_proto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \sl_teletext_descriptor_page_proto::class);
        $this->pages = $arr;

        return $this;
    }

}

