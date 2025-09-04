<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\forms\AddressForm $model */

$this->title = Module::t('common', 'Update Shipment Address: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->getModel()->id]];
$this->params['breadcrumbs'][] = Module::t('common', 'Update');
?>
<div class="shipment-address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
