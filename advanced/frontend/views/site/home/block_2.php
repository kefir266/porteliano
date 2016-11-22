<?php
/*
 * Блок с фильтром быстрого подбора:
 */
use yii\bootstrap\ButtonDropdown;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Carousel;
use yii\bootstrap\Button;

use app\assets\AppAsset;
use app\assets\MainAsset;
use app\assets\Block_2_Asset;

AppAsset::register($this);
MainAsset::register($this);
Block_2_Asset::register($this);
?>

<div class="wrap-Catalog">

        <div class="panel-Catalog">
            <h2>Каталог</h2>

            <div class="tiles">
                <div class="entryDoors">
                    <div class="doors-gradient">
                        <h3>Входные двери</h3>
                    </div>
                </div>
                <div class="grips">
                    <div class="doors-gradient">
                        <h3>Входные двери</h3>
                    </div>
                </div>
                <div class="septa">
                    <div class="doors-gradient">
                        <h3>Межкомнатные<br/> перегородки</h3>
                    </div>
                </div>
                <div class="interiorDoors">
                    <div class="doors-gradient">
                        <h3>Межкомнатные двери</h3>
                    </div>
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

    </div>
