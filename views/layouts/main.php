<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/img/fivicon.png">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h3 class="my-0 mr-md-auto font-weight-normal">News Blog</h3>
    <nav class="my-md-0 my-md-0 mr-md-3">
        <a class="p-2 text-dark btn btn-outline-light" href="<?= Url::toRoute(['/'])?>">Новости</a>
        <a class="p-2 text-dark btn btn-outline-light" href="#">Контакты</a>
        <a class="p-2 text-dark btn btn-outline-light" href="#">О нас</a>
    </nav>
    <?php if (Yii::$app->user->isGuest): ?>
    <a class="btn btn-outline-success mr-1"  href="<?= Url::toRoute(['auth/login'])?>">Войти</a>
    <a class="btn btn-outline-primary mr-1" href="<?= Url::toRoute(['auth/singup'])?>">Регистрация</a>
    <?php else: ?>
    <?=Html::beginForm(['/auth/logout'], 'post')
    . Html::submitButton(
        'Logout (' . Yii::$app->user->identity->nickname . ')',
        ['class' => 'btn btn-warning']
    )
    . Html::endForm() ;?>
    <?php endif;?>
</div>

<?= $content ?>


<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
