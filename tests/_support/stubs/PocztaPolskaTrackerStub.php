<?php

namespace XOzymandias\Yii2Postal\tests\_support\stubs;

use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;

final class PocztaPolskaTrackerStub extends PocztaPolskaTracker{
    public function __construct(array $config = [])
    {
        parent::__construct(new PocztaPolskaTrackerClientStub(), $config);
    }
}