<?php

namespace XOzymandias\Yii2Postal\tests\unit\search;

use Codeception\Test\Unit;
use UnitTester;
use XOzymandias\Yii2Postal\models\search\ShipmentContentPostSearch;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentContentFixture;

/**
 * @property UnitTester $tester
 */
class ShipmentContentPostSearchTest extends Unit
{
    public ShipmentContentPostSearch $search;

    public function _before(): void
    {
        $this->search = new ShipmentContentPostSearch();
    }

    public function _fixtures(): array
    {
        return [
            'content' => [
                'class' => ShipmentContentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment_content.php'
            ],
        ];
    }

    public function testEmptySearch(): void
    {
        $dataProvider = $this->search->search(['ShipmentContentPostSearch' => []]);

        $this->tester->assertSame($dataProvider->getTotalCount(), 2);
    }

    public function testSearchByIsActive(): void
    {
        $dataProvider = $this->search->search(['ShipmentContentPostSearch' => [
            'is_active' => 1,
        ]]);
        $this->tester->assertCount(1, $dataProvider->getModels());
    }

    public function testSearchByName(): void
    {
        $dataProvider = $this->search->search(['ShipmentContentPostSearch' => [
            'name' => 'Doc',
        ]]);
        $this->tester->assertCount(1, $dataProvider->getModels());
        $this->tester->assertSame('Documents', $dataProvider->getModels()[0]->name);
    }
}