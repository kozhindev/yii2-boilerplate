<?php

use steroids\helpers\DefaultConfig;

return DefaultConfig::getMainConfig([
    'id' => 'boilerplate-yii2-k4nuj8',
    'name' => 'Boilerplate Yii 2 k4nuj8',
    'language' => 'en',
    'timeZone' => 'UTC',
    'layout' => '@app/core/layouts/main',
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=localhost;dbname=boilerplate-yii2-k4nuj8',
            'username' => '',
            'password' => '',
        ],
        'mailer' => [
            'class' => 'app\core\components\AppMailer',
            'messageConfig' => [
                'from' => 'noreply@boilerplate-yii2-k4nuj8.ru'
            ],
        ],
    ],
    'params' => [
        'adminEmail' => '',
        'sentryJsDns' => '',
    ],
]);

