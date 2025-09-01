<?php

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\forms\ShipmentForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ShipmentForm $model */

$this->title = Module::t('poczta-polska', 'Create Poczta Polska Shipment');
$this->params['breadcrumbs'][] = ['label' => Module::t('poczta-polska', 'Poczta Polska Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="postal-shipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
