<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\models\search;

use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\EnvelopeRepository;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\EnvelopeStatusType;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\BuforType;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\EnvelopeInfoType;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\data\ArrayDataProvider;

class EnvelopeSearch extends Model
{
    public const SCENARIO_BUFFER = 'buffer';
    public const STATUS_BUFFER = 'buffer';
    public const STATUS_SENT = 'sent';
    public const STATUS_RECEIVED = 'received';
    public const STATUS_ARCHIVE = 'archive';
    public const STATUS_DELETED = 'deleted';
    public string $status;

    public string $startDate = '';
    public string $endDate = '';

    public ?string $name = null;

    public ?bool $active = null;

    private EnvelopeRepository $repository;


    public function __construct(EnvelopeRepository $repository, string $status, array $config = [])
    {
        $this->repository = $repository;
        $this->status = $status;
        parent::__construct($config);
    }


    public function init(): void
    {
        parent::init();
        if ($this->status === static::SCENARIO_BUFFER) {
            $this->setScenario(self::SCENARIO_BUFFER);
        }
    }

    public function rules(): array
    {
        return [
            ['status', 'required'],
            [['startDate', 'endDate'], 'required', 'except' => static::SCENARIO_BUFFER],
            [['active'], 'boolean'],
            [['name'], 'string'],
            ['status', 'in', 'range' => array_keys(static::getStatusNames())],
        ];
    }


    /**
     * @throws InvalidConfigException
     */
    public function search(array $data = []): ArrayDataProvider
    {
        $dataProvider = new ArrayDataProvider([
            'key' => static function (BuforType|EnvelopeInfoType $model) {
                if ($model instanceof BuforType) {
                    return $model->getIdBufor();
                }
                return $model->getIdEnvelope();
            },
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        $this->load($data);

        if (!$this->validate()) {
            return $dataProvider;
        }

        if ($this->status === self::STATUS_BUFFER) {
            $models = $this->repository->getBuffersList();
            if ($this->active !== null) {
                $filtered = filter_var($this->active, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
                $models = array_values(array_filter($models, static fn(BuforType $buffer) =>
                    $buffer->getActive() === $filtered
                ));
            }
        } else {
            $models = $this->repository->getList($this->startDate, $this->endDate);
            $models = $this->filterStatus($models);
        }

        if ($this->name !== null) {
            $first = reset($models);
            if ($first instanceof BuforType) {
                $models = $this->filterName($models);
            }
        }

        $dataProvider->allModels = $models;

        return $dataProvider;
    }

    /**
     * @param EnvelopeInfoType[] $models
     * @return EnvelopeInfoType[]
     */
    protected function filterStatus(array $models): array
    {
        return array_filter($models, function (EnvelopeInfoType $model) {
            switch ($this->status) {
                case static::STATUS_SENT:
                    return $model->getEnvelopeStatus() === EnvelopeStatusType::VALUE_WYSLANY;
                case static::STATUS_RECEIVED:
                    return $model->getEnvelopeStatus() === EnvelopeStatusType::VALUE_DOSTARCZONY;
                default:
                    return false;
            }
        });
    }

    protected function filterName(array $models): array
    {
        $name_X = $this->name;
        return array_filter($models,
            static function(BuforType $model) use ($name_X) {
                $name = $model->getOpis();
                return $name !== null && mb_stripos($name, $name_X) !== false;
            });
    }

    public function getStatusName(): string
    {
        return static::getStatusNames()[$this->status];
    }

    public function isBuffer(): bool
    {
        return $this->status === static::STATUS_BUFFER;
    }


    public static function getStatusNames(): array
    {
        return [
            static::STATUS_BUFFER => Module::t('poczta-polska', 'Enevelope - Buffer'),
            static::STATUS_SENT => Module::t('poczta-polska', 'Enevelope - Sent'),
            static::STATUS_RECEIVED => Module::t('poczta-polska', 'Enevelope - Received'),
            //   static::STATUS_ARCHIVE => Module::t('poczta-polska', 'Enevelope - Archive'),
            //  static::STATUS_DELETED => Module::t('poczta-polska', 'Enevelope - Deleted'),
        ];
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
