<?php

use XOzymandias\Yii2Postal\models\search\ShipmentPostSearch;
use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var ShipmentPostSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="shipment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

	<?= $form->field($model, 'createdAtFrom')->input('date') ?>
	<?= $form->field($model, 'createdAtTo')->input('date') ?>
	<?= $form->field($model, 'noNumber')->checkbox() ?>

    <?php //$form->field($model, 'id') ?>

    <?php //$form->field($model, 'direction') ?>

    <?php //$form->field($model, 'number') ?>

    <?php //$form->field($model, 'provider') ?>

    <?php //$form->field($model, 'content_id') ?>

    <?php //$form->field($model, 'buffer_id') ?>

    <?php // echo $form->field($model, 'creator_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'guid') ?>

    <?php // echo $form->field($model, 'finished_at') ?>

    <?php // echo $form->field($model, 'shipment_at') ?>

    <?php // echo $form->field($model, 'api_data') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('common', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
