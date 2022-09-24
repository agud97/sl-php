<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_mpeg_ts.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * descriptor_tag = 0x56 (86)
 *
 * Generated from protobuf message <code>sl_teletext_descriptor_page_proto</code>
 */
class sl_teletext_descriptor_page_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string iso_639_language_code = 1;</code>
     */
    protected $iso_639_language_code = '';
    /**
     * Generated from protobuf field <code>uint32 teletext_type = 2;</code>
     */
    protected $teletext_type = 0;
    /**
     * Generated from protobuf field <code>uint32 teletext_magazine_number = 3;</code>
     */
    protected $teletext_magazine_number = 0;
    /**
     * Generated from protobuf field <code>uint32 teletext_page_number = 4;</code>
     */
    protected $teletext_page_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iso_639_language_code
     *     @type int $teletext_type
     *     @type int $teletext_magazine_number
     *     @type int $teletext_page_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlMpegTs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string iso_639_language_code = 1;</code>
     * @return string
     */
    public function getIso639LanguageCode()
    {
        return $this->iso_639_language_code;
    }

    /**
     * Generated from protobuf field <code>string iso_639_language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIso639LanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iso_639_language_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_type = 2;</code>
     * @return int
     */
    public function getTeletextType()
    {
        return $this->teletext_type;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTeletextType($var)
    {
        GPBUtil::checkUint32($var);
        $this->teletext_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_magazine_number = 3;</code>
     * @return int
     */
    public function getTeletextMagazineNumber()
    {
        return $this->teletext_magazine_number;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_magazine_number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTeletextMagazineNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->teletext_magazine_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_page_number = 4;</code>
     * @return int
     */
    public function getTeletextPageNumber()
    {
        return $this->teletext_page_number;
    }

    /**
     * Generated from protobuf field <code>uint32 teletext_page_number = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTeletextPageNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->teletext_page_number = $var;

        return $this;
    }

}

