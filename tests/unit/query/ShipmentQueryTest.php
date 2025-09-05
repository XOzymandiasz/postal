<?php

namespace XOzymandias\Yii2Postal\tests\unit\query;

use Codeception\Test\Unit;
use UnitTester;
use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;
use XOzymandias\Yii2Postal\tests\fixtures\ShipmentFixture;

/**
 * @property UnitTester $tester
 */
class ShipmentQueryTest extends Unit
{

    public function _fixtures(): array
    {
        return [
            'shipment' => [
                'class' => ShipmentFixture::class,
                'dataFile' => codecept_data_dir() . 'shipment.php'
            ],
        ];
    }

    public function testDirectionIn(): void
    {
        $search = Shipment::find()->directionIn()->all();

        $this->tester->assertCount(1, $search);
        $this->tester->assertSame(ShipmentDirectionInterface::DIRECTION_IN, $search[0]->direction);
    }

    public function testDirectionOut(): void
    {
        $search = Shipment::find()->directionOut()->all();

        $this->tester->assertCount(1, $search);
        $this->tester->assertSame(ShipmentDirectionInterface::DIRECTION_OUT, $search[0]->direction);
    }

    public function testBothDirections(): void{
        $search = Shipment::find()->directionOut()->directionIn()->all();

        $this->tester->assertCount(0, $search);
    }

}