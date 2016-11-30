<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 21:04
 */
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

Yii::setAlias('@imgLogos', '@web/img/catalog/logos');
Yii::setAlias('@doors', '@web/img/02/');
$this->params['breadcrumbs'][] = [
    'label' => 'Двери каталог',
    'url' => Url::to(['pages/dveri']),
    'template' => "<li> {link} </li>\n", // template for this link only
];

$sections = new Section();
$items = [];
$title = $products['section']['title'];
foreach ($sections->getMenu() as $section) {
    $items[] = $section;
}
?>
<div class="door-catalog">
    <div class="panel-quick-selection">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <?= $title ? $title : 'Межкомнатные двери' ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="flex-container">
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
        </div>
    </div>
</div>
