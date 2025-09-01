<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wyslijLinkaOStatusieEZwrotuResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WyslijLinkaOStatusieEZwrotuResponse extends AbstractStructBase
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
     * Constructor method for wyslijLinkaOStatusieEZwrotuResponse
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType[] $error
     * @uses WyslijLinkaOStatusieEZwrotuResponse::setError()
     */
    public function __construct(?array $error = null)
    {
        $this
            ->setError($error);
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
        foreach ($values as $wyslijLinkaOStatusieEZwrotuResponseErrorItem) {
            // validation for constraint: itemType
            if (!$wyslijLinkaOStatusieEZwrotuResponseErrorItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ErrorType) {
                $invalidValues[] = is_object($wyslijLinkaOStatusieEZwrotuResponseErrorItem) ? get_class($wyslijLinkaOStatusieEZwrotuResponseErrorItem) : sprintf('%s(%s)', gettype($wyslijLinkaOStatusieEZwrotuResponseErrorItem), var_export($wyslijLinkaOStatusieEZwrotuResponseErrorItem, true));
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse
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
     * @return \XOzymandias\Yii2Postal\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse
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
