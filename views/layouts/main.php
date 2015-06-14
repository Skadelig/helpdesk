<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


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
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />  
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>
    <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>H</b>D</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>HELP</b>Desk</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                         
                            
                            <!-- Tasks: style can be found in dropdown.less -->
                            
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                 
                                    <li >
                                       vty
                                    </li>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                  
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
    
         <?php
        //     NavBar::begin([
        //         'brandLabel' => 'HelpDesk',
        //         'brandUrl' => ['/site/index'],
        //         'options' => [
        //             'class' => 'navbar-inverse navbar-fixed-top',
        //         ],
                

        //     ]);
        //     echo Nav::widget([
        //         'options' => ['class' => 'navbar-nav navbar-right'],
        //         'items' => [
        //             ['label' => 'Домой', 'url' => ['/site/index']],
        //             Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Заявки', 'url' => ['/req/index']],
        //             Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Сотрудники', 'url' => ['/employer/index']],
        //             Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Комментарии', 'url' => ['/comments/index']],
        //             Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Статистика', 'url'=>['/stats/index']],
        //             Yii::$app->user->isGuest ?['label'=>' ']:[
        //                 'label' => 'Настройки',
        //                 'items' => [
        //                      ['label' => 'Роли', 'url' => ['access/index']],
        //                      ['label' => 'Дефекты', 'url' => ['defects/index']],
        //                      ['label' => 'Отделы', 'url' => ['department/index']],
        //                      ['label' => 'Должности', 'url' => ['jobs/index']],
        //                      ['label' => 'Приоритет', 'url' => ['priority/index']],
        //                      ['label' => 'Пользователи', 'url' => ['users/index']],
                        
                             
        //                 ],
        //             ],
        //             Yii::$app->user->isGuest ?
        //             ['label' => 'Регистрация', 'url' => ['/site/signup']]:['label'=>" "],
        //              Yii::$app->user->isGuest ?
        //                 ['label' => 'Войти в систему',  'url' => ['/site/login']] :
        //                 ['label' => 'Покинуть систему ',
        //                 // ['label' => 'Покинуть систему (' . Yii::$app->users->identity->username . ')',

        //                     'url' => ['/site/logout'],
        //                     'linkOptions' => ['data-method' => 'post']],
        //         ],
        //     ]);
        //     NavBar::end();
        ?>
        <section class="content-header">
        <h1><?=$this->title?></h1>
              <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink'=>[
                    'label' =>'Главная',
                    'url' => ['site/index']
                ],
            ]) ?>
        </section>
        <div class="container">
          
            <?= $content ?>
            
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; HelpDesk <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>


<?php $this->endBody() ?>

<script>

;(function($){
    $.fn.datetimepicker.dates['ru'] = {
        days: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
        daysShort: ["Вск", "Пнд", "Втр", "Срд", "Чтв", "Птн", "Суб", "Вск"],
        daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"],
        months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
        monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
        today: "Сегодня",
        suffix: [],
        meridiem: [],
        weekStart: 1
    };
}(jQuery));
</script>
</body>
</html>
<?php $this->endPage() ?>
