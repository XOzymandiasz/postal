<?php

namespace XOzymandias\Yii2Postal\events;

use XOzymandias\Yii2Postal\models\Shipment;
use yii\base\Event;

class ShipmentEvent extends Event
{

    public Shipment $model;
}
