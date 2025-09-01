<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelReklamacja
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CancelReklamacja $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CancelReklamacjaResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function cancelReklamacja(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CancelReklamacja $parameters)
    {
        try {
            $this->setResult($resultCancelReklamacja = $this->getSoapClient()->__soapCall('cancelReklamacja', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelReklamacja;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\CancelReklamacjaResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
