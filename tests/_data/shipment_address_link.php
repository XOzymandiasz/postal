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
];