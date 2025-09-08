<?php

namespace XOzymandias\Yii2Postal\tests\functional\forms\shipment;

use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\models\ShipmentAddressLink;
use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;
use XOzymandias\Yii2Postal\models\ShipmentProviderInterface;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentAddressFixture;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentContentFixture;
use XOzymandias\Yii2Postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;

class ShipmentCreateOutCest
{
    public const ROUTE_CREATE_OUT = 'postal/shipment/create-out';
    public const ROUTE_VIEW = 'postal/shipment/view';
    public const ROUTE_LOG_IN = 'site/login';
    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Postal Shipment', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'ShipmentForm[number]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[provider]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[content_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[sender_id]']);
        $I->seeElement('select', ['name' => 'ShipmentForm[receiver_id]']);
        $I->dontSeeElement('input[name="ShipmentForm[finished_at]"]');

        $I->seeLink('Create Content', '/postal/shipment-content/create');
        $I->seeLink('Create Receiver Address', '/postal/shipment-address/create');
        $I->seeElement('button', ['type' => 'submit']);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkCreate(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $content = $I->grabFixture('content', 'content_active');
        $senderAddress = $I->grabFixture('address', 'sender');
        $receiverAddress = $I->grabFixture('address', 'receiver');

        $I->submitForm('#shipment-form', [
            'ShipmentForm[provider]' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'ShipmentForm[content_id]'  => $content->id,
            'ShipmentForm[sender_id]'   => $senderAddress->id,
            'ShipmentForm[receiver_id]' => $receiverAddress->id,
        ]);

        $I->seeRecord(Shipment::class, [
            'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'content_id' => $content->id,
        ]);

        $id = $I->grabRecord(Shipment::class, [
            'provider' => ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA,
            'content_id' => $content->id,
        ])->id;

        $I->seeRecord(ShipmentAddressLink::class, [
            'shipment_id' => $id,
            'address_id' => $senderAddress->id,
        ]);

        $I->seeRecord(ShipmentAddressLink::class, [
            'shipment_id' => $id,
            'address_id' => $receiverAddress->id,
        ]);

        $I->amOnRoute(static::ROUTE_VIEW . '?id=' . $id);
    }

    public function checkCreateEmpty(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(static::ROUTE_CREATE_OUT);

        $content = $I->grabFixture('content', 'content_active');
        $senderAddress = $I->grabFixture('address', 'sender');
        $receiverAddress = $I->grabFixture('address', 'receiver');

        $I->submitForm('#shipment-form', [
            'ShipmentForm[content_id]'  => $content->id,
            'ShipmentForm[sender_id]'   => $senderAddress->id,
            'ShipmentForm[receiver_id]' => $receiverAddress->id,
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeInCurrentUrl(static::ROUTE_CREATE_OUT);
        $I->see('Create Postal Shipment', 'h1');
        $I->see('Provider cannot be blank');
    }
}