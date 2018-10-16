<?php
return [
    'a::admin' => [
        'type' => 2,
        'description' => 'admin',
    ],
    'a::error' => [
        'type' => 2,
        'description' => 'error',
    ],
    'a::docs' => [
        'type' => 2,
        'description' => 'docs',
        'children' => [
            'a::docs::self',
            'a::docs::json',
        ],
    ],
    'a::docs::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::docs::json' => [
        'type' => 2,
        'description' => 'json',
    ],
    'a::file' => [
        'type' => 2,
        'description' => 'file',
        'children' => [
            'a::file::self',
            'a::file::upload',
            'a::file::upload-editor',
            'a::file::download',
        ],
    ],
    'a::file::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::file::upload' => [
        'type' => 2,
        'description' => 'upload',
    ],
    'a::file::upload-editor' => [
        'type' => 2,
        'description' => 'upload-editor',
    ],
    'a::file::download' => [
        'type' => 2,
        'description' => 'download',
    ],
    'a::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::self',
            'a::gii::gii',
        ],
    ],
    'a::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii' => [
        'type' => 2,
        'description' => 'gii',
        'children' => [
            'a::gii::gii::self',
            'a::gii::gii::gii-children',
        ],
    ],
    'a::gii::gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::gii::gii::gii-children' => [
        'type' => 2,
        'description' => 'gii-children',
    ],
    'a::api' => [
        'type' => 2,
        'description' => 'api',
        'children' => [
            'a::api::self',
            'a::api::api-gii',
            'a::api::user',
        ],
    ],
    'a::api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii' => [
        'type' => 2,
        'description' => 'api-gii',
        'children' => [
            'a::api::api-gii::self',
            'a::api::api-gii::api-get-entities',
            'a::api::api-gii::api-class-save',
            'a::api::api-gii::api-get-permissions',
            'a::api::api-gii::api-permissions-save',
        ],
    ],
    'a::api::api-gii::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::api-gii::api-get-entities' => [
        'type' => 2,
        'description' => 'api-get-entities',
    ],
    'a::api::api-gii::api-class-save' => [
        'type' => 2,
        'description' => 'api-class-save',
    ],
    'a::api::api-gii::api-get-permissions' => [
        'type' => 2,
        'description' => 'api-get-permissions',
    ],
    'a::api::api-gii::api-permissions-save' => [
        'type' => 2,
        'description' => 'api-permissions-save',
    ],
    'a::api::user' => [
        'type' => 2,
        'description' => 'user',
        'children' => [
            'a::api::user::self',
            'a::api::user::login',
            'a::api::user::logout',
            'a::api::user::recovery-send',
            'a::api::user::recovery-change',
            'a::api::user::registration',
            'a::api::user::registration-email-confirm',
        ],
    ],
    'a::api::user::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::api::user::login' => [
        'type' => 2,
        'description' => 'login',
    ],
    'a::api::user::logout' => [
        'type' => 2,
        'description' => 'logout',
    ],
    'a::api::user::recovery-send' => [
        'type' => 2,
        'description' => 'recovery-send',
    ],
    'a::api::user::recovery-change' => [
        'type' => 2,
        'description' => 'recovery-change',
    ],
    'a::api::user::registration' => [
        'type' => 2,
        'description' => 'registration',
    ],
    'a::api::user::registration-email-confirm' => [
        'type' => 2,
        'description' => 'registration-email-confirm',
    ],
    'a::steroids-api' => [
        'type' => 2,
        'description' => 'steroids-api',
        'children' => [
            'a::steroids-api::self',
            'a::steroids-api::fields-fetch',
        ],
    ],
    'a::steroids-api::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::steroids-api::fields-fetch' => [
        'type' => 2,
        'description' => 'fields-fetch',
    ],
    'a::user' => [
        'type' => 2,
        'description' => 'user',
        'children' => [
            'a::user::self',
            'a::user::auth',
            'a::user::registration',
        ],
    ],
    'a::user::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth' => [
        'type' => 2,
        'description' => 'auth',
        'children' => [
            'a::user::auth::self',
            'a::user::auth::login',
            'a::user::auth::logout',
            'a::user::auth::recovery',
        ],
    ],
    'a::user::auth::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth::login' => [
        'type' => 2,
        'description' => 'login',
    ],
    'a::user::auth::logout' => [
        'type' => 2,
        'description' => 'logout',
    ],
    'a::user::auth::recovery' => [
        'type' => 2,
        'description' => 'recovery',
        'children' => [
            'a::user::auth::recovery::self',
            'a::user::auth::recovery::change',
        ],
    ],
    'a::user::auth::recovery::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::auth::recovery::change' => [
        'type' => 2,
        'description' => 'change',
    ],
    'a::user::registration' => [
        'type' => 2,
        'description' => 'registration',
        'children' => [
            'a::user::registration::self',
            'a::user::registration::email-confirm',
            'a::user::registration::success',
            'a::user::registration::agreement',
        ],
    ],
    'a::user::registration::self' => [
        'type' => 2,
        'description' => 'self',
    ],
    'a::user::registration::email-confirm' => [
        'type' => 2,
        'description' => 'email-confirm',
    ],
    'a::user::registration::success' => [
        'type' => 2,
        'description' => 'success',
    ],
    'a::user::registration::agreement' => [
        'type' => 2,
        'description' => 'agreement',
    ],
    'm::app\\user\\models\\User' => [
        'type' => 2,
        'description' => 'app\\user\\models\\User',
        'children' => [
            'm::app\\user\\models\\User::view',
            'm::app\\user\\models\\User::create',
            'm::app\\user\\models\\User::update',
            'm::app\\user\\models\\User::delete',
            'm::app\\user\\models\\User::id',
            'm::app\\user\\models\\User::login',
            'm::app\\user\\models\\User::email',
            'm::app\\user\\models\\User::phone',
            'm::app\\user\\models\\User::role',
            'm::app\\user\\models\\User::passwordHash',
            'm::app\\user\\models\\User::sessionKey',
            'm::app\\user\\models\\User::language',
            'm::app\\user\\models\\User::lastLoginIp',
            'm::app\\user\\models\\User::emailConfirmKey',
            'm::app\\user\\models\\User::createTime',
            'm::app\\user\\models\\User::updateTime',
            'm::app\\user\\models\\User::emailConfirmTime',
            'm::app\\user\\models\\User::blockedTime',
            'm::app\\user\\models\\User::lastLoginTime',
            'm::app\\user\\models\\User::name',
            'm::app\\user\\models\\User::firstName',
            'm::app\\user\\models\\User::lastName',
            'm::app\\user\\models\\User::middleName',
            'm::app\\user\\models\\User::country',
            'm::app\\user\\models\\User::birthdate',
        ],
    ],
    'm::app\\user\\models\\User::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::delete' => [
        'type' => 2,
        'description' => 'delete',
    ],
    'm::app\\user\\models\\User::id' => [
        'type' => 2,
        'description' => 'id',
        'children' => [
            'm::app\\user\\models\\User::id::view',
        ],
    ],
    'm::app\\user\\models\\User::id::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::login' => [
        'type' => 2,
        'description' => 'login',
        'children' => [
            'm::app\\user\\models\\User::login::view',
            'm::app\\user\\models\\User::login::create',
            'm::app\\user\\models\\User::login::update',
        ],
    ],
    'm::app\\user\\models\\User::login::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::login::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::login::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::email' => [
        'type' => 2,
        'description' => 'email',
        'children' => [
            'm::app\\user\\models\\User::email::view',
            'm::app\\user\\models\\User::email::create',
            'm::app\\user\\models\\User::email::update',
        ],
    ],
    'm::app\\user\\models\\User::email::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::email::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::email::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::phone' => [
        'type' => 2,
        'description' => 'phone',
        'children' => [
            'm::app\\user\\models\\User::phone::view',
            'm::app\\user\\models\\User::phone::create',
            'm::app\\user\\models\\User::phone::update',
        ],
    ],
    'm::app\\user\\models\\User::phone::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::phone::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::phone::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::role' => [
        'type' => 2,
        'description' => 'role',
        'children' => [
            'm::app\\user\\models\\User::role::view',
            'm::app\\user\\models\\User::role::create',
            'm::app\\user\\models\\User::role::update',
        ],
    ],
    'm::app\\user\\models\\User::role::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::role::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::role::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::passwordHash' => [
        'type' => 2,
        'description' => 'passwordHash',
        'children' => [
            'm::app\\user\\models\\User::passwordHash::view',
            'm::app\\user\\models\\User::passwordHash::create',
            'm::app\\user\\models\\User::passwordHash::update',
        ],
    ],
    'm::app\\user\\models\\User::passwordHash::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::passwordHash::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::passwordHash::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::sessionKey' => [
        'type' => 2,
        'description' => 'sessionKey',
        'children' => [
            'm::app\\user\\models\\User::sessionKey::view',
            'm::app\\user\\models\\User::sessionKey::create',
            'm::app\\user\\models\\User::sessionKey::update',
        ],
    ],
    'm::app\\user\\models\\User::sessionKey::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::sessionKey::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::sessionKey::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::language' => [
        'type' => 2,
        'description' => 'language',
        'children' => [
            'm::app\\user\\models\\User::language::view',
            'm::app\\user\\models\\User::language::create',
            'm::app\\user\\models\\User::language::update',
        ],
    ],
    'm::app\\user\\models\\User::language::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::language::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::language::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::lastLoginIp' => [
        'type' => 2,
        'description' => 'lastLoginIp',
        'children' => [
            'm::app\\user\\models\\User::lastLoginIp::view',
            'm::app\\user\\models\\User::lastLoginIp::create',
            'm::app\\user\\models\\User::lastLoginIp::update',
        ],
    ],
    'm::app\\user\\models\\User::lastLoginIp::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::lastLoginIp::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::lastLoginIp::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::emailConfirmKey' => [
        'type' => 2,
        'description' => 'emailConfirmKey',
        'children' => [
            'm::app\\user\\models\\User::emailConfirmKey::view',
            'm::app\\user\\models\\User::emailConfirmKey::create',
            'm::app\\user\\models\\User::emailConfirmKey::update',
        ],
    ],
    'm::app\\user\\models\\User::emailConfirmKey::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::emailConfirmKey::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::emailConfirmKey::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::createTime' => [
        'type' => 2,
        'description' => 'createTime',
        'children' => [
            'm::app\\user\\models\\User::createTime::view',
        ],
    ],
    'm::app\\user\\models\\User::createTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::updateTime' => [
        'type' => 2,
        'description' => 'updateTime',
        'children' => [
            'm::app\\user\\models\\User::updateTime::view',
        ],
    ],
    'm::app\\user\\models\\User::updateTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::emailConfirmTime' => [
        'type' => 2,
        'description' => 'emailConfirmTime',
        'children' => [
            'm::app\\user\\models\\User::emailConfirmTime::view',
            'm::app\\user\\models\\User::emailConfirmTime::create',
            'm::app\\user\\models\\User::emailConfirmTime::update',
        ],
    ],
    'm::app\\user\\models\\User::emailConfirmTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::emailConfirmTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::emailConfirmTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::blockedTime' => [
        'type' => 2,
        'description' => 'blockedTime',
        'children' => [
            'm::app\\user\\models\\User::blockedTime::view',
            'm::app\\user\\models\\User::blockedTime::create',
            'm::app\\user\\models\\User::blockedTime::update',
        ],
    ],
    'm::app\\user\\models\\User::blockedTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::blockedTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::blockedTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::lastLoginTime' => [
        'type' => 2,
        'description' => 'lastLoginTime',
        'children' => [
            'm::app\\user\\models\\User::lastLoginTime::view',
            'm::app\\user\\models\\User::lastLoginTime::create',
            'm::app\\user\\models\\User::lastLoginTime::update',
        ],
    ],
    'm::app\\user\\models\\User::lastLoginTime::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::lastLoginTime::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::lastLoginTime::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::name' => [
        'type' => 2,
        'description' => 'name',
        'children' => [
            'm::app\\user\\models\\User::name::view',
            'm::app\\user\\models\\User::name::create',
            'm::app\\user\\models\\User::name::update',
        ],
    ],
    'm::app\\user\\models\\User::name::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::name::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::name::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::firstName' => [
        'type' => 2,
        'description' => 'firstName',
        'children' => [
            'm::app\\user\\models\\User::firstName::view',
            'm::app\\user\\models\\User::firstName::create',
            'm::app\\user\\models\\User::firstName::update',
        ],
    ],
    'm::app\\user\\models\\User::firstName::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::firstName::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::firstName::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::lastName' => [
        'type' => 2,
        'description' => 'lastName',
        'children' => [
            'm::app\\user\\models\\User::lastName::view',
            'm::app\\user\\models\\User::lastName::create',
            'm::app\\user\\models\\User::lastName::update',
        ],
    ],
    'm::app\\user\\models\\User::lastName::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::lastName::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::lastName::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::middleName' => [
        'type' => 2,
        'description' => 'middleName',
        'children' => [
            'm::app\\user\\models\\User::middleName::view',
            'm::app\\user\\models\\User::middleName::create',
            'm::app\\user\\models\\User::middleName::update',
        ],
    ],
    'm::app\\user\\models\\User::middleName::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::middleName::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::middleName::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::country' => [
        'type' => 2,
        'description' => 'country',
        'children' => [
            'm::app\\user\\models\\User::country::view',
            'm::app\\user\\models\\User::country::create',
            'm::app\\user\\models\\User::country::update',
        ],
    ],
    'm::app\\user\\models\\User::country::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::country::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::country::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'm::app\\user\\models\\User::birthdate' => [
        'type' => 2,
        'description' => 'birthdate',
        'children' => [
            'm::app\\user\\models\\User::birthdate::view',
            'm::app\\user\\models\\User::birthdate::create',
            'm::app\\user\\models\\User::birthdate::update',
        ],
    ],
    'm::app\\user\\models\\User::birthdate::view' => [
        'type' => 2,
        'description' => 'view',
    ],
    'm::app\\user\\models\\User::birthdate::create' => [
        'type' => 2,
        'description' => 'create',
    ],
    'm::app\\user\\models\\User::birthdate::update' => [
        'type' => 2,
        'description' => 'update',
    ],
    'a::index' => [
        'type' => 2,
        'description' => 'index',
    ],
    'guest' => [
        'type' => 1,
        'children' => [
            'a::index',
        ],
    ],
    'user' => [
        'type' => 1,
        'children' => [
            'a::index',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'a::index',
        ],
    ],
];
