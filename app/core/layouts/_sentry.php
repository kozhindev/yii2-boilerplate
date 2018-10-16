
<?php if (Yii::$app->params['sentryJsDns']) { ?>
    <script src="https://cdn.ravenjs.com/3.27.0/raven.min.js" crossorigin="anonymous"></script>
    <script>
        window.SENTRY_JS_DNS = <?= \yii\helpers\Json::encode(Yii::$app->params['sentryJsDns']) ?>;
    </script>
<?php } ?>