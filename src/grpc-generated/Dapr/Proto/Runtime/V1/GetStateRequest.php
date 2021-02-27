<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Proto\Runtime\V1;

/**
 * GetStateRequest is the message to get key-value states from specific state store.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetStateRequest</code>
 */
class GetStateRequest extends \Google\Protobuf\Internal\Message
{
	/**
	 * The name of state store.
	 *
	 * Generated from protobuf field <code>string store_name = 1;</code>
	 */
	protected $store_name = '';

	/**
	 * The key of the desired state
	 *
	 * Generated from protobuf field <code>string key = 2;</code>
	 */
	protected $key = '';

	/**
	 * The read consistency of the state store.
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateOptions.StateConsistency consistency = 3;</code>
	 */
	protected $consistency = 0;

	/**
	 * The metadata which will be sent to state store components.
	 *
	 * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
	 */
	private $metadata;


	/**
	 * Constructor.
	 *
	 * @param array $data {
	 *     Optional. Data for populating the Message object.
	 *
	 *     @type string $store_name
	 *           The name of state store.
	 *     @type string $key
	 *           The key of the desired state
	 *     @type int $consistency
	 *           The read consistency of the state store.
	 *     @type array|\Google\Protobuf\Internal\MapField $metadata
	 *           The metadata which will be sent to state store components.
	 * }
	 */
	public function __construct(array|null $data = null)
	{
		\GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
		parent::__construct($data);
	}


	/**
	 * The name of state store.
	 *
	 * Generated from protobuf field <code>string store_name = 1;</code>
	 * @return string
	 */
	public function getStoreName(): string
	{
		return $this->store_name;
	}


	/**
	 * The name of state store.
	 *
	 * Generated from protobuf field <code>string store_name = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setStoreName(string $var): GetStateRequest
	{
		\Google\Protobuf\Internal\GPBUtil::checkString($var, True);
		$this->store_name = $var;

		return $this;
	}


	/**
	 * The key of the desired state
	 *
	 * Generated from protobuf field <code>string key = 2;</code>
	 * @return string
	 */
	public function getKey(): string
	{
		return $this->key;
	}


	/**
	 * The key of the desired state
	 *
	 * Generated from protobuf field <code>string key = 2;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setKey(string $var): GetStateRequest
	{
		\Google\Protobuf\Internal\GPBUtil::checkString($var, True);
		$this->key = $var;

		return $this;
	}


	/**
	 * The read consistency of the state store.
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateOptions.StateConsistency consistency = 3;</code>
	 * @return int
	 */
	public function getConsistency(): int
	{
		return $this->consistency;
	}


	/**
	 * The read consistency of the state store.
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateOptions.StateConsistency consistency = 3;</code>
	 * @param int $var
	 * @return $this
	 */
	public function setConsistency(int $var): GetStateRequest
	{
		\Google\Protobuf\Internal\GPBUtil::checkEnum($var, \Dapr\Proto\Common\V1\StateOptions\StateConsistency::class);
		$this->consistency = $var;

		return $this;
	}


	/**
	 * The metadata which will be sent to state store components.
	 *
	 * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
	 * @return \Google\Protobuf\Internal\MapField
	 */
	public function getMetadata(): \Google\Protobuf\Internal\MapField
	{
		return $this->metadata;
	}


	/**
	 * The metadata which will be sent to state store components.
	 *
	 * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
	 * @param array|\Google\Protobuf\Internal\MapField $var
	 * @return $this
	 */
	public function setMetadata(array|\Google\Protobuf\Internal\MapField $var): GetStateRequest
	{
		$arr = \Google\Protobuf\Internal\GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
		$this->metadata = $arr;

		return $this;
	}
}
