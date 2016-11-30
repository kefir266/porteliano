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
TestAsset::register($this);


// псевдоним пути к папке
Yii::setAlias('@imgLogos', '@web/img/catalog/logos');
Yii::setAlias('@doors', '@web/img/02/');
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

$this->params['breadcrumbs'][] = [
    'label' => 'Двери ',
    'url' => Url::to(['pages/dveri']),
    'template' => "<li><ins>{link}</ins></li>\n", // template for this link only
];

$this->params['breadcrumbs'][] =[
    'label' => $categoryTitle,    //'Межкомнтаные двери ',
    'url' => Url::to(['pages/doorcatalog']),
    'template' => "<li> {link} </li>\n",
];

$sections = new Section();
$items = [];
$title = $categoryTitle;//$products['section']['title'];
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}



// TODO заменить на загрузку из базы
$category = ['Входная дверь'];
$doorData_2 = ['Bauxt', 'Bauxt', 'Security', 'Bauxt'];
$doorData_3 = ['Export 1106', 'Export 1136', 'SECURITY', 'Elite 1115'];
$price = ['1545', '1545', '2119', '2194'];

// массив для заполнения информационных полей под плитками новинок
$info = [
    [
        0 => $category[0],
        1 => $doorData_2[0],
        2 => $doorData_3[0],
        3 => $price[0],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[1],
        2 => $doorData_3[1],
        3 => $price[1],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[2],
        2 => $doorData_3[2],
        3 => $price[2],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ]
]

?>
<div class="door-catalog">
    <div class="panel-quick-selection">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <?= $title ? $title : 'Межкомнатные двери' ?>
                </h2>
            </div>
        </div> <!--заголовок-->
 
        <div class="row">
            <div class="col-md-6">
                <div class="plate">
                    <a href="#one">
                        <?= Html::img($coverImgLeft, [
                            'style' => 'width: 100%',
                        ]) ?>

                        <div class="doors-gradient doors-gradient-pos"></div>
                        <h2 class="center-block"><?=$coverTextLeft?></h2>
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
                        <h2 ><?=$coverTextRight?></h2>
                    </a>
                </div>
            </div>
        </div> <!--Обложки на соседние категории-->
    </div>
</div>
