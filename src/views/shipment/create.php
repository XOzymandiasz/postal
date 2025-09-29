<?php

use XOzymandias\Yii2Postal\forms\ShipmentForm;
use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use XOzymandias\Yii2Postal\widgets\ShipmentFormWidget;

/** @var yii\web\View $this */
/** @var ShipmentForm $model */

$this->title = $model->isInScenario() ? Module::t('postal', 'Create Shipment - IN') : Module::t('postal', 'Create Shipment - OUT');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-shipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

	<?= ShipmentFormWidget::widget([
			'model' => $model,
		]) ?>
</div>
