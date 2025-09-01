<?php

use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentAddress $model */

$this->title = Module::t('common', 'Create Shipment Address');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
