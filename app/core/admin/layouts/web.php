<?php

namespace app\views;

use Yii;
use app\core\admin\widgets\Alert;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

Yii::$app->frontendState->register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->siteMap->getFullTitle()) ?></title>
    <script defer src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
    <?= Html::cssFile('@static/assets/bundle-style-admin.css') ?>
    <?php $this->head() ?>
    <?= Html::jsFile('@static/assets/bundle-common.js') ?>
    <?= Html::jsFile('@static/assets/bundle-index.js') ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= Yii::$app->homeUrl ?>">
        <?= Yii::$app->name ?>
    </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">
                Вернуться на сайт
            </a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <?= Nav::widget([
                    'options' => ['class' => 'nav flex-column'],
                    'items' => array_map(function($item) {
                        return array_merge($item, [
                            'options' => ['class' => 'nav-item'],
                            'linkOptions' => ['class' => 'nav-link'],
                        ]);
                    }, \Yii::$app->siteMap->getNavItems(Yii::$app->controller->module->id, 1)),
                ]); ?>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

            <?= Breadcrumbs::widget([
                'links' => \Yii::$app->siteMap->getBreadcrumbs(),
                'homeLink' => false,
                'itemTemplate' => "<li class='breadcrumb-item'>{link}</li>\n",
                'activeItemTemplate' => "<li class='breadcrumb-item active'>{link}</li>\n",
            ]) ?>

            <?= Alert::widget() ?>

            <?= $content ?>

        </main>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
