<?php

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var XOzymandias\Yii2Postal\models\ShipmentAddress $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Shipment Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shipment-address-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('common', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'street',
            'house_number',
            'apartment_number',
            'postal_code',
            'city',
            'country',
            'phone',
            'email',
            [
                    'attribute' => Module::t('postal', 'Role'),
                'value' => function (ShipmentAddress $model) {
                    return $model->default_role
                        ? ShipmentAddress::getDefaultRolesNames()[$model->default_role]
                        : Module::t('common', 'None');
                }
            ]
        ],
    ]) ?>

</div>
