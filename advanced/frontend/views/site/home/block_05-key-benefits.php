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

?>
<div class="wrap-key-benefits">
    <div class="panel-key-benefits">
        <?= Html::tag('h2','Ключевые преимущества');?>
        <span class="glyphicon glyphicon-time"></span>
        <span class="glyphicon glyphicon-star"></span>
        <span class="glyphicon glyphicon-alert"></span>
        <span class="glyphicon glyphicon-scale"></span>
        <span class="glyphicon glyphicon-calc"></span>
        <span class="glyphicon glyphicon-ruby"></span>
    </div>
</div>
