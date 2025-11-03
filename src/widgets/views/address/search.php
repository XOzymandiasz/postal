<?php

use XOzymandias\Yii2Postal\models\search\ShipmentAddressPostSearch;
use yii\widgets\ActiveForm;
use yii\web\View;

/** @var View $this */
/** @var ShipmentAddressPostSearch $model */
/** @var ActiveForm $form */

$formNotNull = $form === null;

?>

	<div class="shipment-address-search">

		<?php if($formNotNull) { $form = ActiveForm::begin([
			'action' => ['index'],
			'method' => 'get',
		]);}?>

		<?php //$form->field($model, 'id') ?>

		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-2">
				<?= $form->field($model, 'postal_code', [
					'labelOptions' => ['style' => 'white-space: nowrap;']
				])->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-sm-12 col-md-8 col-lg-8">
				<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?= $form->field($model, 'house_number', [
					'labelOptions' => ['style' => 'white-space: nowrap;']
				])->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-sm-12 col-md-3 col-lg-2">
				<?= $form->field($model, 'apartment_number', [
					'labelOptions' => ['style' => 'white-space: nowrap;']
				])->textInput(['maxlength' => true]) ?>
			</div>
		</div>



		<?php // echo $form->field($model, 'country') ?>

		<?php if($formNotNull) { ActiveForm::end(); } ?>

	</div>
<?php
