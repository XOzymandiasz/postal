<?php

namespace XOzymandias\Yii2Postal\tests\unit;

use XOzymandias\Yii2Postal\components\ShipmentRelationComponent;
use XOzymandias\Yii2Postal\components\ShipmentUrlComponent;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\ModuleEnsureTrait;
use Codeception\Test\Unit;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class ModuleTest extends Unit
{
    use ModuleEnsureTrait;
    private Module $module;

    public function testInitEnsuresInstances(): void
    {
        $this->module = static::ensureModule();

        $this->tester->assertInstanceOf(ShipmentUrlComponent::class, $this->module->shipmentUrl);
        $this->tester->assertInstanceOf(ShipmentRelationComponent::class, $this->module->shipmentRelation);
    }

    public function testAliasIsRegistered(): void
    {
        $this->module = static::ensureModule();

        $alias = Yii::getAlias('@xozymandias/postal', false);
        $this->tester->assertNotFalse($alias);
        $this->tester->assertDirectoryExists($alias);
    }

    public function testTranslationsAreRegistered(): void
    {
        $this->module = static::ensureModule();

        $this->assertArrayHasKey('xozymandias/postal/*', Yii::$app->i18n->translations);
        $translated = Module::t('common', 'Save');
        $this->tester->assertIsString($translated);
        $this->tester->assertNotEmpty($translated);
    }
}
