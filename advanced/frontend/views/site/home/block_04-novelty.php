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


// псевдоним пути к папке на основе другого псевдонима
Yii::setAlias('@novelty', '@web/img/novelty/');

$category = ['Межкомнатная дверь', 'Межкомнатная перегородка'];
$manufacturer = ['Ghizzi&Bennatti','New Design porte','FOA','Bluinterni'];
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
<div class="wrap-novelty">
    <div class="novelty">
        <div class="wrap-tiles">
            <?php
            echo Html::tag('h2','Новинки');
            echo Html::img('@novelty/door_1.jpg',
                ['alt'=>'door_1', 'class' => 'tile']);
            echo Html::img('@novelty/door_2.jpg',
                ['alt'=>'door_1', 'class' => 'tile']);
            echo Html::img('@novelty/door_3.jpg',
                ['alt'=>'door_1', 'class' => 'tile']);
            echo Html::img('@novelty/door_4.jpg',
                ['alt'=>'door_1', 'class' => 'tile']);
            ?>
        </div>
        <div class="wrap-info">
            <?php
            for ($i = 0; $i < 4; $i++){
                echo Html::beginTag('div', ['class' => 'info']);
                    for ($j = 0; $j < 3; $j++) {
                    echo Html::tag('p', $info[$i][$j]);
                    }
                    echo Html::tag('div','',['class' => 'delimiter']);
                    echo Html::beginTag('div',['class' => 'block-4-price']);
                        echo Html::tag('div','€ '.$info[$i][3],['class' => 'block-4-price-count']);
                        echo Html::tag('div','',['class' => 'glyphicon glyphicon-heart-empty ']);
                    echo Html::endTag('div');
                echo Html::endTag('div');
            }//€
            ?>

        </div>
        <button type="button" class="btn ">ПОКАЗАТЬ БОЛЬШЕ</button>
    </div>
</div>

