<?php

use XOzymandias\Yii2Postal\forms\AddressForm;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\widgets\AddressFormWidget;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var AddressForm $model */

$this->title = Module::t('common', 'Create Shipment Address');
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= AddressFormWidget::widget([
			'model' => $model
    ]) ?>

</div>
