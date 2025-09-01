<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateProfil StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateProfil extends AbstractStructBase
{
    /**
     * The profil
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null;
    /**
     * Constructor method for updateProfil
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil
     * @uses UpdateProfil::setProfil()
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\UpdateProfil
     */
    public function setProfil(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;
        
        return $this;
    }
}
