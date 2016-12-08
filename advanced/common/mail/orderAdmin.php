<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 08.12.2016
 * Time: 10:15
 */

use yii\helpers\Html;

use yii\bootstrap\ActiveForm;


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
            <h1>Заказ</h1>
        </div>
        <div class="col-md-2 col-md-offset-2 ">
            <h4 id="count-goods">Количество</h4>
        </div>
    </div>
    <!-- товары -->
    <div id="tab-cart">


        <?php foreach ($cart->get() as $id => $item): ?>
            <?php if (((int)($id) > 0) && $item['quantity'] > 0): ?>
                <div class="row goods-row">

                    <!-- иконка -->
<!--                    <div class="col-md-1 col-md-offset-3 ">-->
<!--                        --><?//= Html::img('/img/' . $item['product']->
//                            manufacturer->title . '/' . $item['product']->img,
//                            ['class' => 'door-icon', 'alt' => "door icon"]) ?>
<!--                    </div>-->
                    <!-- описание-->
                    <div class="col-md-3">
                        <span class="description">
                         <?= $item['product']->title ?>
                        </span>

                    </div>
                    <div class="col-md-1 button-area">
                        <?=
                        $newOrderContent[$id]['quantity'];
                        ?>
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


        <div class="row">

            <div class="col-md-1 col-md-offset-3 delete-all-area">
                <?= 'ФИО: ' . $modelOrder->customer ?>
                <?= 'Телефон: ' . $modelOrder->phone ?>
                <?= 'email: ' . $modelOrder->email ?>

            </div>

        </div>
    </div>
</div>



