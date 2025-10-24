
Module for
-----
##### Store and manage shipments in the database
##### Communicate with the Poczta Polska Api 

# INSTALLATION
Add following lines to require section in composer.json:
```
"xozymandias/postal": "1.0.23"
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
                             'login => 'login', // <--- replace with your login
                             'password' => 'password', // <--- replace with your password
                             'isTest' => true // <--- set only in test environment
                       ]
                       'shipmentUrl' => [
                             'class' => XOzymandias\Yii2Postal\modules\poczta_polska\components\ShipmentUrlComponent::class
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
            'migrationsPath' => [
                '@xozymandias\yii2postal\migrations',
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



