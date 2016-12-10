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
                            <?php if (isset($novelty['products'])): ?>
                                <?php foreach ($novelty['products'] as $product): ?>

                                    <?php require Yii::getAlias('@frontend') . "/views/layouts/ribbonElement.php"; ?>

                                <?php endforeach; ?>
                            <?php endif; ?>
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

