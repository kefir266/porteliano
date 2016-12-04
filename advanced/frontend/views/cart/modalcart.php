<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 04.12.2016
 * Time: 16:05
 */
?>

<? if (empty($cart)): ?>

    <H2>Корзина пуста!</H2>


<?php else: ?>

<div class="table-responsive">

    <table class="table table-condensed table-hover table-striped">


        <thead>
            <tr>
                <td>Фото</td><td>Товар</td><td>Количество</td><td>Цена</td><td>Сумма</td><td>
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            </tr>
        </thead>
        <tbody>

                <? foreach($cart->get() as $id => $item): ?>
                    <?php if (((int)($id) > 0 ) && $item['quantity'] > 0 ): ?>
                <tr>
                        <td><img src=" <?= '/img/'.$item['product']->manufacturer->title.'/'. $item['product']->img ?>"
                            class ="cart-image"></td>
                        <td><?= trim($item['product']->title) ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['product']->price->cost ?></td>
                        <td><?= $item['product']->price->cost * $item['quantity'] ?></td>
                        <td><span class="glyphicon glyphicon-remove del-item" aria-hidden="true"></span></td>
                </tr>
                    <?php endif; ?>

                <? endforeach; ?>

        </tbody>

    </table>
</div>


<?php endif; ?>
