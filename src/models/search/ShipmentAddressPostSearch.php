<?php

namespace XOzymandias\Yii2Postal\models\search;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ShipmentAddressPostSearch represents the model behind the search form of `XOzymandias\Yii2Postal\models\ShipmentAddress`.
 */
class ShipmentAddressPostSearch extends ShipmentAddress
{

	private ?string $formName = null;
    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id'], 'integer'],
            ['default_role', 'in', 'range' => array_keys($this->optionList())],
			[['name', 'name_2'], 'string', 'max' => 100],
			[['house_number'], 'string', 'max' => 20],
			[['street', 'city'], 'string', 'max' => 60],
			[['apartment_number', 'postal_code'], 'string', 'max' => 10],
            [['default_role', 'name', 'street', 'house_number', 'apartment_number', 'postal_code', 'city', 'country', 'phone', 'email'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios(): array
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

	public function setFormName(string $formName): void
	{
		$this->formName = $formName;
	}
	public function formName(): string
	{
		if ($this->formName !== null) {
			return $this->formName;
		}

		return parent::formName();
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
        $query = ShipmentAddress::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'default_role' => $this->default_role,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'house_number', $this->house_number])
            ->andFilterWhere(['like', 'apartment_number', $this->apartment_number])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'email', $this->email]);



        return $dataProvider;
    }

    public static function optionList(): array
    {
        return ShipmentAddress::getRolesNames();
    }
}
