<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\MainAsset;

use yii\bootstrap\Dropdown;
/*AppAsset::register($this);*/
MainAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Подключение шрифтов от Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans|PT+Sans+Caption|PT+Serif|PT+Serif+Caption" rel="stylesheet">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap_all">
    <header >
        <a href="index.php" class="logo">
            <?= Html::img('@web/img/logo.png',['alt' => 'PORTELIANO',/*'class' => 'logo',*/]) ?>
        </a>
        <section class="site-contact font-PTSans">

            <div id="phone_1">+7(495) 742-17-24</div>
            <div id="phone_1_label">Многоканальный телефон</div>

            <div id="phone_2">+7(495) 123-65-56</div>

            <div class="email-nonactive">
            <a href="mailto:absolute@ak-in.ru">absolute@ak-in.ru</a> </div>
           <!-- -->
        </section>
        <button id="ask_a_question" class="btn-link">
            ЗАДАЙТЕ ВОПРОС
        </button>

    </header>
    <div class="content">
        <?= $content ?>
    </div>
    <div id="navbar-line" class="navbar-line-indent  nav "><!--navbar-line-indent  nav navbar-fixed-top       -->
        <?php
        echo Nav::widget([
            'encodeLabels' => false, /*nav */
            'options' => ['class' => 'navbar navbar-nav  font-PTSans navbar-header'],

            'items' => [
                [   'label' => 'ГЛАВНАЯ',
                    'url' => '#quick-selection',
                    'linkOptions' => ['data-target' => 'a0'],
                ],
                ['label' => 'НОВИНКИ',
                    'url' => ['#novelty'],
                    'linkOptions' => ['data-target' => 'a1'],
                ],
                ['label' => 'ДВЕРИ', 
                    'url' => ['#doors'],  //?section=1 #doors
                    'linkOptions' => ['data-target' => 'a2'],
                ],
                ['label' => 'ПЕРЕГОРОДКИ', 
                    'url' => ['#septa'], //?section=2  #septa
                    'linkOptions' => ['data-target' => 'a3'],
                ],
                ['label' => 'ПРОИЗВОДИТЕЛИ',
                    'url' => ['#manufacturers'],
                    'linkOptions' => ['data-target' => 'a4'],
                ],
                ['label' => 'О КОМПАНИИ',
                    'url' => ['#about'],
                    'linkOptions' => ['data-target' => 'a5'],
                ],
                ['label' => 'КОНТАКТЫ',
                    'url' => ['#contacts'],
                    'linkOptions' => ['data-target' => 'a6'],
                ],

                ['label' => '<span class="glyphicon glyphicon-heart-empty " id="wishlist"></span>',
                    'url' => ['site/index'],
                ],
                ['label' => '<span class="glyphicon glyphicon-shopping-cart" id="basket" ></span>',
                    'url' => ['site/index'],
                ],

            ]]);
        /**/        
        ?>
    </div>
    <div class="push"></div>
</div>
<footer class="footer footer-general">
    <div id="navbar-line-footer" class="nav ">
        <!--navbar-line-indent  nav navbar-fixed-top-->
        <?php
        echo Nav::widget([
                'encodeLabels' => false,
                'options' => ['class' => 'nav navbar-nav font-PTSans navbar-footer'],
                'items' => [
                    ['label' => 'ГЛАВНАЯ', 'url' => ['/site/index'],],
                    ['label' => 'НОВИНКИ', 'url' => ['#news']],
                    ['label' => 'ДВЕРИ', 'url' => ['#doors']],
                    ['label' => 'ПЕРЕГОРОДКИ', 'url' => ['#septa']],
                    ['label' => 'ПРОИЗВОДИТЕЛИ', 'url' => ['#producer']],
                    ['label' => 'О КОМПАНИИ', 'url' => ['#about']],
                    ['label' => 'КОНТАКТЫ', 'url' => ['#contact']],

                    ['label' => '<span class="glyphicon glyphicon-heart-empty " id="wishlist"></span>',
                        'url' => ['site/index'],
                    ],
                    ['label' => '<span class="glyphicon glyphicon-shopping-cart" id="basket" ></span>',
                        'url' => ['site/index'],
                    ],

                ]]);/**/
        ?>
    </div>
        <div class="footer-copy">
            <p>
                &copy; Porteliano Итальянские двери, 1996 - <?= date('Y') ?>
            </p>            
        </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
