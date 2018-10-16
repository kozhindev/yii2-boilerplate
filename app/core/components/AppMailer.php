<?php

namespace app\core\components;

use app\core\enums\LanguageEnum;
use steroids\modules\user\models\User;
use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\swiftmailer\Mailer;

class AppMailer extends Mailer
{
    public $htmlLayout = '@app/core/layouts/mail';
    public $messageClass = 'app\core\components\AppMessage';

    /**
     * @inheritdoc
     */
    public function render($view, $params = [], $layout = false)
    {
        // Get user
        if (!ArrayHelper::keyExists('user', $params)) {
            throw new Exception('Param `user` is required for render message. You can set `null` for get context user.');
        }

        $user = $params['user'];

        if ($user === null) {
            $user = \Yii::$app->user->model;
        } elseif (!($user instanceof User)) {
            throw new Exception('Param `user` must be instance of User or set `null`');
        }

        // Set language for render
        $prevLanguage = \Yii::$app->language;
        if ($user && $user->language) {
            \Yii::$app->language = $user->language;
        }

        $result = parent::render($view, $params, $layout);

        // Revert back lang
        \Yii::$app->language = $prevLanguage;

        return $result;
    }
}