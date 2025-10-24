<?php

use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var Shipment $model */

$this->title = Module::t('postal','Shipment {content}', [
		'content' => $model->content->name,
	]);
$this->params['breadcrumbs'][] = ['label' => Module::t('common', 'Postal Shipments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="postal-shipment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Module::t('common', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Module::t('common', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Module::t('poczta-polska', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
			[
				'attribute' => 'direction',
				'value' => function(Shipment $model){
					return $model->getDirectionName();
				}
			],
            'number',
			[
				'attribute' => 'provider',
				'value' => function(Shipment $model){
					return $model->getProviderName();
				}
			],
            //'content_id',
            //'creator_id',
            'created_at',
            'updated_at',
            //'guid',
            'finished_at',
            'shipment_at',
        ],
    ]) ?>

</div>
