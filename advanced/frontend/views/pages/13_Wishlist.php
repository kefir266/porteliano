<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer \frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\PagesAsset;

use app\assets\BasketAsset;

BasketAsset::register($this);
Yii::setAlias('@img', '@web/img/');

?>
<div class="wrap-wishlist">
    <!-- заголовок -->
    <div class="row">
        <div class="col-md-2 col-md-offset-3 ">
            <h1>Избранное</h1>
        </div>
        <div class="col-md-2 col-md-offset-3 ">
            <h4 id="count-goods"><?= $countGoods ?></h4>
        </div>
    </div>
    <!-- товары -->
    <?php
    // TODO: переделать на загрузку из базы
    for ($i = 0; $i < 2; $i++) {
        $countGoods = '2 товара';
        $description = 'Межкомнатная дверь Impronta Mod. Over 1000';
        $pathToIcon = '@img/Romagnoli/AC 1B.PNG';
        echo '
    <div class="row goods-row">
        <!-- иконка -->
        <div class="col-md-1 col-md-offset-3 ">
            ' .
            Html::img($pathToIcon, ['class' => 'door-icon','alt' => "door icon"])
            . '
        </div>
        <!-- описание и удаление -->
        <div class="col-md-4">
            <!-- описание -->
            <div class="row">
                <div class="col-md-12">
                    <span class="description">
                    ' . $description . '
                    </span>
                </div>
            </div>
            <!-- удаление -->
            <div class="row">
                <div class="col-md-12">
                    <a class="delete" href="#idToDelete">Удалить</a>
                </div>
            </div>
        </div>
        <!-- кнопка в корзину -->
        <div class="col-md-1 button-area">
            <a href="/#">
                <span
                    class="glyphicon glyphicon-shopping-cart btn btn-default basket-button"
                    role="button"
                ></span>
            </a>
        </div>
    </div>
    ';
    }
    ?>
    <!-- разделитель -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3 ">
            <hr/>
        </div>
    </div>
</div>


