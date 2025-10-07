<?php

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\forms\BufferForm;
use edzima\teryt\models\Region;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/** @var View $this */
/** @var BufferForm $model */
/** @var ActiveForm $form */
/** @var array $profiles */
?>

<div class="postal-poczta-polska-envelope-form container-fluid">

	<?php $form = ActiveForm::begin(); ?>

	<div class="row g-3">
		<div class="col-12 col-sm-10 col-md-8 col-lg-6">
			<?= $form->field($model, 'name')->input('name') ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-4 col-md-3 col-lg-2">
			<?= $form->field($model, 'regionId')->widget(Select2::class, [
				'data' => Region::getNames(),
				'options' => ['placeholder' => 'Select ...'],
				'pluginOptions' => ['width' => '100%'],
			]) ?>
		</div>

		<div class="col-12 col-sm-8 col-md-6 col-lg-4">
			<?= $form->field($model, 'dispatchOfficeId')->widget(DepDrop::class, [
				'type' => DepDrop::TYPE_SELECT2,
				'options' => ['placeholder' => Module::t('postal', 'Choose dispatch office')],
				'pluginOptions' => [
					'depends' => [Html::getInputId($model, 'regionId')],
					'url' => ['get-dispatch-offices-names'],
					'width' => '100%',
				],
			]) ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-8 col-md-6 col-lg-5">
			<?= $form->field($model, 'profilId')->widget(Select2::class, [
				'data' => $profiles,
				'options' => ['placeholder' => Module::t('postal', 'Choose sender profile')],
				'pluginOptions' => [
					'allowClear' => true,
					'width' => '100%',
				],
			]) ?>
		</div>
	</div>

	<div class="row g-3">
		<div class="col-12 col-sm-6 col-md-3 col-lg-2">
			<?= $form->field($model, 'sendAt')->input('date') ?>
		</div>
		<div class="col-12 col-sm-6 col-md-2 col-lg-1 d-flex align-items-center">
			<?= $form->field($model, 'isActive')->checkbox() ?>
		</div>
	</div>

	<div class="form-group mt-3">
		<?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
