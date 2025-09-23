<?php

use XOzymandias\Yii2Postal\models\search\ShipmentContentPostSearch;
use XOzymandias\Yii2Postal\models\ShipmentContent;
use XOzymandias\Yii2Postal\Module;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var ShipmentContentPostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Shipment Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipment-content-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Create Shipment Content'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                [
                        'attribute' => 'name',
                    'label' => Module::t('postal', 'Name'),
                ],
            [
                'attribute' => 'is_active',
                'label' => Module::t('postal', 'Is Active'),
                'filter' => $searchModel::activeOptions(),
                'value' => function (ShipmentContent $model) {
                    return $model->is_active
                        ? Module::t('common', 'Yes')
                        : Module::t('common', 'No');
                },
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, ShipmentContent $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
