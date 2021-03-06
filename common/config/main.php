<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        //
        'mycomponent' => [
         
            'class' => 'app\components\MyComponent',
        ],
        'commandtest' => [
         
            'class' => 'app\components\Commandtest',
        ],
        //
        // 'commandtest' => [
        //     'class' => 'app\components\Commandtest',
        // ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        // change gii generate code 
        'giimb' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'mongoDbModel' => [
                    'class' => 'yii\mongodb\gii\model\Generator'
                ]
            ],
        ],
    ]
];
