<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\forms\AddressForm;
use yii\base\Widget;
use yii\widgets\ActiveForm;

class AddressFormWidget extends Widget {

	public AddressForm $model;
	public array $options = [];
	public ?ActiveForm $form = null;
	public ?string $formName = null;

	public function run(): string {
		if ($this->formName !== null) {
			$this->model->setFormName($this->formName);
		}

		return $this->render('_form', [
			'model' => $this->model,
			'options' => $this->options,
			'form' => $this->form,
		]);
	}
	public function getViewPath(): string
	{
		return __DIR__ . '/views/address';
	}
}

