<?php

namespace XOzymandias\Yii2Postal\components;

interface ShipmentTrackerInterface
{
    public function checkShipment(string $number): ?ShipmentInterface;
	public function setLanguage(string $language): void;
	public function externalTrackingUrl(string $number): String;
}
