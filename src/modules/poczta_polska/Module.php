<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska;

use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaShipmentUrlComponent;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use Yii;
use yii\base\Module as BaseModule;
use yii\di\Instance;

/**
 * @property-read PocztaPolskaTracker $tracker
 * @property-read PocztaPolskaSenderOptions $senderOptions
 * @property-read PocztaPolskaShipmentUrlComponent $shipmentUrl
 */
class Module extends BaseModule
{

    /**
     * @var string|array|PocztaPolskaTracker
     */
    public string|array|PocztaPolskaTracker $tracker = [
        'class' => PocztaPolskaTracker::class,
    ];

    /**
     * @var string|array|PocztaPolskaSenderOptions
     */
    public string|array|PocztaPolskaSenderOptions $senderOptions = [
        'class' => PocztaPolskaSenderOptions::class,
    ];

    /**
     * @var string|array|PocztaPolskaShipmentUrlComponent
     */
    public string|array|PocztaPolskaShipmentUrlComponent $shipmentUrl = [
        'class' => PocztaPolskaShipmentUrlComponent::class,
    ];

    public function init(): void
    {
        parent::init();
        Yii::configure($this, require(__DIR__ . '/config.php'));

        $this->tracker = Instance::ensure($this->tracker,PocztaPolskaTracker::class, $this);
        $this->senderOptions = Instance::ensure($this->senderOptions,PocztaPolskaSenderOptions::class, $this);
        $this->shipmentUrl = Instance::ensure($this->shipmentUrl,PocztaPolskaShipmentUrlComponent::class, $this);
        $this->shipmentUrl->moduleId = $this->uniqueId;
    }

    public function getRepositoryFactory(): RepositoryFactory
    {
        return new RepositoryFactory($this->senderOptions);
    }
}
