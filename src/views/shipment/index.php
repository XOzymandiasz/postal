<?php

use XOzymandias\Yii2Postal\models\search\ShipmentPostSearch;
use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var ShipmentPostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Module::t('common', 'Postal Shipments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="postal-shipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a(
			'<i class="fa fa-inbox"></i>',
			['create-in'],
			[
				'class' => 'btn btn-success',
				'title' => Module::t('common', 'Create In Postal Shipment'),
				'aria-label' => Module::t('common', 'Create In Postal Shipment'),
				'data-toggle' => 'tooltip',
			]
		) ?>

		<?= Html::a(
			'<i class="fa fa-paper-plane"></i>',
			['create-out'],
			[
				'class' => 'btn btn-success',
				'title' => Module::t('common', 'Create Out Postal Shipment'),
				'aria-label' => Module::t('common', 'Create Out Postal Shipment'),
				'data-toggle' => 'tooltip',
			]
		) ?>
	</p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>


    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'attribute' => 'direction',
                'filter' => $searchModel::getDirectionsNames(),
                'label' => Module::t('postal', 'Direction'),
                'value' => 'directionName',
            ],
            [
                    'attribute' => 'number',
                'label' => Module::t('postal', 'Number'),
            ],
            [
                'attribute' => 'provider',
                'value' => 'providerName',
                'label' => Module::t('postal', 'Provider'),
                'filter' => $searchModel::getProvidersNames(),
            ],
            [
                'attribute' => 'content_id',
                'label' => Module::t('postal', 'Content'),
                'value' => function (Shipment $model) {
                    return $model->content->name ?? Module::t('common', '(empty)');
                },
                'filter' => $searchModel::getContentsNames(),
            ],
            [
                'attribute' => 'creator_id',
                'value' => 'creator.name',
                'filter' => $searchModel::getCreatorsNames(),
                'visible' => !$searchModel->isCreatorScenario(),
            ],
            //'creator_id',
            //'guid',
            //'buffer_id',
            //'shipment_at',
            //'api_data',
            [
                'attribute' => 'senderName',
                'label' => Module::t('postal', 'Sender Name'),
                'value' => function (Shipment $model) {
                    if ($model->senderAddress !== null) {
                        return $model->senderAddress->getFullName();
                    }
                    else{
                        return Module::t('postal', 'None');
                    }
                }
            ],
            [
                'attribute' => 'senderAddress',
                'label' => Module::t('postal', 'Sender Address'),
                'value' => function (Shipment $model) {
                    if ($model->senderAddress !== null) {
                        return $model->senderAddress->getFullLocation();
                    }
                    else{
                        return Module::t('postal', 'None');
                    }
                }
            ],
            [
                'attribute' => 'receiverName',
                'label' => Module::t('postal', 'Receiver Name'),
                'value' => function (Shipment $model) {
                    if ($model->receiverAddress !== null) {
                        return $model->receiverAddress->getFullName();
                    }
                    else{
                        return Module::t('postal', 'None');
                    }
                }
            ],
            [
                'attribute' => 'receiverAddress',
                'label' => Module::t('postal', 'Receiver Address'),
                'value' => function (Shipment $model) {
                    if ($model->receiverAddress !== null) {
                        return $model->receiverAddress->getFullLocation();
                    }
                    else{
                        return Module::t('postal', 'None');
                    }
                }
            ],
            [
                'attribute' => 'created_at',
                'label' => Module::t('postal', 'Created At'),
            ],
            [
                'attribute' => 'updated_at',
                'label' => Module::t('postal', 'Updated At'),
            ],
            [
                'attribute' => 'finished_at',
                'label' => Module::t('postal', 'Finished At'),
            ],
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Shipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],


        ],
    ]); ?>


</div>
