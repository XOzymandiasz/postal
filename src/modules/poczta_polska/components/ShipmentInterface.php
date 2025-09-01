<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\components;

interface ShipmentInterface
{
    public function getShipmentNumber(): string;

    public function getFinishedAt(): ?string;
}
