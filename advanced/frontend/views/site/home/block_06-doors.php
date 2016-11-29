<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 28.11.2016
 * Time: 13:23
 */

//TODO отбор вытащить из под галереи

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */
use app\assets\AppAsset;
use app\assets\MainAsset;


AppAsset::register($this);
MainAsset::register($this);
Yii::setAlias('@novelty', '@web/img/novelty/');

// псевдоним пути к папке на основе другого псевдонима
Yii::setAlias('@doors', '@web/img/doors');

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
    ]
]
?>
<div class="wrap-doors">
    <!-- Навигация -->
    <ul class="nav nav-tabs nav-pills " role="tablist">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">МЕЖКОМНАТНЫЕ</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ВХОДНЫЕ</a></li>
    </ul>
    <!-- Содержимое вкладок -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="novelty doors-panel">
                <div class="wrap-tiles">
                    <?php
                    echo Html::tag('h2','Двери');
                    for ($i = 5; $i < 9; $i++){
                        echo Html::beginTag('div', ['class' => 'tile']);
                        echo Html::img('@doors/door_'.$i.'.jpg',
                            ['alt'=>'door_'.$i, 'class' => '']);
                        echo Html::endTag('div');
                    }
                    ?>
                </div>
                <div class="wrap-info">
                    <?php
                    $i = 0;
                    foreach ($products['products'] as $product){
                        echo Html::beginTag('div', ['class' => 'info']);
//                        for ($j = 0; $j < 3; $j++) {
//                            echo Html::tag('p', $info[$i][$j]);
//                        }

                        echo Html::tag('p', $product->section->title);
                        echo Html::tag('p', $product->manufacturer->title);
                        echo Html::tag('p', $product->title);

                        echo Html::tag('div','',['class' => 'delimiter']);
                        echo Html::beginTag('div',['class' => 'block-4-price']);
                        echo Html::tag('div','€ '.$product->prices[0]->cost,['class' => 'block-4-price-count']);
                        echo Html::tag('div','',['class' => 'glyphicon glyphicon-heart-empty ']);
                        echo Html::endTag('div');
                        echo Html::endTag('div');
                    }//€
                    ?>

                </div>
                <!--TODO: сделать прокрутку при нажатии на стрелки -->
                <div id="show" >
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
                <button type="button" class="btn ">ПОКАЗАТЬ БОЛЬШЕ</button>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="novelty doors-panel">
                <div class="wrap-tiles">
                    <?php
                    echo Html::tag('h2','Двери');
                    for ($i = 1; $i < 5; $i++){
                        echo Html::beginTag('div', ['class' => 'tile']);
                        echo Html::img('@novelty/door_'.$i.'.jpg',
                            ['alt'=>'door_'.$i, 'class' => '']);
                        echo Html::endTag('div');
                    }
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
                <!--TODO: сделать прокрутку при нажатии на стрелки -->
                <div id="show" >
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
                <button type="button" class="btn ">ПОКАЗАТЬ БОЛЬШЕ</button>
            </div>
        </div>
    </div>

    <div class="arrow"></div>
</div>



