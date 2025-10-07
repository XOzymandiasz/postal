<?php

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\forms\ShipmentForm;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ShipmentForm $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-address-form container-fluid">

	<?php $form = ActiveForm::begin(); ?>

	<div class="row g-3">
		<div class="col-12 col-sm-10 col-md-8 col-lg-5">
			<?= $form->field($model, 'buffer_id')->widget(Select2::class, [
				'data' => $model->getBufforsNames(),
				'options' => ['placeholder' => Module::t('poczta-polska', 'Choose buffer')],
				'pluginOptions' => [
					'allowClear' => true,
					'width' => '100%',
				],
			]) ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-6 col-md-4 col-lg-2">
			<?= $form->field($model, 'category')->widget(Select2::class, [
				'data' => $model->getCategoriesNames(),
				'options' => ['placeholder' => Module::t('poczta-polska', 'Choose category')],
				'pluginOptions' => [
					'allowClear' => true,
					'width' => '100%',
				],
			]) ?>
		</div>
		<div class="col-12 col-sm-3 col-md-2 col-lg-1 d-flex align-items-center">
			<?= $form->field($model, 'isRegistered')->checkbox() ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-4 col-md-3 col-lg-1">
			<?= $form->field($model, 'format')->widget(Select2::class, [
				'data' => $model->getFormatTypes(),
				'options' => ['placeholder' => Module::t('poczta-polska', 'Choose format')],
				'pluginOptions' => [
					'allowClear' => true,
					'width' => '100%',
				],
			]) ?>
		</div>
		<div class="col-12 col-sm-4 col-md-3 col-lg-1">
			<?= $form->field($model, 'mass')->textInput() ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-10 col-md-8 col-lg-8">
			<?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
		</div>
	</div>

	<div class="form-group mt-3">
		<?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
