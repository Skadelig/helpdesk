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
  

</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'HelpDesk',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
                

            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Домой', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Заявки', 'url' => ['/req/index']],
                    Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Сотрудники', 'url' => ['/employer/index']],
                    Yii::$app->user->isGuest ?['label'=>' ']:['label' => 'Комментарии', 'url' => ['/comments/index']],
                    Yii::$app->user->isGuest ?['label'=>' ']:[
                        'label' => 'Настройки',
                        'items' => [
                             ['label' => 'Роли', 'url' => ['access/index']],
                             ['label' => 'Дефекты', 'url' => ['defects/index']],
                             ['label' => 'Отделы', 'url' => ['department/index']],
                             ['label' => 'Должности', 'url' => ['jobs/index']],
                             ['label' => 'Приоритет', 'url' => ['priority/index']],
                             ['label' => 'Пользователи', 'url' => ['users/index']],
                        
                             
                        ],
                    ],
                    Yii::$app->user->isGuest ?
                    ['label' => 'Регистрация', 'url' => ['/site/signup']]:['label'=>" "],
                     Yii::$app->user->isGuest ?
                        ['label' => 'Войти в систему',  'url' => ['/site/login']] :
                        ['label' => 'Покинуть систему ',
                        // ['label' => 'Покинуть систему (' . Yii::$app->users->identity->username . ')',

                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>
        
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'homeLink'=>[
                    'label' =>'Главная',
                    'url' => ['site/index']
                ],
            ]) ?>
            <?= $content ?>
            
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; HelpDesk <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

  /**
 * Russian translation for bootstrap-datetimepicker
 * Victor Taranenko <darwin@snowdale.com>
 */

<?php $this->endBody() ?>

<script>
  /**
 * Russian translation for bootstrap-datetimepicker
 * Victor Taranenko <darwin@snowdale.com>
 */
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
