<?php

use steroids\helpers\DefaultConfig;

return DefaultConfig::getWebConfig([
    'defaultRoute' => 'site/site/index',
    'components' => [
        'request' => [
            'cookieValidationKey' => 'ie#9TkE?pQ6Vs#zHq$UqyzWoNFQU:SJe',
        ],
        'errorHandler' => [
            'errorAction' => 'site/site/error',
        ],
        'user' => [
            'class' => 'steroids\components\ContextUser',
            'identityClass' => 'app\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/user/auth/login'],
        ],
    ],
]);
