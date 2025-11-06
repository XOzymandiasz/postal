<?php

use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;

return [
	'sender_link_IN_PP' => [
		'shipment_id' => 1,
		'address_id' => 1,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	'receiver_link_IN_PP' => [
		'shipment_id' => 1,
		'address_id' => 2,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	'sender_link_OUT_PP' => [
		'shipment_id' => 2,
		'address_id' => 3,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	'receiver_link_OUT_PP' => [
		'shipment_id' => 2,
		'address_id' => 4,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 3,
		'address_id' => 3,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 3,
		'address_id' => 4,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 4,
		'address_id' => 6,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 4,
		'address_id' => 7,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 5,
		'address_id' => 8,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 5,
		'address_id' => 9,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 6,
		'address_id' => 10,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 6,
		'address_id' => 1,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 7,
		'address_id' => 2,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 7,
		'address_id' => 3,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 8,
		'address_id' => 4,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 8,
		'address_id' => 5,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
	[
		'shipment_id' => 9,
		'address_id' => 6,
		'type' => ShipmentDirectionInterface::DIRECTION_IN,
	],
	[
		'shipment_id' => 9,
		'address_id' => 7,
		'type' => ShipmentDirectionInterface::DIRECTION_OUT,
	],
];
