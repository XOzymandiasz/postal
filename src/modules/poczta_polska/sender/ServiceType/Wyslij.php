<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wyslij ServiceType
 * @subpackage Services
 */
class Wyslij extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WyslijLinkaOStatusieEZwrotu $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function wyslijLinkaOStatusieEZwrotu(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($resultWyslijLinkaOStatusieEZwrotu = $this->getSoapClient()->__soapCall('wyslijLinkaOStatusieEZwrotu', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWyslijLinkaOStatusieEZwrotu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\WyslijLinkaOStatusieEZwrotuResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
