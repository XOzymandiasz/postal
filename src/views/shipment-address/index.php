<?php

use XOzymandias\Yii2Postal\models\search\ShipmentAddressPostSearch;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\models\ShipmentDirectionInterface;
use XOzymandias\Yii2Postal\Module;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var ShipmentAddressPostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Shipment Addresses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Create Shipment Address Sender'),
            ['create', 'defaultRole' => ShipmentAddress::ROLE_SENDER], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Module::t('common', 'Create Shipment Address Receiver'),
            ['create', 'defaultRole' => ShipmentAddress::ROLE_RECEIVER], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'street',
            'house_number',
            'apartment_number',
            'postal_code',
            'city',
            'country',
            [
                    'attribute' => 'default_role',
                'label' => Module::t('postal', 'Role'),
                'filter' => $searchModel::optionList(),
                'value' => function (ShipmentAddress $model) use ($searchModel) {
                    return $model->default_role
                        ? ShipmentAddress::getRolesNames()[$model->default_role]
                        : Module::t('common', 'None');
                }
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, ShipmentAddress $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
