<?php

use XOzymandias\Yii2Postal\forms\ShipmentForm;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\widgets\ShipmentAddressWidget;
use XOzymandias\Yii2Postal\widgets\DateTimeWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var ShipmentForm $model */
/** @var yii\widgets\ActiveForm $form */
/** @var bool $withProviderField */
/** @var bool $withSenderField */
/** @var bool $withReceiverField */

?>

<div class="postal-shipment-form">

	<?php $form = ActiveForm::begin([
		'id' => 'shipment-form',
	]); ?>

	<div class="row">
		<div class="col-sm-5 col-md-4 col-lg-3">
			<?= $form->field($model, 'number')->textInput(['maxlength' => true, 'autofocus' => true]) ?>
		</div>

		<div class="col-sm-4 col-md-3 col-lg-2">
			<?= $withProviderField ? $form->field($model, 'provider')->widget(Select2::class, [
				'data' => $model::getProvidersNames(),
				'options' => ['placeholder' => Module::t('postal', 'Choose provider')],
			]) : '' ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5">
			<?= $form->field($model, 'content_id')->widget(Select2::class, [
				'data' => $model->getContentNames(),
				'options' => ['placeholder' => Module::t('postal', 'Choose content')],
				'pluginOptions' => ['tags' => true],
			]) ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5">
			<?= $withSenderField ? $form->field($model, 'sender_id')->widget(ShipmentAddressWidget::class, [
				'role' => ShipmentAddress::ROLE_SENDER,
				'options' => ['placeholder' => Module::t('postal', 'Choose Sender')],
				'addressProperty' => 'senderAddress',
			])->hint(
				Html::a(
					Module::t('postal', 'Create Sender Address'),
					['shipment-address/create']
				)
			) : '' ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5">
			<?= $withReceiverField ? $form->field($model, 'receiver_id')->widget(ShipmentAddressWidget::class, [
				'role' => ShipmentAddress::ROLE_RECEIVER,
				'options' => ['placeholder' => Module::t('postal', 'Choose Receiver')],
				'addressProperty' => 'receiverAddress',
			])->hint(
				Html::a(
					Module::t('postal', 'Create Receiver Address'),
					['shipment-address/create']
				)
			) : '' ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-5 col-lg-4">
			<?= ($model->isInScenario() || $model->isUpdateIn())
				? $form->field($model, 'finished_at')->widget(DateTimeWidget::class)
				: ''
			?>
		</div>
	</div>

	<div class="form-group mt-3">
		<?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>