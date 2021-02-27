<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Proto\Runtime\V1;

/**
 * TransactionalStateOperation is the message to execute a specified operation with a key-value pair.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.TransactionalStateOperation</code>
 */
class TransactionalStateOperation extends \Google\Protobuf\Internal\Message
{
	/**
	 * The type of operation to be executed
	 *
	 * Generated from protobuf field <code>string operationType = 1;</code>
	 */
	protected $operationType = '';

	/**
	 * State values to be operated on
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateItem request = 2;</code>
	 */
	protected $request;


	/**
	 * Constructor.
	 *
	 * @param array $data {
	 *     Optional. Data for populating the Message object.
	 *
	 *     @type string $operationType
	 *           The type of operation to be executed
	 *     @type \Dapr\Proto\Common\V1\StateItem $request
	 *           State values to be operated on
	 * }
	 */
	public function __construct(array|null $data = null)
	{
		\GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
		parent::__construct($data);
	}


	/**
	 * The type of operation to be executed
	 *
	 * Generated from protobuf field <code>string operationType = 1;</code>
	 * @return string
	 */
	public function getOperationType(): string
	{
		return $this->operationType;
	}


	/**
	 * The type of operation to be executed
	 *
	 * Generated from protobuf field <code>string operationType = 1;</code>
	 * @param string $var
	 * @return $this
	 */
	public function setOperationType(string $var): TransactionalStateOperation
	{
		\Google\Protobuf\Internal\GPBUtil::checkString($var, True);
		$this->operationType = $var;

		return $this;
	}


	/**
	 * State values to be operated on
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateItem request = 2;</code>
	 * @return \Dapr\Proto\Common\V1\StateItem|null
	 */
	public function getRequest(): \Dapr\Proto\Common\V1\StateItem|null
	{
		return isset($this->request) ? $this->request : null;
	}


	public function hasRequest(): bool
	{
		return isset($this->request);
	}


	public function clearRequest(): void
	{
		unset($this->request);
	}


	/**
	 * State values to be operated on
	 *
	 * Generated from protobuf field <code>.dapr.proto.common.v1.StateItem request = 2;</code>
	 * @param \Dapr\Proto\Common\V1\StateItem $var
	 * @return $this
	 */
	public function setRequest(\Dapr\Proto\Common\V1\StateItem $var): TransactionalStateOperation
	{
		\Google\Protobuf\Internal\GPBUtil::checkMessage($var, \Dapr\Proto\Common\V1\StateItem::class);
		$this->request = $var;

		return $this;
	}
}
