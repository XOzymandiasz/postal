<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createChecklistTemplate StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateChecklistTemplate extends AbstractStructBase
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[]
     */
    protected ?array $checklistTemplate = null;
    /**
     * Constructor method for createChecklistTemplate
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[] $checklistTemplate
     * @uses CreateChecklistTemplate::setChecklistTemplate()
     */
    public function __construct(?array $checklistTemplate = null)
    {
        $this
            ->setChecklistTemplate($checklistTemplate);
    }
    /**
     * Get checklistTemplate value
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): ?array
    {
        return $this->checklistTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChecklistTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChecklistTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createChecklistTemplateChecklistTemplateItem) {
            // validation for constraint: itemType
            if (!$createChecklistTemplateChecklistTemplateItem instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType) {
                $invalidValues[] = is_object($createChecklistTemplateChecklistTemplateItem) ? get_class($createChecklistTemplateChecklistTemplateItem) : sprintf('%s(%s)', gettype($createChecklistTemplateChecklistTemplateItem), var_export($createChecklistTemplateChecklistTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The checklistTemplate property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ChecklistTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set checklistTemplate value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType[] $checklistTemplate
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateChecklistTemplate
     *@throws InvalidArgumentException
     */
    public function setChecklistTemplate(?array $checklistTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($checklistTemplateArrayErrorMessage = self::validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate($checklistTemplate))) {
            throw new InvalidArgumentException($checklistTemplateArrayErrorMessage, __LINE__);
        }
        $this->checklistTemplate = $checklistTemplate;
        
        return $this;
    }
    /**
     * Add item to checklistTemplate value
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType $item
     * @return \XOzymandias\Yii2Postal\sender\StructType\CreateChecklistTemplate
     *@throws InvalidArgumentException
     */
    public function addToChecklistTemplate(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ChecklistTemplateType) {
            throw new InvalidArgumentException(sprintf('The checklistTemplate property can only contain items of type \XOzymandias\Yii2Postal\sender\StructType\ChecklistTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->checklistTemplate[] = $item;
        
        return $this;
    }
}
