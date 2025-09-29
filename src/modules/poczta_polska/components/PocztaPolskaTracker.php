<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\components;

use XOzymandias\Yii2Postal\models\Shipment;
use XOzymandias\Yii2Postal\modules\poczta_polska\entities\Mail;
use Yii;
use yii\base\Component;

class PocztaPolskaTracker extends Component implements ShipmentTrackerInterface
{

    public bool $addPostInfo = true;
    public ?string $language = null;

    private ?PocztaPolskaTrackerClient $client;


    public function __construct(PocztaPolskaTrackerClient $client, array $config = [])
    {
        $this->client = $client;
        parent::__construct($config);
    }

    public function init(): void
    {
        parent::init();
        if ($this->language === null) {
            $this->language = Yii::$app->language;
        }
    }

    public function externalTrackingUrl(string $number): string {
        return $this->client->trackingUrl . $number;
    }

    public function checkShipment(string $number): ?ShipmentInterface
    {
        return $this->checkMail($number);
    }

	public function checkMail(string $number): ?Mail {
		$data = $this->getMailData($number, $this->language = null);

		if (empty($data)) {
			return null;
		}

		$mail = $this->createMail($data);
		switch ($mail->mailStatus) {
			case Mail::STATUS_FOUND_MANY:
				Yii::warning('Find many mails for number: ' . $number, __METHOD__);
				break;
			case Mail::STATUS_NOT_FOUND:
				Yii::warning('Not found any mails for number: ' . $number, __METHOD__);
				break;
			case Mail::STATUS_NUMBER_MISSING:
				Yii::warning('Missing number', __METHOD__);
		}
		return $mail;
	}


    public function updateModel(Shipment $model): void
    {
        $data = $this->getMailData($model->shipment);
        if (!empty($data)) {
            $mail = $this->createMail($data);
            $model->updateAttributes([
                'shipment_at' => $mail->getShipmentAt(),
                'finished_at' => $mail->getFinishedAt(),
                'api_data' => $data,
            ]);
        }
    }


    protected function getMailData(string $number, string $language = null): ?array
    {
        return $this->client->checkMailex($number, $this->addPostInfo, $language);

    }

    protected function createMail(array $data): Mail
    {
        return new Mail($data);
    }


}
