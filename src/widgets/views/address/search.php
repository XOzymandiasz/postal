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
			<div class="col-6 col-sm-4 col-md-2 col-lg-2">
				<?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-6 col-sm-7 col-md-5 col-lg-4">
				<?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-sm-6 col-md-5 col-lg-4">
				<?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-6 col-sm-3 col-md-4 col-lg-2">
				<?= $form->field($model, 'house_number')->textInput(['maxlength' => true]) ?>
			</div>
			<div class="col-6 col-sm-4 col-md-4 col-lg-2">
				<?= $form->field($model, 'apartment_number')->textInput(['maxlength' => true]) ?>
			</div>
		</div>



		<?php // echo $form->field($model, 'country') ?>

		<?php if($formNotNull) { ActiveForm::end(); } ?>

	</div>
<?php
