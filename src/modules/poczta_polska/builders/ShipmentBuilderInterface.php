<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\builders;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType;

interface ShipmentBuilderInterface
{
    public function build(): PrzesylkaType;
}