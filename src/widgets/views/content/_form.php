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

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
