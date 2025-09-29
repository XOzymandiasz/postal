<?php

namespace XOzymandias\Yii2Postal\forms;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use XOzymandias\Yii2Postal\Module;
use yii\base\Model;
use yii\db\Exception;

class AddressForm extends Model
{
    public const DEFAULT_COUNTRY = 'PL';

    public string $name = '';
    public string $postal_code = '';
    public string $city = '';
    public bool $isSender = false;
    public bool $isReceiver = false;
    public ?string $street = null;
    public ?string $name_2 = null;
    public ?string $house_number = null;
    public ?string $apartment_number = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $mobile = null;
    public ?string $contact_person = null;
    public ?string $taxID = null;
    public string $country = self::DEFAULT_COUNTRY;
    public ?string $default_role = null;
    private ?ShipmentAddress $model = null;

    public function rules(): array
    {
        return [
            [['name', 'city', 'postal_code', 'house_number'], 'required'],
            [['isSender', 'isReceiver'], 'boolean'],
            [['name', 'name_2'], 'string', 'max' => 100],
            [['phone', 'mobile', 'contact_person'], 'string', 'max' => 15],
            [['email'], 'string', 'min' => 5, 'max' => 320],
            [['taxID'], 'string', 'max' => 15],
            [['house_number'], 'string', 'max' => 20],
            [['street', 'city'], 'string', 'max' => 60],
            [['country'], 'string', 'max' => 2],
            [['apartment_number', 'postal_code'], 'string', 'max' => 10],
            ['email', 'email'],
            [['default_role'], 'in', 'range' => array_keys($this->getRolesNames())],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'name' => Module::t('postal', 'Name'),
            'name_2' => Module::t('postal', 'Secondary Name'),
            'street' => Module::t('postal', 'Street'),
            'house_number' => Module::t('postal', 'House Number'),
            'apartment_number' => Module::t('postal', 'Apartment Number'),
            'city' => Module::t('postal', 'City'),
            'postal_code' => Module::t('postal', 'Postal Code'),
            'country' => Module::t('postal', 'Country'),
            'phone' => Module::t('postal', 'Phone'),
            'email' => Module::t('postal', 'Email'),
            'mobile' => Module::t('postal', 'Mobile'),
            'contact_person' => Module::t('postal', 'Contact Person'),
            'taxID' => Module::t('postal', 'Tax ID'),
            'isReceiver' => Module::t('postal', 'Is Receiver'),
            'isSender' => Module::t('postal', 'Is Sender'),
        ];
    }

    /**
     * @throws Exception
     */
    public function save(bool $validate = true): bool
    {
        if ($validate && !$this->validate()) {
            return false;
        }

        $model = $this->getModel();

        $model->name = $this->name;
        $model->street = $this->street;
        $model->postal_code = $this->postal_code;
        $model->house_number = $this->house_number;
        $model->apartment_number = $this->apartment_number;
        $model->city = $this->city;
        $model->name_2 = $this->name_2;
        $model->country = $this->country;
        $model->phone = $this->phone;
        $model->email = $this->email;
        $model->mobile = $this->mobile;
        $model->contact_person = $this->contact_person;
        $model->taxID = $this->taxID;

        if ($this->isSender && $this->isReceiver) {
            $model->default_role = ShipmentAddress::ROLE_BOTH;
        }
        elseif ($this->isSender) {
            $model->default_role = ShipmentAddress::ROLE_SENDER;
        }
        elseif ($this->isReceiver) {
            $model->default_role = ShipmentAddress::ROLE_RECEIVER;
        }

        return $model->save(false);
    }

    public function setModel(ShipmentAddress $model): void
    {
        $this->model = $model;
        $this->name = $model->name;
        $this->street = $model->street;
        $this->postal_code = $model->postal_code;
        $this->house_number = $model->house_number;
        $this->apartment_number = $model->apartment_number;
        $this->city = $model->city;
        $this->name_2 = $model->name_2;
        $this->country = $model->country;
        $this->phone = $model->phone;
        $this->email = $model->email;
        $this->mobile = $model->mobile;
        $this->contact_person = $model->contact_person;
        $this->taxID = $model->taxID;
        $this->default_role = $model->default_role;
    }

    public function getModel(): ShipmentAddress
    {
        if ($this->model === null) {
            $this->model = new ShipmentAddress();
        }
        return $this->model;
    }

    public function getRole(): string
    {
        return $this->model ? $this->model->getRole() : '';
    }

    public function getRoleName(): string
    {
        return $this->model ? $this->model->getRoleName() : '';
    }

    public static function getRolesNames(): array
    {
        return ShipmentAddress::getRolesNames();
    }
}
