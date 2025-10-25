<?php

use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;
use XOzymandias\Yii2Postal\models\ShipmentProviderInterface;
use yii\db\Expression;

return [
	'shipment_in_PP' => [
		'id' => 1,
		'number' => 'RR123456789PL',
		'guid' => 'guid-abc-123',
		'buffer_id' => 12,
		'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
		'direction' => ShipmentDirectionInterface::DIRECTION_IN,
		'content_id' => 1,
		'creator_id' => 2,
		'created_at' => new Expression('Now()'),
		'updated_at' => new Expression('Now()'),
		'finished_at' => null,
		'shipment_at' => null,
		'api_data' => null,
	],
	'shipment_out_PP' => [
		'id' => 2,
		'number' => '',
		'guid' => 'guid-abc-123',
		'buffer_id' => 13,
		'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
		'direction' => ShipmentDirectionInterface::DIRECTION_OUT,
		'content_id' => 1,
		'creator_id' => 2,
		'created_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'updated_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'finished_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'shipment_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'api_data' => null,
	],
	[
		'id' => 3,
		'number' => '',
		'guid' => 'guid-abc-223',
		'buffer_id' => 3,
		'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
		'direction' => ShipmentDirectionInterface::DIRECTION_OUT,
		'content_id' => 1,
		'creator_id' => 2,
		'created_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'updated_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'finished_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'shipment_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'api_data' => null,
	],
	[
		'id' => 4,
		'number' => '',
		'guid' => 'guid-abc-223',
		'buffer_id' => 3,
		'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
		'direction' => ShipmentDirectionInterface::DIRECTION_IN,
		'content_id' => 1,
		'creator_id' => 2,
		'created_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'updated_at' => new Expression('Now() - INTERVAL 7 DAY'),
		'finished_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'shipment_at' => new Expression('Now() + INTERVAL 7 DAY'),
		'api_data' => null,
	]
];