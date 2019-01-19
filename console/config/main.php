<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        //
        // '@console' => '',
        //
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        //add mongodb migrate
        'mongodb-migrate' => 'yii\mongodb\console\controllers\MigrateController',
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        //
        'onecontroller' => [
            'class' => 'app\components\OneController',
        ],
        //
        // 'commandtest' => [
         
        //     'class' => 'app\components\Commandtest',
        // 'mycomponent' => [
         
        //     'class' => 'app\components\MyComponent',
        // ],
        //
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
