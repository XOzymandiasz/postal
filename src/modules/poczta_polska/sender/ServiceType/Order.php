<?php

declare(strict_types=1);

namespace XOzymandias\Yii2Postal\modules\poczta_polska\sender\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Order ServiceType
 * @subpackage Services
 */
class Order extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named orderEasyReturnSolutionLabel
     * @param \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabel $parameters
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabelResponse|bool
     * @uses AbstractSoapClientBase::saveLastError()
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     */
    public function orderEasyReturnSolutionLabel(\XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabel $parameters)
    {
        try {
            $this->setResult($resultOrderEasyReturnSolutionLabel = $this->getSoapClient()->__soapCall('orderEasyReturnSolutionLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultOrderEasyReturnSolutionLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return \XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\OrderEasyReturnSolutionLabelResponse
     * @see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
