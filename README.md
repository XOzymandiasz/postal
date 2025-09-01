
Module for
-----
##### Store and manage shipments in the database
##### Communicate with the Poczta Polska Api 

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
## composer.json

```
"require-dev: {
      "xozymandias/postal": "*@dev"
}

"repositories": [
      {
          "type": "path",
          "url": "/postal/postal", // <--- replace with your url
          "options": {
              "symlink": true
          }
      }
],
```

## docker-compose.yml
```
services:
   php:
      volumes:
      -/repository/postal:/postal/postal // <--- replace with your path_to_repository:url
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

TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](https://codeception.com/).
By default, there are 2 test suites:

- `unit`
- `functional`

Tests can be executed by running

```
vendor/bin/codecept run -c /postal/postal // <--- replace with your url
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 

