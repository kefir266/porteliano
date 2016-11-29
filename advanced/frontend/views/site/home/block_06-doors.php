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
Yii::setAlias('@doors', '@web/img/doors');

// TODO заменить на загрузку из базы
$category = ['Входная дверь'];
$doorData_2 = ['Bauxt', 'Bauxt', 'Security', 'Bauxt'];
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
    ]
]
?>
<article id="doors" class="wrap-doors" data-item="a2">
    <h2>Двери</h2>
    <!-- Навигация -->
    <ul class="nav nav-tabs nav-pills " role="tablist">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">МЕЖКОМНАТНЫЕ</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ВХОДНЫЕ</a></li>
    </ul>
    <!-- Содержимое вкладок -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="novelty doors-panel running-ribbon-doors">
                <div class="wrap-tiles view">
                    <ul>
                    <?php
                    //добавляет карточки в область прокрутки $i -№ дверей
                    for ($i = 0; $i < 4; $i++) {

                        //вывод картинок
                        echo Html::beginTag('li', ['class' => 'tile']);
                            //  TODO ($i+5) для теста, поставить $i
                            echo Html::img('@doors/door_' . ($i + 5) . '.jpg',
                                ['alt' => 'door_' . ($i + 5), 'class' => '']);

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
                <div id="show">
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
                <!--<button type="button" class="btn ">ПОКАЗАТЬ БОЛЬШЕ</button>-->
                <a href="<?= Url::to(['pages/dveri']); ?>" class="btn btn-default btn-lg" role="button">ПОКАЗАТЬ
                    БОЛЬШЕ</a>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">

        </div>
    </div>

    <div class="arrow"></div>
</article>



