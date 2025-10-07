<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\forms\ShipmentForm;
use yii\base\Widget;
use yii\widgets\ActiveForm;

class ShipmentFormWidget extends Widget {

	public ShipmentForm $model;
	public array $options = [];
	public ?ActiveForm $form = null;
	public bool $withProviderField = true;
	public bool $withSenderField = true;
	public bool $withReceiverField = true;

	public function run(): string {
		return $this->render('_form', [
			'model' => $this->model,
			'options' => $this->options,
			'form' => $this->form,
			'withProviderField' => $this->withProviderField,
			'withSenderField' => $this->withSenderField,
			'withReceiverField' => $this->withReceiverField,
		]);
	}
	public function getViewPath(): string
	{
		return __DIR__ . '/views/shipment';
	}
}