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

use app\models\Section;

use app\assets\BackAsset;

BackAsset::register($this);

$sections = new Section();

$items = [];
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}
?>
<!---->
<div id="quick-selection" class="wrap-quick-selection">
    <div class="panel-quick-selection">
        <div class="row">
            <div style="display: flex" class="col-sm-12">
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
            </div>
        </div>
        <div class="row">
            <div style="display: flex" class="col-sm-12">
                <h2 class="section-title"
                    section-id=<?= $products['section']->id ?>><?= $products['section']->title ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ">
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
            </div>
        </div>
        <div class="row">
            <div style="display: flex" class="col-sm-12">
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
        </div>


    </div>
</div>
