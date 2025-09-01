<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createReturnDocumentsProfile StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateReturnDocumentsProfile extends AbstractStructBase
{
    /**
     * The profile
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null;
    /**
     * Constructor method for createReturnDocumentsProfile
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile
     * @uses CreateReturnDocumentsProfile::setProfile()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null)
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get profile value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType|null
     */
    public function getProfile(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType
    {
        return $this->profile;
    }
    /**
     * Set profile value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateReturnDocumentsProfile
     */
    public function setProfile(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ReturnDocumentProfileType $profile = null): self
    {
        $this->profile = $profile;
        
        return $this;
    }
}
