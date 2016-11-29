<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\SeptaAsset;

SeptaAsset::register($this);

Yii::setAlias('@septa', '@web/img/05/');

$this->params['breadcrumbs'][] = [
    'label' => 'Двери',
    'url' => Url::to(['pages/dveri']),
    'template' => "<li> {link} </li>\n", // template for this link only

];

$bottomHead = 'Раздвижные двери и межкомнатные перегородки – функциональные решения для планировки пространств';
$bottomContent_1 = 'Не забывая об эстетической привлекательности, многие люди стремятся рационально использовать пространство своего дома, и межкомнатные двери являются отличным функциональным решением такой задачи. Такие конструкции сегодня пользуются особой популярностью и поэтому в нашем каталоге представлены самые разнообразные межкомнатные перегородки из различных материалов и раздвижные двери от итальянских производителей.';
$bottomContent_2 = 'Именно они позволят значительно сэкономить место в жилом или рабочем помещении, которое никогда не бывает лишним, а еще одно их достоинство — легкость и бесшумность открывания. Выполненные из дерева, металла и стекла, раздвижные конструкции также имеют оригинальный дизайн, поэтому итальянские межкомнатные двери и перегородки из нашего ассортимента Вы сможете использовать в интерьере любого стиля — от классики и ретро до этники и хай-тека.';
?>
<div class="wrap">
    <div class="container-fluid">
        <div class="wrap-tiles">
            <div class="row">
                <div class="col-md-10">
                    <?= Html::tag('h2', 'Раздвижные перегородки'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?= Html::beginTag('a', ['href' => '#']); ?>
                    <?= Html::img("@septa/septa_01.jpg",
                        ['alt' => "door_0$i", 'class' => 'tile']); ?>
                    <?= Html::endTag('a'); ?>
                </div>
                <div class="col-md-6">
                    <?= Html::beginTag('a', ['href' => '#']); ?>
                    <?= Html::img("@septa/septa_02.jpg",
                        ['alt' => "door_0$i", 'class' => 'tile']); ?>
                    <?= Html::endTag('a'); ?>
                </div>
                <div class="col-md-3">
                    <?= Html::beginTag('a', ['href' => '#']); ?>
                    <?= Html::img("@septa/septa_03.jpg",
                        ['alt' => "door_0$i", 'class' => 'tile']); ?>
                    <?= Html::endTag('a'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?= Html::tag('h4', $bottomHead); ?>
                    <?= Html::tag('p', $bottomContent_1); ?>
                    <?= Html::tag('p', $bottomContent_2); ?>
                </div>
            </div>

        </div>
    </div>
</div>
