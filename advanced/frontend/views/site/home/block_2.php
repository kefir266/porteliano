<?php
/*
 * Блок с фильтром быстрого подбора:
 */


use app\assets\AppAsset;
use app\assets\MainAsset;
use app\assets\Block_2_Asset;
use yii\helpers\Html;

AppAsset::register($this);
MainAsset::register($this);
Block_2_Asset::register($this);


//TODO: разобраться с путями, вместо web в адресе появился site
$logos = [
    Html::img('../../web/img/catalog/logos/big/AstorMobili.jpg', ['alt'=>'AstorMobili']),
    Html::img('img/catalog/logos/big/Agoprofil.jpg', ['alt'=>'Agoprofil']),
    Html::img('img/catalog/logos/big/Ghizzi&Benatti.jpg',['alt'=>'Ghizzi&Benatti']),
    Html::img('img/catalog/logos/big/Longhi.jpg',['alt'=>'Longhi']),
    Html::img('img/catalog/logos/big/PaoloLucchetta.jpg',['alt'=>'PaoloLucchetta']),
]

?>

<div class="wrap-Catalog">

        <div class="panel-Catalog">
            <h2>Каталог</h2>

            <div class="tiles">
                <div class="entryDoors">
                    <div class="doors-gradient">
                        <h3>ВХОДНЫЕ ДВЕРИ</h3>
                    </div>
                </div>
                <div class="grips">
                    <div class="doors-gradient">
                        <h3>РУЧКИ</h3>
                    </div>
                </div>
                <div class="septa">
                    <div class="doors-gradient">
                        <h3>МЕЖКОМНАТНЫЕ<br/> ПЕРЕГОРОДКИ</h3>
                    </div>
                </div>
                <div class="interiorDoors">
                    <div class="doors-gradient">
                        <h3>МЕЖКОМНАТНЫЕ ДВЕРИ</h3>
                    </div>
                </div>
            </div>
            
            <div class="running-ribbon">
                <div class="view">
                    <ul>
                        <?php
                        // TODO: сделать логотипы в серой гамме и цветные
                        for ($i = 0; $i < count($logos);$i++){
                            echo '<li>'.$logos[$i].'</li>';
                        }
                        ?>
                    </ul>
                </div>
                <div id="show">
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
            </div>


        </div>

            <?php
            /*echo Carousel::widget ( [
                'items' => [
                    [
                        'content' => '<img style="width:474px;height:296px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel003.jpg"/>',
                        'caption' => '<h2>Yii Gii</h2><p>Удобный встроенный генератор кода. Модули, модели на основе таблиц в БД и, конечно же, CRUD</p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:474px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel002.jpg"/>',
                        'caption' => '<h2>Отличный отладчик</h2><p>Легко подключается, помнит все запросы http, БД и логи</p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img style="width:474px" src="//nix-tips.ru/wp-content/uploads/2014/11/carousel001.jpg"/>',
                        'caption' => '<h2>Быстрый старт</h2><p>Установка и обновление через composer</p>',
                        'options' => []
                    ]
                ],
                'options' => [
                    'style' => 'width:474px;' // Задаем ширину контейнера
                ]
            ]);*/
            ?>
        </div>


