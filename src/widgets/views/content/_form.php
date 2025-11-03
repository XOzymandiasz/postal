<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentContent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-content-form">

	<?php $form = ActiveForm::begin([
		'id' => 'shipment-content-form',
	]); ?>

	<div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6">
			<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-3 col-lg-2">
			<?= $form->field($model, 'is_active')->checkbox() ?>
		</div>
	</div>

	<div class="form-group">
		<?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>
