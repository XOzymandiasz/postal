<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\models\search\ShipmentAddressPostSearch;
use yii\base\Widget;
use yii\widgets\ActiveForm;

class AddressSearchWidget extends Widget{
	public ShipmentAddressPostSearch $model;
	public ActiveForm $form;

	public function run():string {
		return $this->render(
			'search', [
				'form' => $this->form,
				'model' => $this->model,
			]
		);
	}

}