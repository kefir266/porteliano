<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 05.12.2016
 * Time: 09:05
 */
/* @var $this yii\web\View */
/* @var $model app\models\Product *//*Временно*/

/*  models  */
use app\models\Product;
/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\BasketAsset;

BasketAsset::register($this);
Yii::setAlias('@img', '@web/img/');
?>
<div class="wrap-basket">
    <!-- заголовок -->
    <div class="row">
        <div class="col-md-2 col-md-offset-3 ">
            <h1>Ваша корзина</h1>
        </div>
        <div class="col-md-2 col-md-offset-2 ">
            <h4 id="count-goods">Количество</h4>
        </div>
    </div>
    <!-- товары -->
    <?php
    // TODO: переделать на загрузку из базы
    for ($i = 0; $i < 2; $i++) {
        $countGoods = '2 товара';
        $description = 'Межкомнатная дверь Impronta Mod. Over 1000';
        $pathToIcon = '@img/Romagnoli/AC 1B.PNG';
        ?>
        <div class="row goods-row">
            <!-- иконка -->
            <div class="col-md-1 col-md-offset-3 ">
                <?= Html::img($pathToIcon, ['class' => 'door-icon', 'alt' => "door icon"]) ?>
            </div>
            <!-- описание-->
            <div class="col-md-3">
            <span class="description">
             <?= $description ?>
            </span>

            </div>
            <!-- счетик? пределать в Yii2 widget -->
            <div class="col-md-1 button-area">
                <!-- Добавить счетчик -->
                Тут счетчик

            </div>
            <!-- удаление из корзины текущего товара-->
            <div class="col-md-1 delete-area">
                <a class="delete" href="#idToDelete">Удалить</a>
            </div>
        </div>
        <!-- разделитель -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <hr/>
            </div>
        </div>

        <?php
    };
    ?>
    <!-- удаление из корзины всего товара-->
    <div class="row">
        <div class="col-md-1 col-md-offset-3 delete-all-area">
            <a class="delete" href="#idToDelete">
                Очистить корзину
            </a>
        </div>

        <div class="col-md-1 col-md-offset-3 delete-all-area">
            <a href="/#">
                <span
                    class="btn btn-default send-button"
                    role="button"
                >ОТПРАВИТЬ ЗАЯВКУ</span>
            </a>
        </div>

    </div>
</div>



