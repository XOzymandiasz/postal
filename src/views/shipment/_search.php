<?php

use XOzymandias\Yii2Postal\models\search\ShipmentPostSearch;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\widgets\DateWidget;
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

	<div class="row">

		<?= $form->field($model, 'createdAtFrom', ['options' => ['class' => 'col-md-3']])
			->widget(DateWidget::class)
		?>

		<?= $form->field($model, 'createdAtTo', ['options' => ['class' => 'col-md-3']])
			->widget(DateWidget::class)
		?>

		<?= $form->field($model, 'noNumber', ['options' => ['class' => 'col-md-2']])
			->checkbox()
		?>

	</div>

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
