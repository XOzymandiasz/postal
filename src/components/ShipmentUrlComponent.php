<?php

namespace XOzymandias\Yii2Postal\components;

use XOzymandias\Yii2Postal\models\ShipmentProviderInterface as Providers;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\Url;

class ShipmentUrlComponent extends Component
{
    public array $providersCreateRoutes = [
        Providers::PROVIDER_POCZTA_POLSKA => 'poczta_polska/shipment/create-from-shipment',
    ];
    public array $providersUpdateRoutes = [
        Providers::PROVIDER_POCZTA_POLSKA => 'poczta_polska/shipment/update',
    ];

    public string $paramShipmentId = 'id';
    public string $paramBufferId = 'bufferId';
    public string $paramGuid = 'guid';
    public ?string $moduleId = null;

    public function init(): void
    {
        parent::init();
        if (!empty($this->moduleId)) {
            throw new InvalidConfigException('ModuleId is not configured');
        }
    }
    
    public function getAfterCreateURL(int $shipmentId, string $provider, array $params = []): ?string
    {
        $route = $this->providersCreateRoutes[$provider] ?? null;
        if ($route === null) {
            return null;
        }

        $params[$this->paramShipmentId] = $shipmentId;

        return Url::to([$this->getFullRoute($route)] + $params);
    }

    public function getAfterUpdateURL(int $bufferId, string $guid, string $provider, array $params = []): ?string
    {
        $route = $this->providersUpdateRoutes[$provider] ?? null;
        if ($route === null) {
            return null;
        }

        $params[$this->paramBufferId] = $bufferId;
        $params[$this->paramGuid] = $guid;

        return Url::to([$this->getFullRoute($route)] + $params);
    }

    private function getFullRoute(string $route): string
    {
        $base = '/' . trim($this->moduleId, '/');
        return $base . '/' . ltrim($route, '/');
    }

}