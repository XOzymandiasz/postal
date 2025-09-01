<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getJednostkaOrganizacyjna StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJednostkaOrganizacyjna extends AbstractStructBase
{
    /**
     * The jednostka
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null;
    /**
     * Constructor method for getJednostkaOrganizacyjna
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka
     * @uses GetJednostkaOrganizacyjna::setJednostka()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null)
    {
        $this
            ->setJednostka($jednostka);
    }
    /**
     * Get jednostka value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType|null
     */
    public function getJednostka(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType
    {
        return $this->jednostka;
    }
    /**
     * Set jednostka value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetJednostkaOrganizacyjna
     */
    public function setJednostka(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $jednostka = null): self
    {
        $this->jednostka = $jednostka;
        
        return $this;
    }
}
