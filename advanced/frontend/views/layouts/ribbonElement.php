<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.12.2016
 * Time: 12:02
 */

use yii\helpers\Html;
use yii\helpers\Url;


                    //добавляет карточки в область прокрутки $i -№ дверей
                    foreach ($products['products'] as $product){
                        //вывод картинок
                        echo Html::beginTag('div', ['class' => 'tile']);
                        //  TODO ($i+5) для теста, поставить $i
                        echo Html::img('@img/'.$product->manufacturer->title.'/'
                            .$product->img,
                            ['alt' => $product->title, 'class' => '']);

                        //заполняет карточку $i -№ дверей j- строка карточки
                        echo Html::beginTag('div', ['class' => 'info']);
                        echo Html::tag('p', $product->section->title);
                        echo Html::tag('p', $product->manufacturer->title);
                        echo Html::tag('p', $product->title);
                        echo Html::tag('div', '', ['class' => 'delimiter']);
                        echo Html::beginTag('div', ['class' => 'block-4-price']);
                        $price = $product->prices;
                        echo
                        Html::tag('div',
                            Html::tag('a','€ '
                            .  (( count($price) > 0) ?
                                current($price)->cost
                                : ''), ['href' =>
                                Url::to(['cart/add','id' => $product->id])]),
                            ['class' => 'block-4-price-count add-to-cart',
                                'id' => 'p'.$product->id]
                        );
                        echo Html::tag('a',
                            Html::tag('div', '',['class' => 'glyphicon glyphicon-heart-empty add-to-wish ',
                                'id' => 'w'.$product->id]),
                            ['href' =>
                                Url::to(['cart/addWish', 'id' => $product->id])]);
                        echo Html::endTag('div');
                        echo Html::endTag('div');
                        echo Html::endTag('div');
                    }
                    ?>