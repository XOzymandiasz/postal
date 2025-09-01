<?php

use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTrackerClient;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;

return [
    'components' => [

        'pocztaPolskaTracker' => [
            'class' => PocztaPolskaTracker::class,
        ],
        'pocztaPolskaTrackerClient' => [
            'class' => PocztaPolskaTrackerClient::class,
        ],
        'pocztaPolskaSenderOptions' => [
            'class' => PocztaPolskaSenderOptions::class,
        ],
        'repositoriesFactory' => [
            'class' => RepositoryFactory::class,
        ],
    ],
];
