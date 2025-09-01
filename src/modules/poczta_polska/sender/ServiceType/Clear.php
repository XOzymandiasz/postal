<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelope;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuids;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuidsResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clear ServiceType
 * @subpackage Services
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clearEnvelope
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelope $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function clearEnvelope(?int $buforId = null): ?ClearEnvelopeResponse
    {
        try {
            $this->setResult($resultClearEnvelope = $this->getSoapClient()->__soapCall('clearEnvelope', [
                new ClearEnvelope($buforId),
            ], [], [], $this->outputHeaders));

            return $resultClearEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);


        }
        return null;
    }

    /**
     * Method to call the operation originally named clearEnvelopeByGuids
     * @param ClearEnvelopeByGuids $parameters
     * @return ClearEnvelopeByGuidsResponse|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function clearEnvelopeByGuids(?array $guids, ?int $bufferId): ClearEnvelopeByGuidsResponse|null
    {
        try {
            $this->setResult($resultClearEnvelopeByGuids = $this->getSoapClient()->__soapCall('clearEnvelopeByGuids', [
                new ClearEnvelopeByGuids($guids, $bufferId),
            ], [], [], $this->outputHeaders));

            return $resultClearEnvelopeByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuidsResponse|\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
