<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lokalizacjaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LokalizacjaGeograficznaType extends AbstractStructBase
{
    /**
     * The dlugosc
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null;
    /**
     * The szerokosc
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null;
    /**
     * Constructor method for lokalizacjaGeograficznaType
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $szerokosc
     *@uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }
    /**
     * Get dlugosc value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType|null
     */
    public function getDlugosc(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }
    /**
     * Set dlugosc value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $dlugosc
     * @return \XOzymandias\Yii2Postal\sender\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $dlugosc = null): self
    {
        $this->dlugosc = $dlugosc;
        
        return $this;
    }
    /**
     * Get szerokosc value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType|null
     */
    public function getSzerokosc(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }
    /**
     * Set szerokosc value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $szerokosc
     * @return \XOzymandias\Yii2Postal\sender\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WspolrzednaGeograficznaType $szerokosc = null): self
    {
        $this->szerokosc = $szerokosc;
        
        return $this;
    }
}
