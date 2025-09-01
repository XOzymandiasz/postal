<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintType extends AbstractStructBase
{
    /**
     * The kind
     * @var string|null
     */
    protected ?string $kind = null;
    /**
     * The method
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The resolution
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resolution = null;
    /**
     * Constructor method for PrintType
     * @uses PrintType::setKind()
     * @uses PrintType::setMethod()
     * @uses PrintType::setFormat()
     * @uses PrintType::setResolution()
     * @param string $kind
     * @param string $method
     * @param string $format
     * @param string $resolution
     */
    public function __construct(?string $kind = null, ?string $method = null, ?string $format = null, ?string $resolution = null)
    {
        $this
            ->setKind($kind)
            ->setMethod($method)
            ->setFormat($format)
            ->setResolution($resolution);
    }
    /**
     * Get kind value
     * @return string|null
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }
    /**
     * Set kind value
     * @param string $kind
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrintType
     *@throws InvalidArgumentException
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintKindEnum::getValidValues()
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintKindEnum::valueIsValid()
     */
    public function setKind(?string $kind = null): self
    {
        // validation for constraint: enumeration
        if (!\XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintKindEnum::valueIsValid($kind)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \XOzymandias\Yii2Postal\sender\EnumType\PrintKindEnum', is_array($kind) ? implode(', ', $kind) : var_export($kind, true), implode(', ', \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintKindEnum::getValidValues())), __LINE__);
        }
        $this->kind = $kind;
        
        return $this;
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrintType
     *@throws InvalidArgumentException
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum::getValidValues()
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum::valueIsValid()
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: enumeration
        if (!\XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum::valueIsValid($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \XOzymandias\Yii2Postal\sender\EnumType\PrintMethodEnum', is_array($method) ? implode(', ', $method) : var_export($method, true), implode(', ', \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintMethodEnum::getValidValues())), __LINE__);
        }
        $this->method = $method;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrintType
     *@throws InvalidArgumentException
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum::getValidValues()
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum::valueIsValid()
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: enumeration
        if (!\XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum::valueIsValid($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \XOzymandias\Yii2Postal\sender\EnumType\PrintFormatEnum', is_array($format) ? implode(', ', $format) : var_export($format, true), implode(', ', \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintFormatEnum::getValidValues())), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get resolution value
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }
    /**
     * Set resolution value
     * @param string $resolution
     * @return \XOzymandias\Yii2Postal\sender\StructType\PrintType
     *@throws InvalidArgumentException
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum::getValidValues()
     * @uses \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum::valueIsValid()
     */
    public function setResolution(?string $resolution = null): self
    {
        // validation for constraint: enumeration
        if (!\XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum::valueIsValid($resolution)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \XOzymandias\Yii2Postal\sender\EnumType\PrintResolutionEnum', is_array($resolution) ? implode(', ', $resolution) : var_export($resolution, true), implode(', ', \XOzymandias\Yii2Postal\modules\poczta_polska\sender\EnumType\PrintResolutionEnum::getValidValues())), __LINE__);
        }
        $this->resolution = $resolution;
        
        return $this;
    }
}
