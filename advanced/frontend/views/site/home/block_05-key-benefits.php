<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */


$testText = [
    [
        'ОПЫТ', 'СТАТУС', 'СЕРВИС', 'МАСШТАБ','КОНТРОЛЬ КАЧЕСТВА','ЦЕНЫ',
    ],
    [
        'Компания "Porteliano" появилась на российском рынке в 1996 году и по праву заняла лидирующие позиции.',
        'Для нас нет границ, мы воплотимв жизнь любые Ваши идеи, даже те,которые кажутся нереальными.',
        'Пунктуальность, компетентностьи профессионализм сопровождаютнашу продукцию на всех этапах.',
        'Мы работаем более чем с 50 производителями, известными не только в России и Италии, но и за их пределами.',
        'В основе успеха лежат материалы высочайшего качества.',
        'Для каждого клиента есть подходящий по бюджету вариант, будь то элитные двери  или изделия средней ценовой категории.',
    ]
]
?>
<div id="key-benefits" class="wrap-key-benefits">
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
        <div class="panel-text">
            <div class="text-block-time">
                <h4><?=$testText[0][0]?></h4>
                <p><?=$testText[1][0]?></p>
            </div>
            <div class="text-block-ruby">
                <h4><?=$testText[0][1]?></h4>
                <p><?=$testText[1][1]?></p>
            </div>
            <div class="text-block-star">
                <h4><?=$testText[0][2]?></h4>
                <p><?=$testText[1][2]?></p>
            </div>
            <div class="text-block-scale">
                <h4><?=$testText[0][3]?></h4>
                <p><?=$testText[1][3]?></p>
            </div>
            <div class="text-block-alert">
                <h4><?=$testText[0][4]?></h4>
                <p><?=$testText[1][4]?></p>
            </div>
            <div class="text-block-calc">
                <h4><?=$testText[0][5]?></h4>
                <p><?=$testText[1][5]?></p>
            </div>
        </div>
    </div>
    <div class="arrow"></div>
</div>
