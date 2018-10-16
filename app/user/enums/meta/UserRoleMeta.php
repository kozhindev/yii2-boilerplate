<?php

namespace app\user\enums\meta;

use Yii;
use steroids\base\Enum;

abstract class UserRoleMeta extends Enum
{
    const ADMIN = 'admin';
    const OPERATOR = 'operator';
    const USER = 'user';

    public static function getLabels()
    {
        return [
            self::ADMIN => Yii::t('app', 'Администратор'),
            self::OPERATOR => Yii::t('app', 'Оператор'),
            self::USER => Yii::t('app', 'Пользователь')
        ];
    }
}
