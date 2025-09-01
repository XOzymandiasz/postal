<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateProfil extends AbstractStructBase
{
    /**
     * The profil
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null;
    /**
     * Constructor method for createProfil
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @uses CreateProfil::setProfil()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null)
    {
        $this
            ->setProfil($profil);
    }
    /**
     * Get profil value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    public function getProfil(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType
    {
        return $this->profil;
    }
    /**
     * Set profil value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateProfil
     */
    public function setProfil(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
