<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentAddress $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-address-form">

    <?php $form = ActiveForm::begin([
        'id' => 'shipment-address-form',
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apartment_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postal_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isSender')->checkbox() ?>

    <?= $form->field($model, 'isReceiver')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
