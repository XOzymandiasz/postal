<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaFullType extends AbstractStructBase
{
    /**
     * The przesylkaShort
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $przesylkaShort = null;
    /**
     * The przesylkaFull
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $przesylkaFull = null;
    /**
     * Constructor method for przesylkaFullType
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $przesylkaShort
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $przesylkaFull
     *@uses PrzesylkaFullType::setPrzesylkaShort()
     * @uses PrzesylkaFullType::setPrzesylkaFull()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $przesylkaShort = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $przesylkaFull = null)
    {
        $this
            ->setPrzesylkaShort($przesylkaShort)
            ->setPrzesylkaFull($przesylkaFull);
    }
    /**
     * Get przesylkaShort value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType|null
     */
    public function getPrzesylkaShort(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType
    {
        return $this->przesylkaShort;
    }
    /**
     * Set przesylkaShort value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $przesylkaShort
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaShort(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaShortType $przesylkaShort = null): self
    {
        $this->przesylkaShort = $przesylkaShort;
        
        return $this;
    }
    /**
     * Get przesylkaFull value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType|null
     */
    public function getPrzesylkaFull(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType
    {
        return $this->przesylkaFull;
    }
    /**
     * Set przesylkaFull value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $przesylkaFull
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrzesylkaFullType
     */
    public function setPrzesylkaFull(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $przesylkaFull = null): self
    {
        $this->przesylkaFull = $przesylkaFull;
        
        return $this;
    }
}
