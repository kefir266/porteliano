<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\Section;

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

    $sections = new Section();

    NavBar::begin([

        'brandLabel' => (Html::img('@web/images/logo.png',['alt' => 'PORTELIANO'])),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [

            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'ГЛАВНАЯ', 'url' => ['/site/index']],
        ['label' => 'НОВИНКИ', 'url' => ['/site/about']],];


    foreach ($sections->getMenu() as $section){
        $menuItems[] = $section;
    }



    $menuItems = array_merge($menuItems,
        [['label' => 'ПРОИЗВОДИТЕЛИ', 'url' => ['/site/about']],
        ['label' => 'О КОМПАНИИ', 'url' => ['/site/about']],
        ['label' => 'КОНТАКТЫ', 'url' => ['/site/contact']],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);

    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <!--<div class="wrap">-->

    <!--</div>-->
    <div class="container">

        <p class="pull-left">&copy; Porteliano Итальянские двери, 1996-<?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
