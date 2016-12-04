<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer \frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\bootstrap\Collapse;
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\PagesAsset;

PagesAsset::register($this);
Yii::setAlias('@img', '@web/img/');
Yii::setAlias('@imgBigLogos', '@web/img/catalog/logos/big');
// в хлебные крошки 2 ссылки
$this->params['breadcrumbs'][] = [
    'label' => 'О компании',
    'url' => Url::to(['pages/about']),
    'template' => "<li><ins>{link}</ins></li>\n", // template for this link only
];

$this->params['breadcrumbs'][] = [
    'label' => 'Доставка',
    'url' => Url::to(['pages/about_dostavka']),
    'template' => "<li> {link} </li>\n", // template for this link only

];
?>
<div class="wrap-delivery">
    <div class="delivery">
        <!-- заголовок -->
        <div class="row">
            <div class="col-md-3 .col-sm-3 col-xs-12 col-md-offset-3">
                <h1>Доставка и установка</h1>
            </div>
        </div>
        <!-- подзаголовок -->
        <div class="row">
            <div class="col-md-12 .col-sm-12 col-xs-12 col-md-offset-3 ">
                <h2>Стоимость доставки</h2>
            </div>
        </div>
        <!-- колонка цен и колонка внимание-->
        <div class="row">
            <!-- колонка цен -->
            <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-3 ">
                <div class="row">
                    <div class="col-md-12">
                        <h3>По Москве</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        до 5 км от МКАД.......................
                    </div>
                    <div class="col-md-4">
                        3000 р
                    </div>
                </div>
            </div>
            <!-- колонка внимание-->
            <div class="col-md-4  .col-sm-2 col-xs-2">
                <h3> Внимание!</h3>
                <p>
                    Если по техническим причинам доставить товар «в квартиру» нет возможности, то по согласованию с
                    клиентом товар доставляется «до подъезда» или отвозится обратно на склад компании "Porteliano".
                    В этом случае, повторная доставка оплачивается клиентом дополнительно. Экстремальные виды услуг по
                    подъёму компания не оказывает.
                </p>
            </div>
        </div>
    </div>
    <!-- collapse -->
    <div class="row">
        <div class="col-md-12">
            <?php
            echo Collapse::widget([
                'items' => [
                    [
                        'label' => 'Стоимость подъёма',
                        'content' => 'Содержимое блока, открытого по-умолчанию',
                        // Открыто по-умолчанию
                        'contentOptions' => [
                            'class' => 'in'
                        ]
                    ],
                    [
                        'label' => 'Стоимость замеров и установки',
                        'content' => 'Содержимое свернутого блока.',
                        'contentOptions' => [],
                        'options' => []
                    ],
                ]
            ]);
            ?>
        </div>
    </div>
    <!-- parallax -->
    <div class="row">
        <div class="col-md-12">
            <div class="action">
                <div class="img-holder"
                     data-image="<?= Yii::getAlias('@web') . '/img/background/FOTO_INTRO_01.jpg' ?>">
                </div>
                <div class="row">
                    <div class="action-text">
                        <article class="col-md-6 col-xs-12 ">
                            <h1>АКЦИЯ</h1>
                            <p>
                                Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверей
                                и
                                перегородок на 4%!
                            </p>
                        </article>
                        <div class="col-md-2 col-xs-12">
                            <? require Yii::getAlias('@frontend') . '/views/site/home/contact-form.php' ?>
                        </div>
                    </div>

                </div>
                <script>
                    $('div.action > .img-holder').imageScroll({
                        holderClass: 'imageHolder',
                        container: $('div.action'),
                        speed: 0.1,
                        coverRatio: 0.75,
                        mediaWidth: 2000,
                        mediaHeight: 1014,
                        holderMaxHeight: 1000,
                        holderMinHeight: 866,
                        parallax: true,
                        touch: false
                    });
                </script>
            </div>
        </div>
    </div>

</div>


