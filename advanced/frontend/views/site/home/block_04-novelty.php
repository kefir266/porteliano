<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */


// псевдоним пути к папке на основе другого псевдонима
Yii::setAlias('@novelty', '@web/img/novelty/');
// псевдоним пути к папке на основе другого псевдонима
Yii::setAlias('@doors', '@web/img/doors');
Yii::setAlias('@img', '@web/img');

$category = ['Межкомнатная дверь', 'Межкомнатная перегородка'];
$manufacturer = ['Ghizzi&Bennatti', 'New Design porte', 'FOA', 'Bluinterni'];
$model = ['Tekna 2', 'Giudetto IMP 1011 QQ H', 'Bell neutro', 'MULTY'];
$price = ['720', '688', '1265', '750'];

// массив для заполнения информационных полей под плитками новинок
// TODO заменить на загрузку из базы
$info = [
    [
        0 => $category[0],
        1 => $manufacturer[0],
        2 => $model[0],
        3 => $price[0],
    ],
    [
        0 => $category[0],
        1 => $manufacturer[1],
        2 => $model[1],
        3 => $price[1],
    ],
    [
        0 => $category[1],
        1 => $manufacturer[2],
        2 => $model[2],
        3 => $price[2],
    ],
    [
        0 => $category[0],
        1 => $manufacturer[3],
        2 => $model[3],
        3 => $price[3],
    ]
]
?>
<article id="novelty" class="wrap-novelty" data-item="a1">
    <div class="novelty">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <h2 class="novelty-h2">Новинки</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="novelty doors-panel running-ribbon-doors">
                    <div class="wrap-tiles view">
                        <ul>
                            <?php
                            $i = 0;
                            foreach ($products['products'] as $product) {
                                $i++;
                                if ($i == 5) {
                                    break;
                                }
                                //вывод картинок
                                if($i > 2){
                                    echo Html::beginTag('div', ['class' => 'tile']);
                                }else{
                                    echo Html::beginTag('div', ['class' => 'tile hidden-sm hidden-xs']);
                                }
                                echo Html::a(

                                    Html::img('@img/' . $product->manufacturer->title . '/'
                                        . $product->img,
                                        ['alt' => $product->title, 'class' => 'tile-img']), '/catalog/product/?id=' . $product->id);

                                //заполняется карточка

                                echo Html::beginTag('div', ['class' => 'info ']);
                                echo Html::tag('p', $product->section->title);
                                echo Html::tag('p', $product->manufacturer->title);
                                echo Html::tag('p', $product->title);
                                echo Html::tag('div', '', ['class' => 'delimiter']);
                                echo Html::beginTag('div', ['class' => 'block-4-price']);
                                $price = $product->prices;
                                echo
                                Html::tag('div',
                                    Html::tag('a', '€ '
                                        . ((count($price) > 0) ?
                                            current($price)->cost
                                            : ''), ['href' =>
                                        Url::to(['cart/add', 'id' => $product->id])]),
                                    ['class' => 'block-price-count add-to-cart',
                                        'data-id' => $product->id]
                                );
                                echo Html::tag('a',
                                    Html::tag('div', '', ['class' => 'glyphicon glyphicon-heart-empty add-to-wish ',
                                        'data-id' => $product->id]),
                                    ['href' =>
                                        Url::to(['cart/addWish', 'id' => $product->id])]);
                                echo Html::endTag('div');
                                echo Html::endTag('div');
                                echo Html::endTag('div');
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?= Url::to(['pages/dveri']); ?>" class="btn btn-default btn-lg novelty-show-more" role="button">
                    ПОКАЗАТЬ БОЛЬШЕ</a>
            </div>
        </div>
    </div>
    <div class="arrow"></div>
</article>

