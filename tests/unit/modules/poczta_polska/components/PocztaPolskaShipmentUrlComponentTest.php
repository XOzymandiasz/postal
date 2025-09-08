<?php

namespace XOzymandias\Yii2Postal\tests\unit\modules\poczta_polska\components;

use Codeception\Test\Unit;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaShipmentUrlComponent;
use XOzymandias\Yii2Postal\modules\poczta_polska\ModuleEnsureTrait;
use UnitTester;

/**
 * @property UnitTester $tester
 */
class PocztaPolskaShipmentUrlComponentTest extends Unit
{
    use ModuleEnsureTrait;

    public PocztaPolskaShipmentUrlComponent $component;

    public function _before(): void
    {
        parent::_before();
        $this->component = self::ensureModule()->shipmentUrl;
    }

    public function testGetCreateInUrl():void
    {
        $url = $this->component->getCreateInUrl(
            123
        );
        codecept_debug($url);
        $this->tester->assertStringContainsString('/postal/shipment/create-in', $url);
        $this->tester->assertStringContainsString('bufferId=123', $url);
    }
}