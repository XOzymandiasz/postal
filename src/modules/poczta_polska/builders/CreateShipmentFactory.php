<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\builders;

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\forms\ShipmentForm;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType;
use InvalidArgumentException;

class CreateShipmentFactory
{
    public static function create(ShipmentForm $form): PrzesylkaType
    {
        return match ($form->isRegistered) {
            true => (new PoleconaKrajowaBuilder($form))->build(),

            default => throw new InvalidArgumentException(
                Module::t('poczta-polska', "Unsupported shipment type: {$form->shipmentType}")
            ),
        };
    }
}
