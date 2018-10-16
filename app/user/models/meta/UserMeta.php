<?php

namespace app\user\models\meta;

use steroids\modules\user\models\User;
use \Yii;

/**
 * @property string $firstName
 * @property string $lastName
 * @property string $middleName
 * @property string $country
 * @property string $birthdate
 */
abstract class UserMeta extends User
{
    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return array_merge(parent::rules(), [
            [['firstName', 'lastName', 'middleName', 'country'], 'string', 'max' => 255],
            ['birthdate', 'date', 'format' => 'php:Y-m-d'],
        ]);
    }
    public static function meta()
    {
        return array_merge(parent::meta(), [
            'firstName' => [
                'label' => Yii::t('app', 'Имя')
            ],
            'lastName' => [
                'label' => Yii::t('app', 'Фамилия')
            ],
            'middleName' => [
                'label' => Yii::t('app', 'Отчество')
            ],
            'country' => [
                'label' => Yii::t('app', 'Страна')
            ],
            'birthdate' => [
                'label' => Yii::t('app', 'Дата рождения'),
                'appType' => 'date'
            ]
        ]);
    }
}
