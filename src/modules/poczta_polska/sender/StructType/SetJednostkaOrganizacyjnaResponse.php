<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setJednostkaOrganizacyjnaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SetJednostkaOrganizacyjnaResponse extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * The jednostkaOrganizacyjna
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType[]
     */
    protected ?array $jednostkaOrganizacyjna = null;
    /**
     * Constructor method for setJednostkaOrganizacyjnaResponse
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     *@uses SetJednostkaOrganizacyjnaResponse::setError()
     * @uses SetJednostkaOrganizacyjnaResponse::setJednostkaOrganizacyjna()
     */
    public function __construct(?array $error = null, ?array $jednostkaOrganizacyjna = null)
    {
        $this
            ->setError($error)
            ->setJednostkaOrganizacyjna($jednostkaOrganizacyjna);
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
        foreach ($values as $setJednostkaOrganizacyjnaResponseErrorItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseErrorItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseErrorItem) ? get_class($setJednostkaOrganizacyjnaResponseErrorItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseErrorItem), var_export($setJednostkaOrganizacyjnaResponseErrorItem, true));
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\SetJednostkaOrganizacyjnaResponse
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\SetJednostkaOrganizacyjnaResponse
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
    /**
     * Get jednostkaOrganizacyjna value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType[]
     */
    public function getJednostkaOrganizacyjna(): ?array
    {
        return $this->jednostkaOrganizacyjna;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJednostkaOrganizacyjna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJednostkaOrganizacyjna method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJednostkaOrganizacyjnaForArrayConstraintFromSetJednostkaOrganizacyjna(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) {
            // validation for constraint: itemType
            if (!$setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType) {
                $invalidValues[] = is_object($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) ? get_class($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem) : sprintf('%s(%s)', gettype($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem), var_export($setJednostkaOrganizacyjnaResponseJednostkaOrganizacyjnaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The jednostkaOrganizacyjna property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\JednostkaOrganizacyjnaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set jednostkaOrganizacyjna value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType[] $jednostkaOrganizacyjna
     * @return \XOzymandias\Yii2Postal\sender\StructType\SetJednostkaOrganizacyjnaResponse
     *@throws InvalidArgumentException
     */
    public function setJednostkaOrganizacyjna(?array $jednostkaOrganizacyjna = null): self
    {
        // validation for constraint: array
        if ('' !== ($jednostkaOrganizacyjnaArrayErrorMessage = self::validateJednostkaOrganizacyjnaForArrayConstraintFromSetJednostkaOrganizacyjna($jednostkaOrganizacyjna))) {
            throw new InvalidArgumentException($jednostkaOrganizacyjnaArrayErrorMessage, __LINE__);
        }
        $this->jednostkaOrganizacyjna = $jednostkaOrganizacyjna;
        
        return $this;
    }
    /**
     * Add item to jednostkaOrganizacyjna value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\SetJednostkaOrganizacyjnaResponse
     *@throws InvalidArgumentException
     */
    public function addToJednostkaOrganizacyjna(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\JednostkaOrganizacyjnaType) {
            throw new InvalidArgumentException(sprintf('The jednostkaOrganizacyjna property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\JednostkaOrganizacyjnaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->jednostkaOrganizacyjna[] = $item;
        
        return $this;
    }
}
