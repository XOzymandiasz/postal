<?php

namespace XOzymandias\Yii2Postal\widgets;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use Yii;
use yii\base\InvalidConfigException;
use yii\widgets\DetailView;

/**
 * @property ShipmentAddress $model
 */
class AddressDetailView extends DetailView
{
	public ?string $role = null;

	public function init(): void {
		if (!$this->model instanceof ShipmentAddress) {
			throw new InvalidConfigException(sprintf(
				'Property "model" must be an instance of %s, %s given.',
				ShipmentAddress::class,
				is_object($this->model) ? get_class($this->model) : gettype($this->model)
			));
		}

		if ($this->role === null) {
			$this->role = Yii::t('postal', 'Address');
		}

		if (empty($this->options)) {
			$this->options = $this->defaultOptions();
		}

		if (empty($this->attributes)) {
			$this->attributes = $this->defaultAttributes();
		}
		parent::init();
	}

	public function defaultOptions(): array {
		return [
			'class' => 'table table-striped table-bordered detail-view',
			'style' => 'table-layout:fixed;width:100%;',
		];
	}

	public function defaultAttributes(): array
	{
		$attrs = [
			[
				'label' => Module::t('postal', 'Role'),
				'value' => $this->role,
				'format' => 'text',
			],
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
