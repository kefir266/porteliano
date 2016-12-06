<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\MainAsset;

use yii\bootstrap\Dropdown;
AppAsset::register($this);
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap_all" >
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
           <?php
           /*$address указывает какой view должен загрузится в Content*/
           /*$controller должен использовать $this->renderAjax*/
           $address = Url::to(['site/say'], true);
           $address = Url::to(['site/entry'], true);
            Modal::begin([
                'headerOptions' => ['id' => 'modalHeader'],
                'header' => '<h2>здесь будет то, что написано в title</h2>',
                //keeps from closing modal with esc key or by clicking out of the modal.
                // user must click cancel or X to close
                //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
                'size' => 'modal-sm',
                'toggleButton' => [
                    'tag' => 'button',
                    'value' => $address,
                    'title' => 'Задайте вопрос',
                    'id' => 'ask_a_question-button',
                    'class' => 'showModalButton btn btn-link ',
                    'label' => 'ЗАДАЙТЕ ВОПРОС',
                ]
            ]);
           echo "<div id='modalContent'></div>";
            Modal::end();
           ?>
    </header>
    <div class="content" >
        <?= yii\widgets\Breadcrumbs::widget([
            'homeLink' => [
                'label' => 'Главная',
                'url' => Url::to(['site/index']),
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
    <div id="navbar-line" class="hidden-sm hidden-xs navbar-line-indent  nav "><!--navbar-line-indent  nav navbar-fixed-top       -->
        <?php
        echo Nav::widget([
            'encodeLabels' => false, /*nav */
            'options' => ['class' => 'navbar navbar-nav  font-PTSans navbar-header'],

            'items' => [
                [   'label' => 'ГЛАВНАЯ',
                    'url' => [Url::to(['site/index'])],
                    'linkOptions' => ['data-target' => 'a0'],
                ],
                ['label' => 'НОВИНКИ',
                    'url' => Url::to(['site/index', '#' => 'novelty']),//['#novelty'],
                    'linkOptions' => ['data-target' => 'a1'],
                ],
                ['label' => 'ДВЕРИ', 
                    'url' => Url::to(['site/index', '#' => 'doors']),  //?section=1 ['#doors']
                    'linkOptions' => ['data-target' => 'a2'],
                ],
                ['label' => 'ПЕРЕГОРОДКИ', 
                    'url' => Url::to(['site/index', '#' => 'septa']), //?section=2  #septa
                    'linkOptions' => ['data-target' => 'a3'],
                ],
                ['label' => 'ПРОИЗВОДИТЕЛИ',
                    'url' => Url::to(['site/index', '#' => 'manufacturers']),
                    'linkOptions' => ['data-target' => 'a4'],
                ],
                ['label' => 'О КОМПАНИИ',
                    'url' => Url::to(['site/index', '#' => 'about']),
                    'linkOptions' => ['data-target' => 'a5'],
                ],
                ['label' => 'КОНТАКТЫ',
                    'url' => Url::to(['site/index', '#' => 'contacts']) ,
                    'linkOptions' => ['data-target' => 'a6'],
                ],

                ['label' => '<span class="glyphicon glyphicon-heart-empty " id="wishlist"></span>',
                    'url' => ['cart/wishlist'],
                ],
                ['label' => '<span class="glyphicon glyphicon-shopping-cart" id="basket"></span>',
                    'url' => ['cart/index'],
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

                    ['label' => '<span class="glyphicon glyphicon-heart-empty " id="wishlist" ></span>',
                        'url' => ['cart/wishlist'],
                    ],
                    ['label' => '<span class="glyphicon glyphicon-shopping-cart" id="basket" ></span>',
                        'url' => ['cart/index'],
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

<?php Modal::begin([
    'id' => 'modal-cart',
    'header' => '<h2>Корзина</h2>',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <button type="button" class="btn btn-success">Оформить заказ</button>
        <button type="button" class="btn btn-danger" onclick=clearCart("cart")>Очистить корзину</button>',
    ]);

    Modal::end();
?>

<?php Modal::begin([
    'id' => 'modal-wish',
    'header' => '<h2>Отобранные товары</h2>',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
    <button type="button" class="btn btn-danger" onclick=clearCart("wish")>Очистить корзину</button>',
]);

Modal::end();
?>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage() ?>
