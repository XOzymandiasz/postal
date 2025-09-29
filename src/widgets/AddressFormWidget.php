<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\forms\AddressForm;
use yii\base\Widget;

class AddressFormWidget extends Widget {

	public AddressForm $model;
	public array $options = [];

	public function run(): string {
		return $this->render('_form', [
			'model' => $this->model,
			'options' => $this->options,
		]);
	}
	public function getViewPath(): string
	{
		return __DIR__ . '/views/address';
	}
}

