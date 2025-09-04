<?php

namespace XOzymandias\Yii2Postal\models\query;

use XOzymandias\Yii2Postal\models\ShipmentAddress;
use yii\db\ActiveQuery;
use yii\db\Expression;

/**
 * @see ShipmentAddress
 */
class ShipmentAddressQuery extends ActiveQuery
{
    public function withName(string $name): self
    {
        [$table, $alias] = $this->getTableNameAndAlias();
        $this->andWhere([
            'like',
            new Expression("CONCAT_WS(' ', $alias.name, $alias.name_2)"),
            $name
        ]);
        return $this;
    }

    public function withLocation(string $location): self
    {
        [$table, $alias] = $this->getTableNameAndAlias();

        $elements = preg_split('/\s+/', trim(str_replace('-', '', $location)));
        if (!$elements) {
            return $this;
        }

        foreach ($elements as $element) {
            $this->andWhere(['or',
                ['like', new Expression("REPLACE($alias.postal_code, '-', '')"), $element],
                ['like', "$alias.city", $element],
                ['like', "$alias.street", $element],
                ['like', "$alias.house_number", $element],
                ['like', "$alias.apartment_number", $element],
            ]);
        }

        return $this;
    }


    public function filterByFullAddress(string $fullAddress): self
    {
        [$table, $alias] = $this->getTableNameAndAlias();

        $elements = preg_split('/\s+/', trim(str_replace('-', '', $fullAddress)));
        if (!$elements) {
            return $this;
        }

        foreach ($elements as $element) {
            $this->andWhere(['or',
                ['like', "$alias.name", $element],
                ['like', "$alias.name_2", $element],
                ['like', new Expression("REPLACE($alias.postal_code, '-', '')"), $element],
                ['like', "$alias.city", $element],
                ['like', "$alias.street", $element],
                ['like', "$alias.house_number", $element],
                ['like', "$alias.apartment_number", $element],
            ]);
        }

        return $this;
    }


    public function defaultInDirection(bool $withBoth = true): self
    {
        $values = [ShipmentAddress::ROLE_RECEIVER];
        if ($withBoth) {
            $values[] = ShipmentAddress::ROLE_BOTH;
        };

        $this->andWhere(['in', 'default_role', $values]);

        return $this;
    }

    public function defaultOutDirection(bool $withBoth = true): self
    {
        $values = [ShipmentAddress::ROLE_SENDER];
        if ($withBoth) {
            $values[] = ShipmentAddress::ROLE_BOTH;
        };

        $this->andWhere(['in', 'default_role', $values]);

        return $this;
    }

    public function byRole(string $role): self
    {

        if ($role === ShipmentAddress::ROLE_BOTH) {
            $this->andWhere(['default_role' => ShipmentAddress::ROLE_BOTH]);
            return $this;
        }

        $this->andWhere(['in', 'default_role', [$role, ShipmentAddress::ROLE_BOTH]]);
        return $this;
    }

    /**
     * {@inheritdoc }
     * @param $db
     * @return []|ShipmentAddress[]
     */
    public
    function all($db = null): array
    {
        return parent::all($db);
    }

    /**
     *  {@inheritdoc }
     * @param $db
     * @return []|ShipmentAddress
     */
    public
    function one($db = null)
    {
        return parent::one($db);
    }
}
