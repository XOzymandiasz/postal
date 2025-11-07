<?php

namespace XOzymandias\Yii2Postal\components;

interface ShipmentInterface
{
    public function getShipmentNumber(): string;

    public function getFinishedAt(): ?string;
}
