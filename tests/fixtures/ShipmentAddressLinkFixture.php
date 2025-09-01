<?php

namespace XOzymandias\Yii2Postal\tests\fixtures;

use XOzymandias\Yii2Postal\models\ShipmentAddressLink;
use yii\test\ActiveFixture;

class ShipmentAddressLinkFixture extends ActiveFixture
{
    public $modelClass = ShipmentAddressLink::class;
    public $depends = [ShipmentFixture::class, ShipmentAddressFixture::class];

}