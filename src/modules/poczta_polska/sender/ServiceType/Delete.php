<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfile;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfileResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteShopEZwroty
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteShopEZwroty $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteShopEZwrotyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteShopEZwroty(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultDeleteShopEZwroty = $this->getSoapClient()->__soapCall('deleteShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteParcelContent
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteParcelContent $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteParcelContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteParcelContent(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteParcelContent $parameters)
    {
        try {
            $this->setResult($resultDeleteParcelContent = $this->getSoapClient()->__soapCall('deleteParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }

    /**
     * Method to call the operation originally named deleteReturnDocumentsProfile
     * @param int|null $profileId
     * @return DeleteReturnDocumentsProfileResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteReturnDocumentsProfile(?int $profileId): ?DeleteReturnDocumentsProfileResponse
    {
        try {
            $this->setResult($resultDeleteReturnDocumentsProfile = $this->getSoapClient()->__soapCall('deleteReturnDocumentsProfile', [
                new DeleteReturnDocumentsProfile($profileId),
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Method to call the operation originally named deleteChecklistTemplate
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplate $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function deleteChecklistTemplate(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultDeleteChecklistTemplate = $this->getSoapClient()->__soapCall('deleteChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteChecklistTemplateResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteParcelContentResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteReturnDocumentsProfileResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\DeleteShopEZwrotyResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
