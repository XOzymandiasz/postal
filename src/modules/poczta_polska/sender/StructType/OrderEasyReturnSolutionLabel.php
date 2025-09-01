<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderEasyReturnSolutionLabel StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderEasyReturnSolutionLabel extends AbstractStructBase
{
    /**
     * The senderAddress
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $senderAddress = null;
    /**
     * The recipientAddress
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $recipientAddress = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - documentation: Shipment weight [g].
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $weight = null;
    /**
     * The customsDeclaration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType $customsDeclaration = null;
    /**
     * The deliveryMethod
     * Meta information extracted from the WSDL
     * - documentation: If not set, getPrintForParcel method should be used to get label.
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType|null
     */
    protected ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType $deliveryMethod = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - documentation: Description. maxLength: 30
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for orderEasyReturnSolutionLabel
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $senderAddress
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $recipientAddress
     * @param int $weight
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType $customsDeclaration
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType $deliveryMethod
     * @param string $description
     *@uses OrderEasyReturnSolutionLabel::setSenderAddress()
     * @uses OrderEasyReturnSolutionLabel::setRecipientAddress()
     * @uses OrderEasyReturnSolutionLabel::setWeight()
     * @uses OrderEasyReturnSolutionLabel::setCustomsDeclaration()
     * @uses OrderEasyReturnSolutionLabel::setDeliveryMethod()
     * @uses OrderEasyReturnSolutionLabel::setDescription()
     */
    public function __construct(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $senderAddress = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $recipientAddress = null, ?int $weight = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType $customsDeclaration = null, ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType $deliveryMethod = null, ?string $description = null)
    {
        $this
            ->setSenderAddress($senderAddress)
            ->setRecipientAddress($recipientAddress)
            ->setWeight($weight)
            ->setCustomsDeclaration($customsDeclaration)
            ->setDeliveryMethod($deliveryMethod)
            ->setDescription($description);
    }
    /**
     * Get senderAddress value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType|null
     */
    public function getSenderAddress(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType
    {
        return $this->senderAddress;
    }
    /**
     * Set senderAddress value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $senderAddress
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setSenderAddress(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $senderAddress = null): self
    {
        $this->senderAddress = $senderAddress;
        
        return $this;
    }
    /**
     * Get recipientAddress value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType|null
     */
    public function getRecipientAddress(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType
    {
        return $this->recipientAddress;
    }
    /**
     * Set recipientAddress value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $recipientAddress
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setRecipientAddress(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressType $recipientAddress = null): self
    {
        $this->recipientAddress = $recipientAddress;
        
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setWeight(?int $weight = null): self
    {
        // validation for constraint: int
        if (!is_null($weight) && !(is_int($weight) || ctype_digit($weight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get customsDeclaration value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType|null
     */
    public function getCustomsDeclaration(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType
    {
        return $this->customsDeclaration;
    }
    /**
     * Set customsDeclaration value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType $customsDeclaration
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setCustomsDeclaration(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CustomsDeclarationType $customsDeclaration = null): self
    {
        $this->customsDeclaration = $customsDeclaration;
        
        return $this;
    }
    /**
     * Get deliveryMethod value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType|null
     */
    public function getDeliveryMethod(): ?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType
    {
        return $this->deliveryMethod;
    }
    /**
     * Set deliveryMethod value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType $deliveryMethod
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDeliveryMethod(?\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeliveryMethodType $deliveryMethod = null): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \XOzymandias\Yii2Postal\sender\StructType\OrderEasyReturnSolutionLabel
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
