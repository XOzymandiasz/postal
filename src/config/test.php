<?php

use app\models\User;
use XOzymandias\Yii2Postal\components\ShipmentRelationComponent;
use XOzymandias\Yii2Postal\components\ShipmentUrlComponent;
use XOzymandias\Yii2Postal\Module as BaseModule;
use XOzymandias\Yii2Postal\modules\poczta_polska\Module as PocztaPolskaModule;
use XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker;
use XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory;
use XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions;
use yii\caching\DummyCache;

$db = require dirname(__DIR__, 2) . '/config/test_db.php';
$params = array_merge(
    require __DIR__ . '/params.php',
);

/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'postal-tests',
    'basePath' => dirname(__DIR__, 3),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'language' => 'en-US',
    'modules' => [
        'postal' => [
            'class' => BaseModule::class,
            'modules' => [
                'poczta_polska' => [
                    'class' => PocztaPolskaModule::class,
                    'components' => [
                        'repositoryFactory' => [
                            'class' => RepositoryFactory::class,
                            'repositoryConfig' => [
                                'cache' => [
                                    'class' => DummyCache::class
                                ]
                            ]
                        ],
                    ],
                    'tracker' => [
                        'class' => PocztaPolskaTracker::class,
                    ],
                    'senderOptions' => [
                        'class' => PocztaPolskaSenderOptions::class,
                        'login' => $params['elektroniczny_nadawca.login'],
                        'password' => $params['elektroniczny_nadawca.password'],
                        'isTest' => $params['elektroniczny_nadawca.isTest'],
                    ]
                ],
            ],
            'shipmentRelation' => [
                'class' => ShipmentRelationComponent::class,
                'userClass' => User::class,
            ],
            'shipmentUrl' => [
                'class' => ShipmentUrlComponent::class,
            ],

        ]
    ],
    'components' => [
        'db' => $db,
        'assetManager' => [
            'basePath' => dirname(__DIR__, 3) . '/web/assets',
            'baseUrl'  => '/assets-test',
            'appendTimestamp' => false,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'cache' => [
            'class' => DummyCache::class,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
        ],
        'request' => [
            'cookieValidationKey' => 'test',
            'enableCsrfValidation' => false,
            'scriptFile' => dirname(__DIR__, 3) . '/web/index.php',
            'scriptUrl'  => '/index-test.php',
            // but if you absolutely need it set cookie domain to localhost
            /*
            'csrfCookie' => [
                'domain' => 'localhost',
            ],
            */
        ],
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\\i18n\\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                ],
            ],
        ],
    ],
    'params' => $params,
];
