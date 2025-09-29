<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use XOzymandias\Yii2Postal\widgets\ContentFormWidget;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentContent $model */

$this->title = Module::t('common', 'Create Shipment Content');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= ContentFormWidget::widget([
			'model' => $model,
    ]) ?>

</div>
