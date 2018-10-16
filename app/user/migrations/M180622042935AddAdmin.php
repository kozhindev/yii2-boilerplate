<?php

namespace app\user\migrations;

use Yii;
use yii\db\Migration;

class M180622042935AddAdmin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $email = YII_DEBUG ? Yii::$app->controller->prompt('Please write you email (as administrator, password: 1):') : '';
        $email = $email ?: 'admin@cloudhashing.io';

        $this->insert('users', [
            'login' => 'admin',
            'email' => $email,
            'name' => 'Администратор',
            'passwordHash' => Yii::$app->security->generatePasswordHash(1),
            'role' => 'admin',
            'createTime' => date('Y-m-d H:i:s'),
            'updateTime' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('users', [
            'login' => 'admin',
        ]);
    }

}
