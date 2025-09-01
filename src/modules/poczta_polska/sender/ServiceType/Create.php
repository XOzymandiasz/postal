<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBufor;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateEnvelopeBuforResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateProfil;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateProfilResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ProfilType;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named createEnvelopeBufor
     * @param CreateEnvelopeBufor $parameters
     * @return CreateEnvelopeBuforResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createEnvelopeBufor(CreateEnvelopeBufor $parameters): CreateEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultCreateEnvelopeBufor = $this->getSoapClient()->__soapCall('createEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Method to call the operation originally named createAccount
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateAccount $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateAccountResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createAccount(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateAccount $parameters)
    {
        try {
            $this->setResult($resultCreateAccount = $this->getSoapClient()->__soapCall('createAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createProfil
     * @param CreateProfil $parameters
     * @return CreateProfilResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createProfil(ProfilType $model): ?CreateProfilResponse
    {
        try {
            $this->setResult($resultCreateProfil = $this->getSoapClient()->__soapCall('createProfil', [
                new CreateProfil($model),
            ], [], [], $this->outputHeaders));
        
            return $resultCreateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }
    /**
     * Method to call the operation originally named createShopEZwroty
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateShopEZwroty $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateShopEZwrotyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createShopEZwroty(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultCreateShopEZwroty = $this->getSoapClient()->__soapCall('createShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createParcelContent
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateParcelContent $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateParcelContentResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createParcelContent(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateParcelContent $parameters)
    {
        try {
            $this->setResult($resultCreateParcelContent = $this->getSoapClient()->__soapCall('createParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createReturnDocumentsProfile
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfile $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfileResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createReturnDocumentsProfile(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultCreateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('createReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createChecklistTemplate
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplate $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function createChecklistTemplate(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultCreateChecklistTemplate = $this->getSoapClient()->__soapCall('createChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateAccountResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateChecklistTemplateResponse|CreateEnvelopeBuforResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateParcelContentResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateProfilResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateReturnDocumentsProfileResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CreateShopEZwrotyResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
