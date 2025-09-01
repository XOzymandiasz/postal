<?php

namespace XOzymandias\Yii2Postal\tests\unit\modules\poczta_polska;

use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\EnvelopeRepository;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\ProfileRepository;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\ShipmentRepository;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Codeception\Test\Unit;
use XOzymandias\Yii2Postal\tests\_support\stubs\PocztaPolskaTrackerStub;
use UnitTester;
use Yii;

/**
 * @property UnitTester $tester
 */
class ModuleTest extends Unit
{
    private const MODULE_ID = 'postal/poczta_polska';

    public Module $module;

    public function testInitEnsuresInstances(): void
    {
        $this->module = Yii::$app->getModule(self::MODULE_ID);

        $this->assertInstanceOf(PocztaPolskaTracker::class, $this->module->tracker);
        $this->assertInstanceOf(PocztaPolskaSenderOptions::class, $this->module->senderOptions);
    }

    public function testCustomDefinitionAreEnsured(): void
    {
        $this->module = Yii::$app->getModule(self::MODULE_ID);

        $this->module->tracker = [
            'class' => PocztaPolskaTrackerStub::class,
        ];
        $this->module->init();

        $this->assertInstanceOf(PocztaPolskaTrackerStub::class, $this->module->tracker);
    }

    public function testRepositoryFactory(): void
    {
        $this->module = Yii::$app->getModule(self::MODULE_ID);

        $factory = $this->module->getRepositoryFactory();

        $this->assertInstanceOf(RepositoryFactory::class, $factory);
        $this->assertInstanceOf(ShipmentRepository::class, $factory->getShipmentRepository());
        $this->assertInstanceOf(EnvelopeRepository::class, $factory->getEnvelopeRepository());
        $this->assertInstanceOf(ProfileRepository::class, $factory->getProfileRepository());

    }


}