<?php

namespace XOzymandias\Yii2Postal\controllers;

use XOzymandias\Yii2Postal\forms\AddressForm;
use XOzymandias\Yii2Postal\models\search\ShipmentAddressPostSearch;
use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use Throwable;
use yii\db\Exception;
use yii\db\StaleObjectException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @property Module $module
 */
class ShipmentAddressController extends Controller
{
    public function behaviors(): array
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['create', 'update', 'delete'],
                    'rules' => [
                        [
                            'actions' => ['create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                        ]
                    ],
                ]
            ]
        );
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        $searchModel = new ShipmentAddressPostSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @throws NotFoundHttpException
     */
    public function actionView(int $id): string
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * @throws Exception
     */
    public function actionCreate(?string $direction = null): Response|string
    {
        $model = new AddressForm();

        if ($model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->getModel()->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * @throws Exception
     * @throws NotFoundHttpException
     */
    public function actionUpdate(int $id): Response|string
    {
        $model = new AddressForm();
        $model->setModel($this->findModel($id));

        if ($model->default_role = ShipmentAddress::ROLE_BOTH){
            $model->isSender = $model->isReceiver = true;
        } elseif ($model->default_role = ShipmentAddress::ROLE_SENDER){
            $model->isSender = true;
        } elseif ($model->default_role = ShipmentAddress::ROLE_RECEIVER){
            $model->isReceiver = true;
        }

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->getModel()->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * @throws StaleObjectException
     * @throws Throwable
     * @throws NotFoundHttpException
     */
    public function actionDelete(int $id): Response
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionList(?string $query = null, ?string $role = null, int $id = 0): Response
    {
        $data = ['result' => []];

        if ($query !== null && strlen($query) >= $this->minLengthAddressListQuery) {
            $models = ShipmentAddress::find()
                ->filterByFullAddress($query)
                ->all();
            $address = [];
            foreach ($models as $model) {
                $address[] = $this->parseAddress($model);
            }
            $data['result'] = $address;
        } elseif ($id > 0) {
            $model = ShipmentAddress::find()
                ->where(['id' => $id])
                ->one();

            if ($model) {
                $data['result'] = $this->parseAddress($model);
            }
        } elseif ($role !== null) {
            $models = [];
            if ($role === ShipmentAddress::ROLE_SENDER) {
                $models = ShipmentAddress::find()
                    ->defaultOutDirection()
                    ->all();
            } elseif ($role === ShipmentAddress::ROLE_RECEIVER) {
                $models = ShipmentAddress::find()
                    ->defaultInDirection()
                    ->all();
            }

            $address = [];
            foreach ($models as $model) {
                $address[] = $this->parseAddress($model);
            }
            $data['result'] = $address;
        }

        return $this->asJson($data);
    }

    /**
     * @throws NotFoundHttpException
     */
    protected function findModel($id): ?ShipmentAddress
    {
        if (($model = ShipmentAddress::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Module::t('postal', 'The requested page does not exist.'));
    }

    protected function parseAddress(ShipmentAddress $model): array
    {
        return [
            'id' => $model->id,
            'text' => $model->getFullInfo(),
        ];
    }


}
