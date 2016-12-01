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
Yii::setAlias('@septa', '@web/img/septa');

// TODO заменить на загрузку из базы
$category = ['Входная дверь'];
$doorData_2 = ['Bauxt','Bauxt','Security','Bauxt'];
$doorData_3 = ['Export 1106', 'Export 1136', 'SECURITY', 'Elite 1115'];
$price = ['1545', '1545', '2119', '2194'];

// массив для заполнения информационных полей под плитками новинок

$info = [
    [
        0 => $category[0],
        1 => $doorData_2[0],
        2 => $doorData_3[0],
        3 => $price[0],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[1],
        2 => $doorData_3[1],
        3 => $price[1],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[2],
        2 => $doorData_3[2],
        3 => $price[2],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],
    [
        0 => $category[0],
        1 => $doorData_2[3],
        2 => $doorData_3[3],
        3 => $price[3],
    ],

];
//echo Html::img('@septa/septa_'.$i.'.jpg',
?>
<article id="septa" class="wrap-septa" data-item="a3">
    <div class="row">
        <div class="col-md-offset-5">
            <?=Html::tag('h2','Перегородки');?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-5">
            <div class="novelty doors-panel septa-panel running-ribbon-septa">
                <div class="wrap-tiles view">
                    <ul>
                        <?php
                        //добавляет карточки в область прокрутки $i -№ дверей
                        for ($i = 0; $i < 8; $i++) {

                            //вывод картинок
                            echo Html::beginTag('li', ['class' => 'tile']);
                            //  TODO ($i+1) для теста, поставить $i
                            echo Html::img('@septa/septa_'.($i+1).'.jpg',
                                ['alt' => 'door_' . ($i), 'class' => '']);

                            //заполняет карточку $i- № дверей, j- строка карточки
                            echo Html::beginTag('div', ['class' => 'info']);
                            for ($j = 0; $j < 3; $j++) {
                                echo Html::tag('p', $info[$i][$j]);
                            }
                            echo Html::tag('div', '', ['class' => 'delimiter']);
                            echo Html::beginTag('div', ['class' => 'block-4-price']);
                            echo Html::tag('div', '€ ' . $info[0][3], ['class' => 'block-4-price-count']);
                            echo Html::tag('div', '', ['class' => 'glyphicon glyphicon-heart-empty ']);
                            echo Html::endTag('div');
                            echo Html::endTag('div');
                            echo Html::endTag('li');
                        }
                        ?>
                    </ul>
                </div>
                <div id="show" >
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
                <a href="<?=Url::to(['pages/septa']); ?>" class="btn btn-default btn-lg" role="button">ПОКАЗАТЬ БОЛЬШЕ</a>
            </div>
        </div>
    </div>
    <div class="arrow"></div>
</article>
