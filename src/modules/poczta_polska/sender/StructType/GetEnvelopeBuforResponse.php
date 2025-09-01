<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEnvelopeBuforResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEnvelopeBuforResponse extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType[]
     */
    protected ?array $przesylka = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getEnvelopeBuforResponse
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType[] $przesylka
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     *@uses GetEnvelopeBuforResponse::setPrzesylka()
     * @uses GetEnvelopeBuforResponse::setError()
     */
    public function __construct(?array $przesylka = null, ?array $error = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setError($error);
    }
    /**
     * Get przesylka value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType[]
     */
    public function getPrzesylka(): ?array
    {
        return $this->przesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintFromSetPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEnvelopeBuforResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponsePrzesylkaItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponsePrzesylkaItem) ? get_class($getEnvelopeBuforResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponsePrzesylkaItem), var_export($getEnvelopeBuforResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\PrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set przesylka value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType[] $przesylka
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetEnvelopeBuforResponse
     *@throws InvalidArgumentException
     */
    public function setPrzesylka(?array $przesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintFromSetPrzesylka($przesylka))) {
            throw new InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetEnvelopeBuforResponse
     *@throws InvalidArgumentException
     */
    public function addToPrzesylka(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The przesylka property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\PrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;
        
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
        foreach ($values as $getEnvelopeBuforResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEnvelopeBuforResponseErrorItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($getEnvelopeBuforResponseErrorItem) ? get_class($getEnvelopeBuforResponseErrorItem) : sprintf('%s(%s)', gettype($getEnvelopeBuforResponseErrorItem), var_export($getEnvelopeBuforResponseErrorItem, true));
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetEnvelopeBuforResponse
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\GetEnvelopeBuforResponse
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
