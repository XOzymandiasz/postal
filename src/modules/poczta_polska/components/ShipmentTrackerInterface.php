<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\components;

interface ShipmentTrackerInterface
{
    public function checkShipment(string $number): ?ShipmentInterface;
}
