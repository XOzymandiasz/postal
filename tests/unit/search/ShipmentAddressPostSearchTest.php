<?php

namespace XOzymandias\Yii2Postal\tests\unit\search;

use Codeception\Test\Unit;
use UnitTester;
use XOzymandias\Yii2Postal\models\search\ShipmentAddressPostSearch;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentAddressFixture;

/**
 * @property UnitTester $tester
 */
class ShipmentAddressPostSearchTest extends Unit
{
    public ShipmentAddressPostSearch $search;

    public function _before(): void
    {
        $this->search = new ShipmentAddressPostSearch();
    }

    public function _fixtures(): array
    {
        return [
            'address' => [
                'class' => ShipmentAddressFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_address.php'
            ],
        ];
    }

    public function testEmptySearch(): void
    {
        $dataProvider = $this->search->search(['ShipmentAddressPostSearch' => []]);

        $this->tester->assertSame($dataProvider->getTotalCount(), 5);
    }

    public function testSearchByRole(): void
    {
        $dataProvider = $this->search->search(['ShipmentAddressPostSearch' => [
            'default_role' => ShipmentAddress::ROLE_RECEIVER
        ]]);

        foreach ($dataProvider->query->all() as $shipmentAddress) {
            $this->tester->assertSame(ShipmentAddress::ROLE_RECEIVER, $shipmentAddress->default_role);
        }

        $this->tester->assertSame($dataProvider->getTotalCount(), 1);
    }

    public function testSearchByName(): void
    {
        $dataProvider = $this->search->search(['ShipmentAddressPostSearch' => [
            'name' => 'jan'
        ]]);

        $this->tester->assertSame($dataProvider->getTotalCount(), 2);

        foreach ($dataProvider->query->all() as $shipmentAddress) {
            $this->tester->assertSame('Jan Kowalski', $shipmentAddress->name);
        }
    }

}