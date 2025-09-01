<?php

namespace XOzymandias\Yii2Postal\tests\fixtures;

use XOzymandias\Yii2Postal\models\Shipment;
use yii\test\ActiveFixture;


class ShipmentFixture extends ActiveFixture
{
    public $modelClass = Shipment::class;

    public $depends = [ShipmentContentFixture::class, UserFixture::class];

}