<?php

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\models\search\EnvelopeSearch;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\BuforType;
use XOzymandias\Yii2Postal\widgets\Nav;
use yii\data\DataProviderInterface;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var EnvelopeSearch $searchModel */
/** @var DataProviderInterface $dataProvider */
/** @var array $statusNavItems */

$this->title = Module::t('poczta-polska', 'Envelopes - {status}', [
    'status' => $searchModel->getStatusName()
]);
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="buffor-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a(Module::t('poczta-polska', 'Create Buffer'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= $this->render('_search', [
        'model' => $searchModel
    ]) ?>

    <div class="row">

        <div class="col-xs-12 col-md-3">
            <?= Nav::widget([
                'items' => $statusNavItems,
                'options' => ['class' => 'nav-pills'],
            ]) ?>
        </div>

        <div class="col-xs-12 col-md-9">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [

                    [   'attribute' => 'name',
                        'label' => Module::t('poczta-polska', 'Name'),
                        'value' => function (BuforType $model) {
                            return $model->getOpis();
                        }
                    ],
                    [   'attribute' => 'sendAt',
                        'label' => Module::t('poczta-polska', 'Send at'),
                        'value' => function (BuforType $model) {
                            return $model->getDataNadania();
                        }
                    ],
                    [   'attribute' => 'dispatchOffice',
                        'label' => Module::t('poczta-polska', 'Dispatch Office'),
                        'value' => function (BuforType $model) {
                            return $model->getUrzadNadania();
                        }
                    ],
                    [
                        'attribute' => 'active',
                        'format' => 'boolean',
                        'label' => Module::t('poczta-polska', 'Is active'),
                        'value' => function (BuforType $model) {
                            return $model->getActive();
                        },
                    ],
                    [
                        'class' => ActionColumn::class,
                        'visible' => $searchModel->isBuffer(),
                        'template' => '{view} {delete} {shipment} {update}',
                        'urlCreator' => function ($action, $model, $key) {
                            if ($action === 'shipment') {
                                return Url::to(['shipment/index', 'bufferId' => $key]);
                            }
                            return Url::to([$action, 'id' => $key]);
                        },
                        'buttons' => [
                            'shipment' => function ($url) {
                                return Html::a(
                                    '<i class="fa fa-envelope"></i>',
                                    $url,
                                    [
                                        'title' => Module::t('poczta-polska', 'Shipments'),
                                        'aria-label' => Module::t('poczta-polska', 'Shipments'),
                                        'data-pjax' => '0',
                                        'class' => 'btn btn-xs btn-primary',
                                    ]
                                );
                            },
                        ],
                        'contentOptions' => ['style' => 'white-space:nowrap;'],
                        'headerOptions' => ['style' => 'width:1%'],
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
