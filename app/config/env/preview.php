<?php

return [
    'runtimePath' => __DIR__ . '/../../../../files/log/runtime',
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../../../../files/assets',
        ],
        'mailer' => [
            'messageConfig' => [
                'from' => 'noreply@boilerplate-yii2-k4nuj8.dev.kozhindev.com'
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*'log' => [
            'targets' => [
                [
                    'class' => 'notamedia\sentry\SentryTarget',
                    'dsn' => 'https://aaaaaaaaaaaaaaaaaaaaa:bbbbbbbbbbbbbbbbbbbb@sentry.kozhindev.com/666',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],*/
    ],
    'modules' => [
        'file' => [
            'filesRootPath' => __DIR__ . '/../../../../files/uploaded',
            'filesRootUrl' => '/files/uploaded',
        ],
    ],
    'params' => [
        'sentryJsDns' => 'https://aaaaaaaaaaaaaaaaaaaaa:bbbbbbbbbbbbbbbbbbbb@sentry.kozhindev.com/666',
        'jivoSiteId' => '3CUQectmtA',
    ],
];