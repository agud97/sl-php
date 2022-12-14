<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sl_graph_service.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sl_graph_affinity_mask_proto</code>
 */
class sl_graph_affinity_mask_proto extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sl_graph_proto graph = 1;</code>
     */
    protected $graph = null;
    /**
     * Generated from protobuf field <code>.sl_affinity_mask_proto affinity = 2;</code>
     */
    protected $affinity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \sl_graph_proto $graph
     *     @type \sl_affinity_mask_proto $affinity
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SlGraphService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sl_graph_proto graph = 1;</code>
     * @return \sl_graph_proto
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * Generated from protobuf field <code>.sl_graph_proto graph = 1;</code>
     * @param \sl_graph_proto $var
     * @return $this
     */
    public function setGraph($var)
    {
        GPBUtil::checkMessage($var, \sl_graph_proto::class);
        $this->graph = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sl_affinity_mask_proto affinity = 2;</code>
     * @return \sl_affinity_mask_proto
     */
    public function getAffinity()
    {
        return $this->affinity;
    }

    /**
     * Generated from protobuf field <code>.sl_affinity_mask_proto affinity = 2;</code>
     * @param \sl_affinity_mask_proto $var
     * @return $this
     */
    public function setAffinity($var)
    {
        GPBUtil::checkMessage($var, \sl_affinity_mask_proto::class);
        $this->affinity = $var;

        return $this;
    }

}

