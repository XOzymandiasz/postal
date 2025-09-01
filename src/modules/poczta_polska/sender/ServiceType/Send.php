<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\SendEnvelope;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType;
use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named sendEnvelope
     * @param SendEnvelope $parameters
     * @return SendEnvelopeResponseType|null
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function sendEnvelope(?int $idBufor, ?int $urzadNadania, ?array $pakiet): SendEnvelopeResponseType|null
    {
        try {
            $this->setResult($resultSendEnvelope = $this->getSoapClient()->__soapCall('sendEnvelope', [
                new SendEnvelope($urzadNadania, $pakiet, $idBufor),
            ], [], [], $this->outputHeaders));
        
            return $resultSendEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }

        return null;
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\SendEnvelopeResponseType
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
