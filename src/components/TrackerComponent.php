<?php

namespace XOzymandias\Yii2Postal\components;

use RuntimeException;
use XOzymandias\Yii2Postal\models\ShipmentProviderInterface;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTrackerClient;
use Yii;
use yii\base\Component;

class TrackerComponent extends Component{
	private array $cacheTrackers = [];
	public ?string $language = null;

	public function init(): void {
		parent::init();

		if ($this->language === null) {
			$this->language = Yii::$app->language;
		}
	}

	public function getTracker(string $provider): ShipmentTrackerInterface {
		if (empty($this->cacheTrackers[$provider])) {
			$this->cacheTrackers[$provider] = match ($provider) {
				ShipmentProviderInterface::PROVIDER_POCZTA_POLSKA => new PocztaPolskaTracker(new PocztaPolskaTrackerClient()),
				default => throw new RuntimeException("Unknown provider: $provider"),
			};

			$this->cacheTrackers[$provider]->setLanguage($this->language);
		}
		return $this->cacheTrackers[$provider];
	}
}