<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @property ShipmentAddress $model
 */
class AddressDetailWidget extends Widget {
	public const DEFAULT_HEADING_TAG = 'h4';

	public array $tableOptions = [];
	public array $attributes = [];
	public array $headingOptions = [];
	public string $headingTag = self::DEFAULT_HEADING_TAG;

	public ?string $role = null;
	public ShipmentAddress $model;

	public function init(): void {
		if ($this->role === null) {
			$this->role = Yii::t('postal', 'Address');
		}

		if (empty($this->tableOptions)) {
			$this->tableOptions = $this->defaultTableOptions();
		}

		if (empty($this->attributes)) {
			$this->attributes = $this->defaultAttributes();
		}
		parent::init();
	}

	public function run(): string
	{
		$heading = Html::tag($this->headingTag, Html::encode($this->role), $this->headingOptions);

		$table = DetailView::widget([
			'model' => $this->model,
			'options' => $this->tableOptions,
			'attributes' => $this->attributes,
		]);

		return $heading . $table;
	}

	public function defaultTableOptions(): array {
		return [
			'class' => 'table table-striped table-bordered detail-view',
			'style' => 'table-layout:fixed;width:100%;',
		];
	}

	public function defaultAttributes(): array
	{
		$attrs = [
			[
				'attribute' => 'name',
				'label' => Module::t('postal', 'Name'),
				'value' => $this->model->name,
				'format' => 'text',
			],
			[
				'attribute' => 'postal_code',
				'label' => Module::t('postal', 'Postal Code'),
				'value' => $this->model->postal_code,
				'format' => 'text',
			],
			[
				'attribute' => 'city',
				'label' => Module::t('postal', 'City'),
				'value' => $this->model->city,
				'format' => 'text',
			],
			[
				'attribute' => 'street',
				'label' => Module::t('postal', 'Street'),
				'value' => $this->model->street,
				'visible' => isset($this->model->street),
				'format' => 'text',
			],
			[
				'attribute' => 'house_number',
				'label' => Module::t('postal', 'House Number'),
				'value' => $this->model->house_number,
				'format' => 'text',
			],
			[
				'attribute' => 'apartment_number',
				'label' => Module::t('postal', 'Apartment Number'),
				'value' => $this->model->apartment_number,
				'format' => 'text',
				'visible' => isset($this->model->apartment_number),
			],
		];

		foreach ($attrs as &$attr) {
			$attr['captionOptions'] = ['style' => 'width:50%;'];
			$attr['contentOptions'] = ['style' => 'width:50%;word-wrap:break-word;'];
		}

		return $attrs;
	}
}
