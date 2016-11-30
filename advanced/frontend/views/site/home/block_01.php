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
use app\assets\MainPageAsset;
use app\assets\AppAsset;
use app\assets\BackAsset;

FontAsset::register($this);
AppAsset::register($this);
MainPageAsset::register($this);
BackAsset::register($this);
?>
<?php

$sections = new Section();
$items = [];
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}


//$items = ['1' => 'Межкомнатные двери', '2' => 'Входные двери', '3' => 'Перегородки' ];
//$items = [
//    ['label' => 'Межкомнатные двери', 'url' => '#'],
//    ['label' => 'Входные двери', 'url' => '#'],
//    ['label' => 'Перегородки', 'url' => '#'],
//];
?>
<div class="crop">
    <div id="quick-selection" class="wrap-quick-selection">

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
                    'label' => "€ 500 - 2000",
                    'dropdown' => [
                        'items' => [
                            ['label' => 'Со стеклом', 'url' => '#'],
                            ['label' => 'DropdownB', 'url' => '#'],
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
</div>