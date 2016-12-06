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
use app\assets\BackAsset;

BasketAsset::register($this);
BackAsset::register($this);

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
    <div id="tab-cart">
    <? if ($cart->getQuantity() === 0): ?>

        <H2>Корзина пуста!</H2>


    <?php else: ?>
    <?php  foreach($cart->get() as $id => $item): ?>
        <?php if (((int)($id) > 0 ) && $item['quantity'] > 0 ): ?>
        <div class="row goods-row">
            <!-- иконка -->
            <div class="col-md-1 col-md-offset-3 ">
                <?= Html::img('/img/'.$item['product']->manufacturer->title.'/'. $item['product']->img, ['class' => 'door-icon', 'alt' => "door icon"]) ?>
            </div>
            <!-- описание-->
            <div class="col-md-3">
            <span class="description">
             <?= $item['product']->title ?>
            </span>

            </div>
            <!-- счетик? пределать в Yii2 widget -->
            <div class="col-md-1 button-area">
                <!-- Добавить счетчик -->
                Тут счетчик

            </div>
            <!-- удаление из корзины текущего товара-->
            <div class="col-md-1 delete-area">
                <a class="delete" href="#" onclick="delItem(event, 'cart', <?= $item['product']->id ?> )">Удалить</a>
            </div>
        </div>
            <?php endif; ?>
    <?php endforeach; ?>
        <!-- разделитель -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3 ">
                <hr/>
            </div>
        </div>


    <!-- удаление из корзины всего товара-->
    <div class="row">
        <div class="col-md-1 col-md-offset-3 delete-all-area">
            <a class="delete" href="#" onclick=clearCart("cart")>
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
        <?php endif; ?>
    </div>
</div>



