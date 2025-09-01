<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska\services;

use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddShipment;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\AddShipmentResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuids;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\ClearEnvelopeByGuidsResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBufor;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetEnvelopeBuforResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPrintForParcel;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\GetPrintForParcelResponse;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\StructType\PrintType;
use SoapFault;

class ShipmentService extends BaseService
{

    public function add(AddShipment $parameters): AddShipmentResponse|null
    {
        try {
            $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    public function clear(string $guid, int $bufferId): ClearEnvelopeByGuidsResponse|null
    {
        try {
            $this->setResult($resultClearEnvelopeByGuids = $this->getSoapClient()->__soapCall('clearEnvelopeByGuids', [
                new ClearEnvelopeByGuids([$guid], $bufferId),
            ], [], [], $this->outputHeaders));

            return $resultClearEnvelopeByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        }
        return null;
    }

    public function getList(int $idBufor): GetEnvelopeBuforResponse|null
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

    public function printForParcel(?array $guid, ?PrintType $type): GetPrintForParcelResponse|null
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

}
