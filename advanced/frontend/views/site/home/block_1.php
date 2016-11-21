<?php
/*
 * Блок с фильтром быстрого подбора:
 */
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Button;

use app\assets\FontAsset;
use app\assets\Block_1_Asset;
use app\assets\AppAsset;

FontAsset::register($this);
AppAsset::register($this);
Block_1_Asset::register($this);


?>
<?php
$items = ['1' => 'Межкомнатные двери', '2' => 'Входные двери', '3' => 'Перегородки' ];
$items = [
    ['label' => 'Межкомнатные двери', 'url' => '#'],
    ['label' => 'Входные двери', 'url' => '#'],
    ['label' => 'Перегородки', 'url' => '#'],
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
            <h2>Межкомнатные двери</h2>
            <div class="material">
                <h5>Материал</h5>
                <?php
                echo ButtonDropdown::widget([
                    'options' => ['class' => 'btn-default'],
                    'split' => true,
                    'label' => 'Со стеклом',
                    'dropdown' => [
                        'items' => [
                            ['label' => 'Со стеклом', 'url' => '#'],
                            ['label' => 'DropdownB', 'url' => '#'],
                        ],
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
                    'label' => 'Современный',
                    'dropdown' => [
                        'items' => [
                            ['label' => 'Со стеклом', 'url' => '#'],
                            ['label' => 'DropdownB', 'url' => '#'],
                        ],
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
                        'items' => [
                            ['label' => 'Со стеклом', 'url' => '#'],
                            ['label' => 'DropdownB', 'url' => '#'],
                        ],
                    ],
                ]);
                ?>
            </div>
            <div class="price">
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