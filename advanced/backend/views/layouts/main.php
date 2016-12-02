<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

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
        'brandLabel' => 'PORTELIANO',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Продукция', 'url' => ['/product']],
        ['label' => 'Цены', 'url' => ['/price']],
        ['label' => 'Заказы', 'url' => ['/order']],
        [
            'label' => 'Справочники',
            'url' => '#',
            'items' =>
                [
                    [
                        'label' => 'Категории',
                        'url' => '/admin/section'
                    ],
                    [
                        'label' => 'Материалы',
                        'url' => '/admin/material'
                    ],
                    [
                        'label' => 'Производители',
                        'url' => '/admin/manufacturer'
                    ],
                    [
                        'label' => 'Стили',
                        'url' => '/admin/style'
                    ],
                    [
                        'label' => 'Валюты',
                        'url' => '/admin/currency'
                    ],

                ],

        ],
        
    ];
    if (Yii::$app->user->isGuest) {
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
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="vertical-menu">
        <?php echo Nav::widget(['items' => [
            [
                'label' => 'Справочники',
                'url' => '#',
                'items' =>
                    [
                        [
                            'label' => 'Категории',
                            'url' => '/admin/section'
                        ],
                        [
                            'label' => 'Материалы',
                            'url' => '/admin/material'
                        ],
                        [
                            'label' => 'Производители',
                            'url' => '/admin/manufacturer'
                        ],
                        [
                            'label' => 'Стили',
                            'url' => '/admin/style'
                        ]
                    ],

            ]
        ]]); ?>
    </div>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
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
