<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\components;

use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\Url;

class PocztaPolskaShipmentUrlComponent extends Component
{
    public string $createInRoute = 'shipment/create-in';
    public string $updateRoute = 'shipment/update';
    public string $deleteRoute = 'shipment/delete';


    public string $paramBufferId = 'bufferId';
    public int $paramId = 0;
    public ?string $moduleId = null;

    public function getCreateInURL(int $bufferId, array $params = []): ?string
    {
        if($this->moduleId == null){
            throw new InvalidConfigException('moduleId is required');
        }

        $params[$this->paramBufferId] = $bufferId;
        return Url::to([$this->getFullRoute($this->getParentModuleId(), $this->createInRoute)] + $params);
    }

    public function getDeleteURL(int $id, array $params = []): ?string
    {
        if($this->moduleId == null){
            throw new InvalidConfigException('moduleId is required');
        }

        $params[$this->paramId] = $id;
        return Url::to([$this->getFullRoute($this->getParentModuleId(), $this->deleteRoute)] + $params);
    }

    public function getUpdateURL(int $id, array $params = []): ?string
    {
        if($this->moduleId == null){
            throw new InvalidConfigException('moduleId is required');
        }

        $params[$this->paramId] = $id;
        return Url::to([$this->getFullRoute($this->getParentModuleId(), $this->updateRoute)] + $params);
    }

    private function getFullRoute(string $moduleId, string $route): string
    {
        $base = '/' . trim($moduleId, '/');
        return $base . '/' . ltrim($route, '/');
    }

    private function getParentModuleId(): string
    {
        $parts = explode('/', $this->moduleId);

        if (count($parts) == 1) {
            return $this->moduleId;
        }

        return $parts[0];
    }
}