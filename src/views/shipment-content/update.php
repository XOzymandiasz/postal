<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentContent $model */

$this->title = Module::t('common', 'Update Shipment Content: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('common', 'Update');
?>
<div class="shipment-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
