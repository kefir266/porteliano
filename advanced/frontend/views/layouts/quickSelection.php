<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 28.11.2016
 * Time: 14:28
 */

use yii\bootstrap\Dropdown;
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Button;

use app\assets\FontAsset;
use app\assets\MainAsset;
use app\assets\AppAsset;
use app\assets\BackAsset;

use app\models\Section;

FontAsset::register($this);
AppAsset::register($this);
MainAsset::register($this);
BackAsset::register($this);

$sections = new Section();

foreach ($sections->getMenu() as $section){
    $items[] = $section;
}
?>

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
<h2 class="section-title" section-id =<?= $products['section']['id']?> ><?= $products['section']['title'] ?></h2>
<div class="material">
    <h5>Материал</h5>
    <?php
    echo ButtonDropdown::widget([
        'options' => ['class' => 'btn-default'],
        'split' => true,
        'label' => 'Любой',
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
        'label' => 'Любой',
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
        'clientEvents' => ['click' => 'eventClickSelectButton'],

    ]);
    ?>
</div>
</div>