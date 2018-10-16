<?php

namespace app\core\components;

use app\user\models\User;
use yii\mail\MailerInterface;
use yii\swiftmailer\Message;

class AppMessage extends Message
{
    public function send(MailerInterface $mailer = null)
    {
        $email = array_keys($this->getTo())[0];
        $user = User::findOne(['email' => $email]);
        if ($user) {
            // TODO Unsubscribe logic
        }
        return parent::send($mailer);
    }

}