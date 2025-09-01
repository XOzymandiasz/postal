<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBufor;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforList;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeList;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetOutBoxBook;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeListResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetOutboxBookResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPrintForParcel;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyNadania;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyNadaniaResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrintType;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getUrzedyNadania
     * @param GetUrzedyNadania $parameters
     * @return GetUrzedyNadaniaResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUrzedyNadania(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyNadania $parameters): GetUrzedyNadaniaResponse|null
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getUrzedyNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);


        }
        return null;
    }

    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylki $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUrzedyWydajaceEPrzesylki(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyWydajaceEPrzesylki = $this->getSoapClient()->__soapCall('getUrzedyWydajaceEPrzesylki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyWydajaceEPrzesylki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeStatus
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatus $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatusResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeStatus(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeStatus = $this->getSoapClient()->__soapCall('getEnvelopeStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKarty
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKarty $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKartyResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKarty(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($resultGetKarty = $this->getSoapClient()->__soapCall('getKarty', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKarty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPasswordExpiredDate
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDate $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDateResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPasswordExpiredDate(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($resultGetPasswordExpiredDate = $this->getSoapClient()->__soapCall('getPasswordExpiredDate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPasswordExpiredDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentShort
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShort $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShortResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeContentShort(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentShort = $this->getSoapClient()->__soapCall('getEnvelopeContentShort', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentShort;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentFull
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFull $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFullResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeContentFull(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentFull = $this->getSoapClient()->__soapCall('getEnvelopeContentFull', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddressLabel
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddressLabel $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddressLabelResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddressLabel(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($resultGetAddressLabel = $this->getSoapClient()->__soapCall('getAddressLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddressLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getOutboxBook
     * @param GetOutboxBook $parameters
     * @return GetOutboxBookResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getOutboxBook(?int $idEnvelope, ?bool $includeNierejestrowane): ?GetOutboxBookResponse
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                new GetOutboxBook($idEnvelope, $includeNierejestrowane),
            ], [], [], $this->outputHeaders));

            return $resultGetOutboxBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    /**
     * Method to call the operation originally named getFirmowaPocztaBook
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBook $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBookResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getFirmowaPocztaBook(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($resultGetFirmowaPocztaBook = $this->getSoapClient()->__soapCall('getFirmowaPocztaBook', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFirmowaPocztaBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }


    /**
     * @param string $startDate
     * @param string $endDate
     * @return GetEnvelopeListResponse|null
     */
    public function getEnvelopeList(?string $startDate, ?string $endDate): ?GetEnvelopeListResponse
    {
        try {
            $this->setResult($resultGetEnvelopeList = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                new GetEnvelopeList($startDate, $endDate),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuid
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuid $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelByGuid(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuid = $this->getSoapClient()->__soapCall('getAddresLabelByGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkiPocztowe
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztowe $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPlacowkiPocztowe(GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkiPocztowe = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkiPocztowe;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    /**
     * Method to call the operation originally named getGuid
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetGuid $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetGuidResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getGuid(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($resultGetGuid = $this->getSoapClient()->__soapCall('getGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunki
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunki $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKierunki(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($resultGetKierunki = $this->getSoapClient()->__soapCall('getKierunki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunkiInfo
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiInfo $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiInfoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getKierunkiInfo(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($resultGetKierunkiInfo = $this->getSoapClient()->__soapCall('getKierunkiInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunkiInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBufor
     * @param GetEnvelopeBufor $parameters
     * @return GetEnvelopeBuforResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEnvelopeBufor(?int $idBufor): GetEnvelopeBuforResponse|null
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                new GetEnvelopeBufor($idBufor),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    /**
     * Method to call the operation originally named getEPOStatus
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEPOStatus $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEPOStatusResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEPOStatus(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($resultGetEPOStatus = $this->getSoapClient()->__soapCall('getEPOStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEPOStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelCompact
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompact $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompactResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelCompact(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelCompact = $this->getSoapClient()->__soapCall('getAddresLabelCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompact $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompactResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAddresLabelByGuidCompact(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuidCompact = $this->getSoapClient()->__soapCall('getAddresLabelByGuidCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuidCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBuforList
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse|null
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     */
    public function getEnvelopeBuforList(): ?GetEnvelopeBuforListResponse
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                new GetEnvelopeBuforList(),
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return null;
        }
    }

    /**
     * Method to call the operation originally named getUbezpieczeniaInfo
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfo $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfoResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getUbezpieczeniaInfo(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($resultGetUbezpieczeniaInfo = $this->getSoapClient()->__soapCall('getUbezpieczeniaInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUbezpieczeniaInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuids $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuidsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getBlankietPobraniaByGuids(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($resultGetBlankietPobraniaByGuids = $this->getSoapClient()->__soapCall('getBlankietPobraniaByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBlankietPobraniaByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAccountList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAccountList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAccountListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAccountList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($resultGetAccountList = $this->getSoapClient()->__soapCall('getAccountList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccountList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getProfilList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetProfilList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetProfilListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getProfilList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReklamacje
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReklamacje $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReklamacjeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReklamacje(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($resultGetReklamacje = $this->getSoapClient()->__soapCall('getReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getZapowiedziFaktur
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetZapowiedziFaktur $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetZapowiedziFakturResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getZapowiedziFaktur(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultGetZapowiedziFaktur = $this->getSoapClient()->__soapCall('getZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaPowodowReklamacji
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacji $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacjiResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getListaPowodowReklamacji(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($resultGetListaPowodowReklamacji = $this->getSoapClient()->__soapCall('getListaPowodowReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaPowodowReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDO
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDO $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEZDO(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($resultGetEZDO = $this->getSoapClient()->__soapCall('getEZDO', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDO;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDOList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getEZDOList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($resultGetEZDOList = $this->getSoapClient()->__soapCall('getEZDOList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDOList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getWplatyCKP
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetWplatyCKP $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetWplatyCKPResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getWplatyCKP(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($resultGetWplatyCKP = $this->getSoapClient()->__soapCall('getWplatyCKP', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWplatyCKP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaZgodEZwrotow
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotow $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotowResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getListaZgodEZwrotow(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($resultGetListaZgodEZwrotow = $this->getSoapClient()->__soapCall('getListaZgodEZwrotow', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaZgodEZwrotow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjna $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjnaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getJednostkaOrganizacyjna(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultGetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('getJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's
     * @param GetPrintForParcel $parameters
     * @return GetPrintForParcelResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPrintForParcel(?array $guid, ?PrintType $type): GetPrintForParcelResponse|null
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                new GetPrintForParcel($guid, $type),
            ], [], [], $this->outputHeaders));

            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

        }

        return null;
    }

    /**
     * Method to call the operation originally named getShopEZwrotyList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getShopEZwrotyList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyList $parameters)
    {
        try {
            $this->setResult($resultGetShopEZwrotyList = $this->getSoapClient()->__soapCall('getShopEZwrotyList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShopEZwrotyList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getLibrariesForLegalDeposits
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDeposits $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDepositsResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getLibrariesForLegalDeposits(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDeposits $parameters)
    {
        try {
            $this->setResult($resultGetLibrariesForLegalDeposits = $this->getSoapClient()->__soapCall('getLibrariesForLegalDeposits', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLibrariesForLegalDeposits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkaPocztowa
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowa $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getPlacowkaPocztowa(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowa $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkaPocztowa = $this->getSoapClient()->__soapCall('getPlacowkaPocztowa', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkaPocztowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getParcelContentList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetParcelContentList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetParcelContentListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getParcelContentList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetParcelContentList $parameters)
    {
        try {
            $this->setResult($resultGetParcelContentList = $this->getSoapClient()->__soapCall('getParcelContentList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetParcelContentList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReturnDocumentsProfileList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getReturnDocumentsProfileList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileList $parameters)
    {
        try {
            $this->setResult($resultGetReturnDocumentsProfileList = $this->getSoapClient()->__soapCall('getReturnDocumentsProfileList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReturnDocumentsProfileList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getChecklistTemplateList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getChecklistTemplateList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateList $parameters)
    {
        try {
            $this->setResult($resultGetChecklistTemplateList = $this->getSoapClient()->__soapCall('getChecklistTemplateList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetChecklistTemplateList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAdditionalActivitiesList
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesList $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesListResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function getAdditionalActivitiesList(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesList $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalActivitiesList = $this->getSoapClient()->__soapCall('getAdditionalActivitiesList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalActivitiesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAccountListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAdditionalActivitiesListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidCompactResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelByGuidResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddresLabelCompactResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetAddressLabelResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetBlankietPobraniaByGuidsResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetChecklistTemplateListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentFullResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeContentShortResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeStatusResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEPOStatusResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEZDOResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetFirmowaPocztaBookResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetGuidResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetJednostkaOrganizacyjnaResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKartyResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiInfoResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetKierunkiResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetLibrariesForLegalDepositsResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaPowodowReklamacjiResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetListaZgodEZwrotowResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetOutboxBookResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetParcelContentListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPasswordExpiredDateResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkaPocztowaResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPlacowkiPocztoweResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetProfilListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReklamacjeResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetReturnDocumentsProfileListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetShopEZwrotyListResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUbezpieczeniaInfoResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyNadaniaResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetWplatyCKPResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetZapowiedziFakturResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
