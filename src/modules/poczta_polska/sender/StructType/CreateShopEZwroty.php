<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createShopEZwroty StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateShopEZwroty extends AbstractStructBase
{
    /**
     * The shop
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null;
    /**
     * Constructor method for createShopEZwroty
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop
     * @uses CreateShopEZwroty::setShop()
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateShopEZwroty
     */
    public function setShop(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ShopEZwrotyType $shop = null): self
    {
        $this->shop = $shop;
        
        return $this;
    }
}
