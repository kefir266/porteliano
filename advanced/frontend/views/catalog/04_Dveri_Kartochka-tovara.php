<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 21:04
 */
/** @var string $ind */
/*  models  */

/*  widgets  */
use app\models\Section;
use yii\bootstrap\Button;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\TestAsset;
use app\assets\FontAsset;

TestAsset::register($this);
FontAsset::register($this);

// псевдоним пути к папке
Yii::setAlias('@doors', '@web/img/doors');
Yii::setAlias('@cover', '@web/img/cover');

// определение какие обложки и заголовки показывать
switch ($ind) {
    case 0:
        $categoryTitle = 'Межкомнатные двери';

        $coverImgLeft = '@cover/outer.jpg';
        $coverImgRight = '@cover/grips.png';

        $coverTextLeft = 'Входные двери';
        $coverTextRight = 'Ручки';
        break;
    case 1:
        $categoryTitle = 'Входные двери';
        $coverImgLeft = '@cover/grips.png';
        $coverImgRight = '@cover/inner.png';

        $coverTextLeft = 'Межкомнатные двери';
        $coverTextRight = 'Ручки';
        break;
    case 2:
        $categoryTitle = 'Ручки';
        $coverImgLeft = '@cover/outer.jpg';
        $coverImgRight = '@cover/inner.png';

        $coverTextLeft = 'Межкомнатные двери';
        $coverTextRight = 'Входные двери';
        break;
    default:
        $categoryTitle = 'нет категории';
}

// в хлебные крошки 2 ссылки
$this->params['breadcrumbs'][] = [
    'label' => 'Двери ',
    'url' => Url::to(['pages/dveri']),
    'template' => "<li><ins>{link}</ins></li>\n", // template for this link only
];

$this->params['breadcrumbs'][] = [
    'label' => $categoryTitle,    //'Межкомнтаные двери ',
    'url' => Url::to(['pages/doorcatalog']),
    'template' => "<li> {link} </li>\n",
];

$sections = new Section();
$items = [];
// $title для теста берется из indx
$title = $categoryTitle;//$products['section']['title'];
unset($categoryTitle);
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}

// TODO заменить на загрузку данных из базы
$category = ['Входная дверь'];
$doorData_2 = ['Bauxt', 'Bauxt', 'Security', 'Bauxt'];
$doorData_3 = ['Export 1106', 'Export 1136', 'SECURITY', 'Elite 1115'];
$price = ['1545', '1545', '2119', '2194'];


?>
<div class="door-catalog">
    <div class="panel-quick-selection">
        <div class="row">
            <div class="col-md-5 doorImg">
                <?= Html::img('/img/' . $product->manufacturer->title . '/' . $product->img) ?>
            </div>
            <div class="col-md-7 ">
                <div class="row">
                    <div class="col-md-9">
                        <h1><?= $product->section->title ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Производитель</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?= $product->manufacturer->title ?></h4>
                    </div>
                </div> <!--Производитель-->
                <div class="row">
                    <div class="col-md-6">
                        <h4>Коллекция</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?= 'collection'//$product->collection  ?></h4>
                    </div>
                </div> <!--Коллекция-->
                <div class="row">
                    <div class="col-md-6">
                        <h4>Артикул</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?= 'article'//$product->article  ?></h4>
                    </div>
                </div> <!--Артикул-->
                <div class="row">
                    <div class="col-md-6">
                        <h4>Стиль</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?= $product->style->title ?></h4>
                    </div>
                </div> <!--Стиль-->
                <div class="row">
                    <div class="col-md-9">
                        <h5><?= 'note'//$product->note  ?></h5>
                    </div>
                </div> <!----------->
                <div class="row">
                    <div class="col-md-6">
                        <h4>Стоимость</h4>
                    </div>
                    <div class="col-md-6">
                        <h4><?= $product->price->cost ?></h4>
                    </div>
                </div> <!--Стоимость-->
                <div class="row buttons-area">
                    <div class="col-md-6">
                        <a  href="/#">
                <span id="in-basket" class="btn btn-default send-button" role="button">
                    Добавить в корзину
                </span>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a id="in-wishlist" class="btn btn-default" href="/#">
                <span class="glyphicon glyphicon-heart-empty "></span>
                        </a>
                    </div>
                </div> <!--Добавить в корзину-->
            </div>
        </div> <!--карточка-->

        <div class="row">
            <div class="col-md-6">
                <div class="plate">
                    <a href="#one">
                        <?= Html::img($coverImgLeft, [
                            'style' => 'width: 100%',
                        ]) ?>

                        <div class="doors-gradient doors-gradient-pos"></div>
                        <h2 class="center-block"><?= $coverTextLeft ?></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="plate">
                    <a href="#two">
                        <?= Html::img($coverImgRight, [
                            'style' => 'width: 100%',
                        ]) ?>
                        <div class="doors-gradient doors-gradient-pos"></div>
                        <h2><?= $coverTextRight ?></h2>
                    </a>
                </div>
            </div>
        </div> <!--Обложки на соседние категории-->
    </div>
</div>
