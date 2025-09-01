<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null;
    /**
     * Constructor method for updateShopEZwroty
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop
     * @uses UpdateShopEZwroty::setShop()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null)
    {
        $this
            ->setShop($shop);
    }
    /**
     * Get shop value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType|null
     */
    public function getShop(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType
    {
        return $this->shop;
    }
    /**
     * Set shop value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop
     * @return \XOzymandias\Yii2Postal\sender\StructType\UpdateShopEZwroty
     */
    public function setShop(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
