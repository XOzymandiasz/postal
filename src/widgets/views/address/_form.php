<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentAddress $model */
/** @var yii\widgets\ActiveForm|null $form */

$formWasNull = $form === null;
?>

<div class="shipment-address-form">


	<?php
	if ($formWasNull) {
		$form = ActiveForm::begin([
			'id' => 'shipment-address-form',
		]);
	}
	?>

	<div class="row">
		<div class="col-12 col-sm-8 col-md-6 col-lg-6">
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


	<div class="row">
		<div class="col-6 col-sm-4 col-md-2 col-lg-2">
			<?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-6 col-sm-7 col-md-6 col-lg-5">
			<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-12 col-sm-2 col-md-2 col-lg-1">
			<?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-6 col-md-6 col-lg-4">
			<?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-6 col-sm-3 col-md-2 col-lg-1">
			<?= $form->field($model, 'house_number')->textInput(['maxlength' => true]) ?>
		</div>
		<div class="col-6 col-sm-4 col-md-2 col-lg-1">
			<?= $form->field($model, 'apartment_number')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-12 col-sm-6 col-md-4 col-lg-2">
			<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-6 col-sm-6 col-md-4 col-lg-3">
			<?= $form->field($model, 'isSender')->checkbox() ?>
		</div>
		<div class="col-6 col-sm-6 col-md-4 col-lg-3">
			<?= $form->field($model, 'isReceiver')->checkbox() ?>
		</div>
	</div>

	<?php if ($formWasNull): ?>
		<div class="form-group">
			<?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
		</div>

		<?php ActiveForm::end(); ?>
	<?php endif; ?>


</div>
