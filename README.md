
Module for
-----
##### Store and manage shipments in the database
##### Communicate with the Poczta Polska Api 

# INSTALLATION
Add following lines to require section in composer.json:
```
"xozymandias/postal": "1.0.0"
```
or use command
```
composer require xozymandias/postal
```


# CONFIGURATION

## config/web and config/test
```

'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
],

'components' => [
      'cache' => [
            'class' => 'yii\caching\FileCache', // <--- replace with DummyCache in test environment
      ],
]

'modules' => [
      'teryt' => [
            'class' => edzima\teryt\Module::class,
      ],
      'postal' => [
           'class' => XOzymandias\Yii2Postal\Module::class,
           'modules' => [
                 'poczta_polska' => [
                       'class' => XOzymandias\Yii2Postal\modules\poczta_polska\Module::class,
                       'components' => [
                             'repositoriesFactory' => [
                                   'class' => XOzymandias\Yii2Postal\modules\poczta_polska\repositories\RepositoryFactory::class,
                                   'repositoryConfig' => [
                                         'cache' => [
                                               'class' => FileCache::class // <--- replace with DummyCache in test environment
                                         ]
                                   ]
                             ],
                       ],
                       'tracker' => [
                             'class' => XOzymandias\Yii2Postal\modules\poczta_polska\components\PocztaPolskaTracker::class,
                       ],
                       'senderOptions' => [
                             'class' => XOzymandias\Yii2Postal\modules\poczta_polska\sender\PocztaPolskaSenderOptions::class,
                       ]
                 ],
           ],
           'shipmentRelation' => [
                 'class' => XOzymandias\Yii2Postal\components\ShipmentRelationComponent::class,
                 'userClass' => User::class, // <--- replace with your User class
           ],
           'shipmentUrl' => [
                 'class' => XOzymandias\Yii2Postal\components\ShipmentUrlComponent::class
           ]
      ]
],

```

## config/console
```
'controllerMap' => [
        'poczta-wsdl' => [
            'class' => XOzymandias\Yii2Postal\commands\WSDLController::class
        ]
]
```

# Migration
## config/console
```
'aliases' => [
    '@XOzymandias/Yii2Postal' => '@vendor/xozymandias/postal/src',
]

'controllerMap' => [
        'migrate' => [
            'class' => yii\console\controllers\MigrateController::class,
            'migrationPath' => null,
            'migrationNamespaces' => [
                'XOzymandias\Yii2Postal\migrations',
                'app\migrations', // <--- replace with your migrations
            ],
        ],
    ],

'modules' => [
        'postal' => [
            'class' => XOzymandias\Yii2Postal\Module::class,

            'shipmentRelation' => [
                'class' => XOzymandias\Yii2Postal\components\ShipmentRelationComponent::class,
                'userClass' => User::class,
            ],

        ],
    ]
```
and use command
```
php yii migrate/up
```

# Environment variables

The module requires a `.env` file in your project root.  
Make sure to include the following variables:

POCZTA_POLSKA_TRACKER_LOGIN=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_PASSWORD=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_ADMIN_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_ADMIN_PASSWORD=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD=


