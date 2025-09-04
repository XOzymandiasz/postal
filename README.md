
Module for
-----
##### Store and manage shipments in the database
##### Communicate with the Poczta Polska Api 

INSTALLATION
-------------
Add following lines to require section in composer.json:
```
"xozymandias/postal": "1.0.0"
```

CONFIGURATION
-------------
## config/web
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
            'class' => TerytModule::class,
      ],
      'postal' => [
           'class' => Module::class,
           'modules' => [
                 'poczta_polska' => [
                       'class' => PocztaPolskaModule::class,
                       'components' => [
                             'repositoriesFactory' => [
                                   'class' => RepositoryFactory::class,
                                   'repositoryConfig' => [
                                         'cache' => [
                                               'class' => FileCache::class // <--- replace with DummyCache in test environment
                                         ]
                                   ]
                             ],
                       ],
                       'tracker' => [
                             'class' => PocztaPolskaTracker::class,
                       ],
                       'senderOptions' => [
                             'class' => PocztaPolskaSenderOptions::class,
                       ]
                 ],
           ],
           'shipmentRelation' => [
                 'class' => ShipmentRelationComponent::class,
                 'userClass' => User::class, // <--- replace with your User class
           ],
           'shipmentUrl' => [
                 'class' => ShipmentUrlComponent::class
           ]
      ]
],
```

## Environment variables

The module requires a `.env` file in your project root.  
Make sure to include the following variables:

POCZTA_POLSKA_TRACKER_LOGIN=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_PASSWORD=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_ADMIN_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_ADMIN_PASSWORD=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_USERNAME=

POCZTA_POLSKA_ELEKTRONICZNY_NADAWCA_TEST_PASSWORD=


