<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\layout\css;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="css/mystyles.css" type="text/css">

</head>
<body>

<?php $this->beginBody() ?>
<!--<div class="navbar ">
                <div class="container">
                <div class="user-menu btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="avatar" src="css/ave.jpg">
                            User-name
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Редактировать аккаунт</a></li>
                            <li><a href="#">Выйти</a></li>
                          </ul>
                    </div>
                    <div class="navigate btn-group"> 
                        <a class="btn" href="#"><span class="glyphicon glyphicon-user"></span>Пользователи</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-tag"></span>Заявки</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-list-alt"></span>Отчеты</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-envelope"></span> Комментарии</a>
                    </div>                  
                </div>
        </div> -->
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Моя компания',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
                

            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Домой', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ?
                    ['label' => 'Регистрация', 'url' => ['/site/signup']]:['label'=>" "],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Войти в систему', 'url' => ['/site/login']] :
                        ['label' => 'Покинуть систему ',
                        // ['label' => 'Покинуть систему (' . Yii::$app->users->identity->username . ')',

                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>
        <div class="container"><div class="navbar ">
                <div class="user-menu btn-group">
                          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="avatar" src="css/ave.jpg">
                            User-name
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Редактировать аккаунт</a></li>
                            <li><a href="#">Выйти</a></li>
                          </ul>
                    </div>
                    <div class="navigate btn-group"> 
                        <a class="btn" href="#"><span class="glyphicon glyphicon-user"></span>Пользователи</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-tag"></span>Заявки</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-list-alt"></span>Отчеты</a>
                        <a class="btn" href="#"><span class="glyphicon glyphicon-envelope"></span> Комментарии</a>
                    </div>                  
               
        </div> </div>
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
            
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
