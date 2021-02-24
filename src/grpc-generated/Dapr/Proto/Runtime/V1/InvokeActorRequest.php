<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: runtime/v1/dapr.proto

namespace Dapr\Proto\Runtime\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InvokeActorRequest is the message to call an actor.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.InvokeActorRequest</code>
 */
class InvokeActorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     */
    protected $actor_type = '';
    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     */
    protected $actor_id = '';
    /**
     * Generated from protobuf field <code>string method = 3;</code>
     */
    protected $method = '';
    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $actor_type
     *     @type string $actor_id
     *     @type string $method
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Runtime\V1\Dapr::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     * @return string
     */
    public function getActorType()
    {
        return $this->actor_type;
    }

    /**
     * Generated from protobuf field <code>string actor_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->actor_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     * @return string
     */
    public function getActorId()
    {
        return $this->actor_id;
    }

    /**
     * Generated from protobuf field <code>string actor_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setActorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->actor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string method = 3;</code>
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>string method = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

