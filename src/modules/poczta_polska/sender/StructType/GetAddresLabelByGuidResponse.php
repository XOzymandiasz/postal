<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAddresLabelByGuidResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAddresLabelByGuidResponse extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent[]
     */
    protected ?array $content = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getAddresLabelByGuidResponse
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent[] $content
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses GetAddresLabelByGuidResponse::setContent()
     * @uses GetAddresLabelByGuidResponse::setError()
     */
    public function __construct(?array $content = null, ?array $error = null)
    {
        $this
            ->setContent($content)
            ->setError($error);
    }
    /**
     * Get content value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent[]
     */
    public function getContent(): ?array
    {
        return $this->content;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContentForArrayConstraintFromSetContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddresLabelByGuidResponseContentItem) {
            // validation for constraint: itemType
            if (!$getAddresLabelByGuidResponseContentItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent) {
                $invalidValues[] = is_object($getAddresLabelByGuidResponseContentItem) ? get_class($getAddresLabelByGuidResponseContentItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidResponseContentItem), var_export($getAddresLabelByGuidResponseContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The content property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\AddressLabelContent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set content value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent[] $content
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetAddresLabelByGuidResponse
     *@throws InvalidArgumentException
     */
    public function setContent(?array $content = null): self
    {
        // validation for constraint: array
        if ('' !== ($contentArrayErrorMessage = self::validateContentForArrayConstraintFromSetContent($content))) {
            throw new InvalidArgumentException($contentArrayErrorMessage, __LINE__);
        }
        $this->content = $content;
        
        return $this;
    }
    /**
     * Add item to content value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetAddresLabelByGuidResponse
     *@throws InvalidArgumentException
     */
    public function addToContent(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddressLabelContent) {
            throw new InvalidArgumentException(sprintf('The content property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\AddressLabelContent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->content[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAddresLabelByGuidResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getAddresLabelByGuidResponseErrorItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getAddresLabelByGuidResponseErrorItem) ? get_class($getAddresLabelByGuidResponseErrorItem) : sprintf('%s(%s)', gettype($getAddresLabelByGuidResponseErrorItem), var_export($getAddresLabelByGuidResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetAddresLabelByGuidResponse
     *@throws InvalidArgumentException
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetAddresLabelByGuidResponse
     *@throws InvalidArgumentException
     */
    public function addToError(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
