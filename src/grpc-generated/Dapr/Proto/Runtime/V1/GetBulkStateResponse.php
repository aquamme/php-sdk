<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Proto\Runtime\V1;

/**
 * GetBulkStateResponse is the response conveying the list of state values.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetBulkStateResponse</code>
 */
class GetBulkStateResponse extends \Google\Protobuf\Internal\Message
{
	/**
	 * The list of items containing the keys to get values for.
	 *
	 * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.BulkStateItem items = 1;</code>
	 */
	private $items;


	/**
	 * Constructor.
	 *
	 * @param array $data {
	 *     Optional. Data for populating the Message object.
	 *
	 *     @type \Dapr\Proto\Runtime\V1\BulkStateItem[]|\Google\Protobuf\Internal\RepeatedField $items
	 *           The list of items containing the keys to get values for.
	 * }
	 */
	public function __construct(array|null $data = null)
	{
		\GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
		parent::__construct($data);
	}


	/**
	 * The list of items containing the keys to get values for.
	 *
	 * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.BulkStateItem items = 1;</code>
	 * @return \Google\Protobuf\Internal\RepeatedField
	 */
	public function getItems(): \Google\Protobuf\Internal\RepeatedField
	{
		return $this->items;
	}


	/**
	 * The list of items containing the keys to get values for.
	 *
	 * Generated from protobuf field <code>repeated .dapr.proto.runtime.v1.BulkStateItem items = 1;</code>
	 * @param \Dapr\Proto\Runtime\V1\BulkStateItem[]|\Google\Protobuf\Internal\RepeatedField $var
	 * @return $this
	 */
	public function setItems(array|\Google\Protobuf\Internal\RepeatedField $var): GetBulkStateResponse
	{
		$arr = \Google\Protobuf\Internal\GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dapr\Proto\Runtime\V1\BulkStateItem::class);
		$this->items = $arr;

		return $this;
	}
}
