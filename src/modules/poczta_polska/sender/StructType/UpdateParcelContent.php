<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for updateParcelContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateParcelContent extends AbstractStructBase
{
    /**
     * The parcelContent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType[]
     */
    protected ?array $parcelContent = null;
    /**
     * Constructor method for updateParcelContent
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType[] $parcelContent
     * @uses UpdateParcelContent::setParcelContent()
     */
    public function __construct(?array $parcelContent = null)
    {
        $this
            ->setParcelContent($parcelContent);
    }
    /**
     * Get parcelContent value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType[]
     */
    public function getParcelContent(): ?array
    {
        return $this->parcelContent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setParcelContent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelContent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelContentForArrayConstraintFromSetParcelContent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $updateParcelContentParcelContentItem) {
            // validation for constraint: itemType
            if (!$updateParcelContentParcelContentItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType) {
                $invalidValues[] = is_object($updateParcelContentParcelContentItem) ? get_class($updateParcelContentParcelContentItem) : sprintf('%s(%s)', gettype($updateParcelContentParcelContentItem), var_export($updateParcelContentParcelContentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelContent property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ParcelContentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set parcelContent value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType[] $parcelContent
     * @return \XOzymandias\Yii2Postal\sender\StructType\UpdateParcelContent
     *@throws InvalidArgumentException
     */
    public function setParcelContent(?array $parcelContent = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelContentArrayErrorMessage = self::validateParcelContentForArrayConstraintFromSetParcelContent($parcelContent))) {
            throw new InvalidArgumentException($parcelContentArrayErrorMessage, __LINE__);
        }
        $this->parcelContent = $parcelContent;
        
        return $this;
    }
    /**
     * Add item to parcelContent value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\UpdateParcelContent
     *@throws InvalidArgumentException
     */
    public function addToParcelContent(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ParcelContentType) {
            throw new InvalidArgumentException(sprintf('The parcelContent property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ParcelContentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelContent[] = $item;
        
        return $this;
    }
}
