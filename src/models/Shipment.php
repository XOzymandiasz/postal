<?php

namespace XOzymandias\Yii2Postal\models;

use Exception;
use XOzymandias\Yii2Postal\models\query\ShipmentQuery;
use XOzymandias\Yii2Postal\Module;
use XOzymandias\Yii2Postal\ModuleEnsureTrait;
use XOzymandias\Yii2Postal\modules\poczta_polska\entities\Mail;
use Yii;
use yii\base\InvalidCallException;
use yii\base\InvalidConfigException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "shipment".
 *
 * @property int $id
 * @property string $direction
 * @property string $provider
 * @property int $content_id
 * @property int $creator_id
 * @property string $created_at
 * @property string $updated_at
 * @property string|null $number
 * @property string|null $guid
 * @property int|null $buffer_id
 * @property string|null $finished_at
 * @property string|null $shipment_at
 * @property string|null $api_data
 *
 * @property ShipmentAddress $senderAddress
 * @property ShipmentAddress $receiverAddress
 * @property ShipmentAddressLink[] $addressLinks
 * @property ShipmentAddress[] $addresses
 * @property ShipmentContent $content
 * @property-read IdentityInterface $creator
 * @property-read string $directionName
 * @property-read string $contentName
 * @property-read string $providerName
 */
class Shipment extends ActiveRecord implements ShipmentDirectionInterface, ShipmentProviderInterface
{
    use ModuleEnsureTrait;

    public function behaviors(): array
    {
        return [
            'timestampBehavior' => [
                'class' => TimestampBehavior::class,
                'value' => new Expression('NOW()')
            ]
        ];
    }

    public static function tableName(): string
    {
        return '{{%shipment}}';
    }

    /**
     * @throws InvalidConfigException
     */
    public function getRelated(string $class): ActiveQuery
    {
        /**
         * @var ActiveRecord $class
         */
        $primaryKey = $class::primaryKey()[0];
        return $this->hasMany($class, [$primaryKey => 'entity_id'])
            ->viaTable(static::ensureModule()->shipmentRelation->getRelatedTableName($class), ['shipment_id' => $primaryKey]);
    }

    /**
     * @throws InvalidConfigException
     */
    public function saveAllowedRelated(string $class, string $refId): void
    {
        if ($this->getIsNewRecord()) {
            throw new InvalidCallException('Unable to link models: the models being linked cannot be newly created.');
        }
        static::ensureModule()->shipmentRelation->saveShipmentRelation($this->id, $class, $refId);
    }


    public function getSenderAddress(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id'])
            ->via('senderAddressLink');
    }

    public function getSenderAddressLink(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddressLink::class, ['shipment_id' => 'id'])
            ->andOnCondition(['SAL.type' => ShipmentDirectionInterface::DIRECTION_IN])
            ->alias('SAL');
    }

    public function getReceiverAddress(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddress::class, ['id' => 'address_id'])
            ->via('receiverAddressLink');
    }

    public function getReceiverAddressLink(): ActiveQuery
    {
        return $this->hasOne(ShipmentAddressLink::class, ['shipment_id' => 'id'])
            ->andOnCondition(['RAL.type' => ShipmentDirectionInterface::DIRECTION_OUT])
            ->alias('RAL');
    }

    /**
     * @throws InvalidConfigException
     */
    public function getAddresses(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddress::class, ['id' => 'address_id'])
            ->viaTable('{{%shipment_address_link}}', ['shipment_id' => 'id']);
    }

    public function getAddressLinks(): ActiveQuery
    {
        return $this->hasMany(ShipmentAddressLink::class, ['shipment_id' => 'id'])->indexBy('type');
    }

    public function getCreator(): ActiveQuery
    {
        $module = static::ensureModule();
        /**
         * @var ActiveRecord $userClass
         */
        $userClass = $module->shipmentRelation->userClass;
        return $this->hasOne($module->shipmentRelation->userClass, [
            'creator_id' => $userClass::primaryKey()[0]
        ]);
    }

    public function getContent(): ActiveQuery
    {
        return $this->hasOne(ShipmentContent::class, ['id' => 'content_id']);
    }


    public static function getAddressesNames(): array
    {
        $models = ShipmentAddress::find()->all();

        return ArrayHelper::map($models, 'id', function ($model) {
            return $model->getFullInfo();
        });
    }

    public function getMail(): ?Mail
    {
        if (empty($this->api_data)) {
            return null;
        }

        $data = is_string($this->api_data) ? Json::decode($this->api_data) : $this->api_data;


        try {
            return new Mail($data);
        }
        catch (Exception $e) {
            Yii::error(['mail_build_failed' => $data, 'e' => $e->getMessage()], __METHOD__);
            return null;
        }
    }

    public function setMail(?Mail $mail): void
    {
        $this->shipment_at = null;
        $this->finished_at = null;
        if ($mail === null) {
            $this->api_data = null;
            return;
        }
        $this->number = $mail->getShipmentNumber();
        $this->api_data = serialize($mail);

        if ($mail->isFound()) {
            $this->shipment_at = $mail->getShipmentAt();
            $this->finished_at = $mail->getFinishedAt();
        }
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function isFinished(): bool
    {
        return !empty($this->finished_at);
    }

    public function isSent(): bool
    {
        return !empty($this->shipment_at);
    }

    public function getIsOutDirection(): bool
    {
        return $this->getDirection() === ShipmentDirectionInterface::DIRECTION_OUT;

    }

    public function getIsInDirection(): bool
    {
        return $this->getDirection() === ShipmentDirectionInterface::DIRECTION_IN;
    }

    public function getDirectionName(): string
    {
        return static::getDirectionsNames()[$this->direction];
    }

    public static function getDirectionsNames(): array
    {
        return [
            static::DIRECTION_OUT => Module::t('postal', 'Out'),
            static::DIRECTION_IN => Module::t('postal', 'In'),
        ];
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function getProviderName(): string
    {
        return static::getProvidersNames()[$this->provider];
    }

    public static function getProvidersNames(): array
    {
        return [
            static::PROVIDER_POCZTA_POLSKA => Module::t('postal', 'Poczta Polska'),
            static::PROVIDER_POCZTEX_2021 => Module::t('postal', 'Pocztex2021'),
            static::PROVIDER_DHL => Module::t('postal', 'DHL'),
            static::PROVIDER_DPD => Module::t('postal', 'DPD'),
            static::PROVIDER_GLS => Module::t('postal', 'GLS'),
            static::PROVIDER_INPOST => Module::t('postal', 'Inpost'),
            static::PROVIDER_FEDEX => Module::t('postal', 'Fedex'),
            static::PROVIDER_UPS => Module::t('postal', 'UPS'),
        ];
    }

    public static function find(): ShipmentQuery
    {
        return new ShipmentQuery(static::class);
    }
}
