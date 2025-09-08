<?php

namespace XOzymandias\Yii2Postal\tests\functional\forms\address;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;
use XOzymandias\Yii2Postal\tests\fixtures\UserFixture;
use Codeception\Util\HttpCode;
use FunctionalTester;
use yii\helpers\Url;

class ShipmentAddressCreateCest
{
    public const ROUTE_CREATE = '/postal/shipment-address/create';
    public const ROUTE_VIEW = '/postal/shipment-address/view';
    public const ROUTE_LOG_IN = '/site/login';

    public function _fixtures(): array
    {
        return [
            'user' => [
                'class' => UserFixture::class,
                'dataFile' => codecept_data_dir() . 'user.php'
            ],
        ];
    }

    public function checkRender(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        codecept_debug($user);
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(Url::to([
            static::ROUTE_CREATE,
            'direction' => ShipmentDirectionInterface::DIRECTION_IN]));

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Shipment Address', 'h1');
        $I->seeElement('form');
        $I->seeElement('input', ['name' => 'AddressForm[name]']);
        $I->seeElement('input', ['name' => 'AddressForm[street]']);
        $I->seeElement('input', ['name' => 'AddressForm[house_number]']);
        $I->seeElement('input', ['name' => 'AddressForm[apartment_number]']);
        $I->seeElement('input', ['name' => 'AddressForm[postal_code]']);
        $I->seeElement('input', ['name' => 'AddressForm[city]']);
        $I->seeElement('input', ['name' => 'AddressForm[country]']);
    }

    public function checkGuestCannotAccessCreate(FunctionalTester $I): void
    {
        $I->amOnRoute(static::ROUTE_CREATE);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeInCurrentUrl(static::ROUTE_LOG_IN);
    }

    public function checkCreateValid(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(Url::to([
            static::ROUTE_CREATE,
            'defaultRole' => ShipmentDirectionInterface::DIRECTION_IN]));

        $I->submitForm('#shipment-address-form', [
            'AddressForm[name]' => 'Functional',
            'AddressForm[house_number]' => 0,
            'AddressForm[postal_code]' => 33333,
            'AddressForm[city]' => 'City',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);

        $I->seeRecord(ShipmentAddress::class, [
            'name' => 'Functional',
            'house_number' => 0,
            'postal_code' => 33333,
            'city' => 'City'
        ]);

        $id = $I->grabRecord(ShipmentAddress::class, [
            'name' => 'Functional'
        ])->id;

        $I->seeInCurrentUrl(static::ROUTE_VIEW . '?id=' . $id);
    }

    public function checkCreateEmpty(FunctionalTester $I): void
    {
        $user = $I->grabFixture('user', 'admin');
        $I->amLoggedInAs($user->id);
        $I->amOnRoute(Url::to([
            static::ROUTE_CREATE,
            'defaultRole' => ShipmentDirectionInterface::DIRECTION_IN]));

        $I->submitForm('#shipment-address-form', [
            'ShipmentAddress[name]'             => '',
            'ShipmentAddress[street]'           => '',
            'ShipmentAddress[house_number]'     => '',
            'ShipmentAddress[apartment_number]' => '',
            'ShipmentAddress[postal_code]'      => '',
            'ShipmentAddress[city]'             => '',
            'ShipmentAddress[country]'          => '',
        ]);

        $I->seeResponseCodeIs(HttpCode::OK);
        $I->see('Create Shipment Address', 'h1');
        $I->see('Name cannot be blank');
        $I->see('House number cannot be blank');
        $I->see('Postal code cannot be blank');
        $I->see('City cannot be blank');
    }
}