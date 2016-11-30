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
switch ($indx) {
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
        </div> <!-- заголовок -->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="flex-container">
                    <div class="material">
                        <h5>Вид</h5>
                        <?php
                        echo ButtonDropdown::widget([
                            'options' => ['class' => 'btn-default'],
                            'split' => true,
                            'label' => current($products['materials'])['label'],
                            'dropdown' => [
                                'items' =>

                                    $products['materials']
                                ,
                                'clientEvents' => ['click' => 'eventClickDropMenu'],

                            ],
                        ]);
                        ?>
                    </div>
                    <div class="style">
                        <h5>Стиль</h5>
                        <?php
                        echo ButtonDropdown::widget([
                            'options' => [
                                'class' => 'btn-default',

                            ],

                            'split' => true,
                            'label' => current($products['styles'])['label'],
                            'dropdown' => [
                                'items' => $products['styles'],
                                'clientEvents' => ['click' => 'eventClickDropMenu'],
                            ],

                        ]);
                        ?>
                    </div>
                    <div class="manufacturer">
                        <h5>Производитель</h5>
                        <?php
                        echo ButtonDropdown::widget([
                            'options' => ['class' => 'btn-default'],
                            'split' => true,
                            'label' => 'Любой',
                            'dropdown' => [
                                'items' => $products['manufacturers'],
                                'clientEvents' => ['click' => 'eventClickDropMenu'],
                            ],
                        ]);
                        ?>
                    </div>
                    <div class="block-1-price">
                        <h5>Цена</h5>
                        <?php
                        echo ButtonDropdown::widget([
                            'options' => ['class' => 'btn-default'],
                            'split' => true,
                            'label' => "€ 1000 - 2000",
                            'dropdown' => [
                                'items' => [
                                    ['label' => 'до 500 €', 'url' => '#'],
                                    ['label' => '500 - 1000 €', 'url' => '#'],
                                    ['label' => '1000 - 2000 €', 'url' => '#'],
                                    ['label' => 'от 2000 €', 'url' => '#'],
                                ],
                            ],
                        ]);
                        ?>
                    </div>
                    <div class="pick-up">
                        <?php
                        echo Button::widget([
                            'label' => 'ПОДОБРАТЬ',
                            'options' => ['class' => 'btn-default'],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div> <!-- панель выбора -->
        <div class="row">
            <div class="col-md-5">
                <span>Сортировать по:</span>
                <span class="btn btn-link">Алфавиту</span>
                <span class="btn btn-link">Цене</span>
            </div>
        </div> <!-- методы сортировки -->
        <div class="row">
            <div class="col-md-12">
                <div class="sampling-area">
                    <?php
                    // этот цикл для теста, его надо удалить при выводе из базы
                    for ($k = 0; $k < 4; $k++) {
                        //добавляет карточки в область прокрутки $i -№ дверей
                        for ($i = 0; $i < 4; $i++) {

                            //вывод картинок
                            echo Html::beginTag('li', ['class' => 'tile']);
                            //  TODO ($i+5) для теста, поставить $i
                            // TODO  indx' => $indx, в $indx поставить индекс категории для двери
                            echo Html::beginTag('a', ['href' => Url::to(['pages/door_card', 'indx' => $indx ]),]);
                            echo Html::img('@doors/door_' . ($i + 5) . '.PNG',
                                ['alt' => 'door_' . ($i + 5)]);

                            //заполняет карточку $i- № дверей, j- строка карточки
                            echo Html::beginTag('div', ['class' => 'info']);
                            for ($j = 0; $j < 3; $j++) {
                                echo Html::tag('p', $info[$i][$j]);
                            }
                            echo Html::tag('div', '', ['class' => 'delimiter']);
                            echo Html::beginTag('div', ['class' => 'block-4-price']);
                            echo Html::tag('div', '€ ' . $info[0][3], ['class' => 'block-4-price-count']);
                            echo Html::tag('div', '', ['class' => 'glyphicon glyphicon-heart-empty ']);
                            echo Html::endTag('div');
                            echo Html::endTag('div');
                            echo Html::endTag('li');
                        }
                    }
                    ?>
                </div>
            </div>
        </div> <!-- контейнер для выбранных дверей -->
        <div class="row">
            <div class="col-md-12">
                <a href="#">
                    <div class="center-flex">
                        <div class="glyphicon glyphicon-plus-sign"></div>
                        <div class="">Показать ещё</div>
                    </div>
                </a>
            </div>
        </div> <!-- кнопка показать ещё -->
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
        </div> <!-- Обложки на соседние категории -->
    </div>
</div>
