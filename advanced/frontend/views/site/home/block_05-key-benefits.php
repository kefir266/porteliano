<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */
use app\assets\AppAsset;
use app\assets\MainAsset;

AppAsset::register($this);
MainAsset::register($this);

$testText = [
    'Компания "Porteliano" появилась на российском рынке в 1996 году и по праву заняла лидирующие позиции.',
    'Для нас нет границ, мы воплотимв жизнь любые Ваши идеи, даже те,которые кажутся нереальными.',
    'Пунктуальность, компетентностьи профессионализм сопровождаютнашу продукцию на всех этапах.',
    'Мы работаем более чем с 50 производителями, известными не только в России и Италии, но и за их пределами.',
    'В основе успеха лежат материалы высочайшего качества.',
    'Для каждого клиента есть подходящий по бюджету вариант, будь то элитные двери  или изделия средней ценовой категории.',
]
?>
<div class="wrap-key-benefits">
    <div class="panel-key-benefits">
        <?= Html::tag('h2','Ключевые преимущества');?>
        <!---->
        <div class="panel-icons">
            <span class="glyphicon glyphicon-time"></span>
            <span class="glyphicon glyphicon-ruby"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-scale"></span>
            <span class="glyphicon glyphicon-alert"></span>
            <span class="glyphicon glyphicon-calc"></span>
        </div>
    </div>
</div>
