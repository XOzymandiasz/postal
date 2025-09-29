<?php

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\widgets\ShipmentFormWidget;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\forms\ShipmentForm $model */

$this->title = Module::t('postal', 'Update Postal Shipment: {name}', [
    'name' => $model->getModel()->id,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getModel()->id, 'url' => ['view', 'id' => $model->getModel()->id]];
$this->params['breadcrumbs'][] = Module::t('common', 'Update');
?>
<div class="postal-shipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= ShipmentFormWidget::widget([
		'model' => $model,
	]) ?>

</div>
