<?php

namespace XOzymandias\Yii2Postal\models\search;

use XOzymandias\Yii2Postal\models\query\ShipmentAddressQuery;
use XOzymandias\Yii2Postal\models\query\ShipmentQuery;
use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\models\ShipmentContent;
use XOzymandias\Yii2Postal\Module;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * ShipmentPostSearch represents the model behind the search form of `XOzymandias\Yii2Postal\models\Shipment`.
 */
class ShipmentPostSearch extends Shipment
{
    public const SCENARIO_CREATOR = 'creator';
    public ?string $senderName = null;
    public ?string $receiverName = null;
    public ?string $senderAddress = null;
    public ?string $receiverAddress = null;

	public ?string $createdAtFrom = null;
	public ?string $createdAtTo = null;

	public bool $noNumber = false;

    public static function getDirectionsNames(): array
    {
        return Shipment::getDirectionsNames();
    }

    public static function getProvidersNames(): array
    {
        return Shipment::getProvidersNames();
    }

    public static function getContentsNames(): array
    {
        return ArrayHelper::map(
            ShipmentContent::find()->andWhere([
                'id' => Shipment::find()
                    ->select('content_id')
                    ->distinct()
            ])
                ->asArray()
                ->all(),
            'id',
            'name'
        );
    }

    public static function getCreatorsNames(): array #todo:
    {
        return ArrayHelper::map(
            ShipmentContent::find()->andWhere([
                'id' => Shipment::find()
                    ->select('content_id')
                    ->distinct()
            ])
                ->asArray()
                ->all(),
            'id',
            'name'
        );
    }

    public function rules(): array
    {
        return [
            [['id', 'content_id', 'creator_id', 'buffer_id'], 'integer'],
            ['!creator_id', 'integer', 'on' => static::SCENARIO_CREATOR],
            [['senderName', 'receiverName', 'senderAddress', 'receiverAddress'], 'trim'],
            [['senderName', 'receiverName', 'senderAddress', 'receiverAddress', 'direction', 'number', 'provider',
                'created_at', 'updated_at', 'guid', 'buffer_id', 'finished_at', 'shipment_at', 'api_data'], 'safe'],
			[['createdAtFrom', 'createdAtTo'], 'string'],
			[['noNumber'], 'boolean'],
        ];
    }

	public function attributeLabels(): array {
		return [
			'noNumber' => Module::t('postal', 'No Number'),
			'createdAtFrom' => Module::t('postal', 'From'),
			'createdAtTo' => Module::t('postal', 'To'),
			'sender_name' => Module::t('postal', 'Sender Name'),
			'receiver_name' => Module::t('postal', 'Receiver Name'),
			'sender_address' => Module::t('postal', 'Sender Address'),
			'receiver_address' => Module::t('postal', 'Receiver Address'),
		];
	}

    public function scenarios(): array
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search(array $params, string $formName = null): ActiveDataProvider
    {
        $query = Shipment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'content_id' => $this->content_id,
            'creator_id' => $this->creator_id,
            'buffer_id' => $this->buffer_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'finished_at' => $this->finished_at,
            'shipment_at' => $this->shipment_at,
        ]);

        $query->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'provider', $this->provider])
            ->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'api_data', $this->api_data]);

		$this->applyCreatedAtFilter($query);
		$this->applyNoNumberFilter($query);

        $this->applyReceiverNameFilter($query);
        $this->applySenderNameFilter($query);
        $this->applySenderAddressFilter($query);
        $this->applyReceiverAddressFilter($query);

        return $dataProvider;
    }

	protected function applyNoNumberFilter(ShipmentQuery $query): void{
		if($this->noNumber){
			$query->andWhere(['or', ['number' => null], ['number' => '']]);
		}
	}

	protected function applyCreatedAtFilter(ShipmentQuery $query): void{
		if (!empty($this->createdAtFrom) && !empty($this->createdAtTo)) {
			$query->andFilterWhere(['between', 'created_at', $this->createdAtFrom, $this->createdAtTo]);
		}elseif (!empty($this->createdAtFrom)) {
			$query->andFilterWhere(['>=', 'created_at', $this->createdAtFrom]);
		}
		elseif (!empty($this->createdAtTo)) {
			$query->andFilterWhere(['<=', 'created_at', $this->createdAtTo]);
		}
	}

    protected function applySenderNameFilter(ShipmentQuery $query): void
    {
        if (!empty($this->senderName)) {
            $query->joinWith(['senderAddress SA' =>
                function (ShipmentAddressQuery $query) {
                    $query->withName($this->senderName);
            }]);
        }
    }

    protected function applyReceiverNameFilter(ShipmentQuery $query): void
    {
        if (!empty($this->receiverName)) {
            $query->joinWith(['receiverAddress RA' =>
                function (ShipmentAddressQuery $query) {
                    $query->withName($this->receiverName);
            }]);
        }
    }

    protected function applySenderAddressFilter(ShipmentQuery $query): void
    {
        if (!empty($this->senderAddress)) {
            $query->joinWith(['senderAddress SA' =>
                function (ShipmentAddressQuery $query) {
                    $query->withLocation($this->senderAddress);
                }]);
        }
    }

    protected function applyReceiverAddressFilter(ShipmentQuery $query): void
    {
        if (!empty($this->receiverAddress)) {
            $query->joinWith(['receiverAddress RA' =>
                function (ShipmentAddressQuery $query) {
                    $query->withLocation($this->receiverAddress);
                }]);
        }
    }

    public function isCreatorScenario(): bool
    {
        return $this->scenario === static::SCENARIO_CREATOR;
    }

}
