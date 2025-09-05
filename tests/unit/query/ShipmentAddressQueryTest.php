<?php

namespace XOzymandias\Yii2Postal\tests\unit\query;

use Codeception\Test\Unit;
use UnitTester;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentAddressFixture;

/**
 * @property UnitTester $tester
 */
class ShipmentAddressQueryTest extends Unit
{
    public function _fixtures(): array
    {
        return [
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php',
            ],
        ];
    }

    public function testEmpty(): void
    {
        $search = ShipmentAddress::find()->withName('')->all();

        $this->tester->assertCount(5, $search);
    }

    public function testWithName(): void
    {
        $search = ShipmentAddress::find()->withName('Marek Nowak Zakład')->all();

        $this->tester->assertCount(1, $search);
        $this->tester->assertSame('Marek Nowak', $search[0]->name);
        $this->tester->assertSame('Zakład', $search[0]->name_2);
    }

    public function testWithLocation(): void
    {
        $search = ShipmentAddress::find()->withLocation('Kraków')->all();
        $this->tester->assertCount(3, $search);

        $search = ShipmentAddress::find()->withLocation('31210 Kraków Chrobrzysta 1 1')->all();
        $this->tester->assertCount(1, $search);
    }

    public function testWithLocationInOtherVariation(): void
    {
        $search = ShipmentAddress::find()->withLocation('Kraków')->all();
        $this->tester->assertCount(3, $search);

        $search = ShipmentAddress::find()->withLocation('Chrobrzysta Kraków')->all();
        $this->tester->assertCount(1, $search);
    }

    public function testFilterByFullAddress(): void
    {
        $search = ShipmentAddress::find()->filterByFullAddress('Marek Kraków')->all();
        $this->tester->assertCount(2, $search);

        $search = ShipmentAddress::find()->filterByFullAddress('Marek Nowak Zakład 33210 Kraków Piastowska 1 1')->all();
        $this->tester->assertCount(1, $search);
    }

    public function testFilterByFullAddressInOtherVariation(): void
    {
        $search = ShipmentAddress::find()->filterByFullAddress('Marek Kraków')->all();
        $this->tester->assertCount(2, $search);

        $search = ShipmentAddress::find()->filterByFullAddress('Marek Kraków Nowak')->all();
        $this->tester->assertCount(1, $search);
    }

    public function testDefaultInDirection(): void
    {
        $search = ShipmentAddress::find()->defaultInDirection(false)->all();
        $this->tester->assertCount(1, $search);

        $search = ShipmentAddress::find()->defaultInDirection()->all();
        $this->tester->assertCount(2, $search);
    }

    public function testDefaultOutDirection(): void
    {
        $search = ShipmentAddress::find()->defaultOutDirection(false)->all();
        $this->tester->assertCount(1, $search);

        $search = ShipmentAddress::find()->defaultInDirection()->all();
        $this->tester->assertCount(2, $search);
    }

}