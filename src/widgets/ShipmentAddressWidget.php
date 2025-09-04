<?php

namespace XOzymandias\Yii2Postal\widgets;

use kartik\select2\Select2;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\ModuleEnsureTrait;
use yii\helpers\Url;
use yii\web\JsExpression;

class ShipmentAddressWidget extends Select2
{
    use ModuleEnsureTrait;

    public string $addressProperty = 'address';
    public array $addressListRoute = ['shipment-address/list'];
    public ?string $role = null;
    public function init(): void
    {
        $module = static::ensureModule();

        $minLength = $module->minLengthAddressListQuery;

        if (!isset($this->options['placeholder'])) {
            $this->options['placeholder'] = Module::t('postal', 'Search for an address...');
        }

        if (!isset($this->initValueText) && $this->model->{$this->attribute} !== null) {
            $address = $this->model->{$this->addressProperty};
            if ($address instanceof ShipmentAddress) {
                $this->initValueText = $address->getFullInfo();
            }
        }

        if (empty($this->pluginOptions)) {
            $this->pluginOptions = [
                'allowClear' => true,
                'minimumInputLength' => ($this->role !== null ? 0 : $minLength),
                'language' => [
                    'errorLoading' => new JsExpression("function () { return '"
                        . Module::t('common', 'Waiting for results...')
                        . "'; }"),
                ],
                'ajax' => [
                    'url' => Url::to($this->addressListRoute),
                    'dataType' => 'json',
                    'data' => new JsExpression('function(params) { 
                        var role = ' . json_encode($this->role) . ';
                        if (params.term && params.term.length > 0) {
                            role = null;
                        }
                        return { 
                             query:params.term, 
                             role: role }; }'),
                    'processResults' => new JsExpression('function (data) {
                        var out = [];
                        if (Array.isArray(data.result)) { out = data.result; }
                        else if (Array.isArray(data.results)) { out = data.results; }
                        else if (data.result) { out = [data.result]; }
                        return { results: out };
                    }'),
                ],
                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
				'templateResult' => new JsExpression('function(address) { return address.text; }'),
				'templateSelection' => new JsExpression('function (address) { return address.text; }'),
            ];
        }

        parent::init();
    }
}
