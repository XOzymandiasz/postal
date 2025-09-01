<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EPOInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EPOInfoType extends AbstractStructBase
{
    /**
     * The awizoPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null;
    /**
     * The doreczeniePrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null;
    /**
     * The zwrotPrzesylki
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null;
    /**
     * Constructor method for EPOInfoType
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     *@uses EPOInfoType::setAwizoPrzesylki()
     * @uses EPOInfoType::setDoreczeniePrzesylki()
     * @uses EPOInfoType::setZwrotPrzesylki()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this
            ->setAwizoPrzesylki($awizoPrzesylki)
            ->setDoreczeniePrzesylki($doreczeniePrzesylki)
            ->setZwrotPrzesylki($zwrotPrzesylki);
    }
    /**
     * Get awizoPrzesylki value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType|null
     */
    public function getAwizoPrzesylki(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType
    {
        return $this->awizoPrzesylki;
    }
    /**
     * Set awizoPrzesylki value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki
     * @return \XOzymandias\Yii2Postal\sender\StructType\EPOInfoType
     */
    public function setAwizoPrzesylki(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AwizoPrzesylkiType $awizoPrzesylki = null): self
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        
        return $this;
    }
    /**
     * Get doreczeniePrzesylki value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType|null
     */
    public function getDoreczeniePrzesylki(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType
    {
        return $this->doreczeniePrzesylki;
    }
    /**
     * Set doreczeniePrzesylki value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return \XOzymandias\Yii2Postal\sender\StructType\EPOInfoType
     */
    public function setDoreczeniePrzesylki(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DoreczeniePrzesylkiType $doreczeniePrzesylki = null): self
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        
        return $this;
    }
    /**
     * Get zwrotPrzesylki value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType|null
     */
    public function getZwrotPrzesylki(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType
    {
        return $this->zwrotPrzesylki;
    }
    /**
     * Set zwrotPrzesylki value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return \XOzymandias\Yii2Postal\sender\StructType\EPOInfoType
     */
    public function setZwrotPrzesylki(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ZwrotPrzesylkiType $zwrotPrzesylki = null): self
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        
        return $this;
    }
}
