<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */
use app\models\Section;

/*  widgets  */
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Button;

/*  assets  */
use app\assets\FontAsset;
use app\assets\MainAsset;
use app\assets\AppAsset;

FontAsset::register($this);
AppAsset::register($this);
MainAsset::register($this);


?>
<?php

    $sections = new Section();

foreach ($sections->getMenu() as $section){
    $items[] = $section;
}

//$items = ['1' => 'Межкомнатные двери', '2' => 'Входные двери', '3' => 'Перегородки' ];
//$items = [
//    ['label' => 'Межкомнатные двери', 'url' => '#'],
//    ['label' => 'Входные двери', 'url' => '#'],
//    ['label' => 'Перегородки', 'url' => '#'],
//];
// TODO: Сделать загрузку из базы
$itemsToMaterials = [
    ['label' => 'Деревянные двери - ?', 'url' => '#'],
    ['label' => 'Двери со стеклом - ?', 'url' => '#'],
    ['label' => 'Стеклянные двери - ?', 'url' => '#'],
    ['label' => 'Радиусные двери - ?', 'url' => '#'],
];
$itemsToStyle = [
    ['label' => 'Любой', 'url' => '#'],
    ['label' => 'Классический', 'url' => '#'],
    ['label' => 'Современный', 'url' => '#'],
];
$itemsToManufacturer = [
    ['label' => 'Любой', 'url' => '#'],
    ['label' => 'Bosca', 'url' => '#'],
    ['label' => 'Flex', 'url' => '#'],
];
$itemsToPrice=[
    ['label' => 'Любая ', 'url' => '#'],
    ['label' => 'до 500 Euro', 'url' => '#'],
    ['label' => '500 – 1000 Euro', 'url' => '#'],
    ['label' => '1000 – 2000 Euro', 'url' => '#'],
    ['label' => ' от 2000 Euro', 'url' => '#'],
];
?>
<div class="crop">
    <div class="wrap-quick-selection">

        <div class="panel-quick-selection">
            <div class="dropdown category">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Выберите категорию
                    <b class="caret"></b>
                </a>
                <?php
                echo Dropdown::widget([
                    'items' => $items,
                ]);
                ?>
            </div>
            <h2><?= $products['section']['title'] ?></h2>
            <div class="material">
                <h5>Материал</h5>
                <?php
                echo ButtonDropdown::widget([
                    'options' => ['class' => 'btn-default'],
                    'split' => true,
                    'label' => current($products['materials'])['label'],
                    'dropdown' => [
                        'items' =>
                            $products['materials']
                        ,
                    ],
                ]);
                ?>
            </div>
            <div class="style">
                <h5>Стиль</h5>
                <?php
                echo ButtonDropdown::widget([
                    'options' => ['class' => 'btn-default'],
                    'split' => true,
                    'label' => current($products['styles'])['label'],
                    'dropdown' => [
                        'items' => $products['styles'],
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
                    'label' => current($products['manufacturers'])['label'],
                    'dropdown' => [
                        'items' => $products['manufacturers'],
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
                    'label' => "€ 500 - 2000",
                    'dropdown' => [
                        'items' => $itemsToPrice,
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
</div>