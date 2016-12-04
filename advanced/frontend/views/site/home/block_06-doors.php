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
Yii::setAlias('@img', '@web/img');

// TODO заменить на загрузку из базы
$category = ['Входная дверь'];
$doorData_2 = ['Bauxt', 'Bauxt', 'Security', 'Bauxt'];
$doorData_3 = ['Export 1106', 'Export 1136', 'SECURITY', 'Elite 1115'];
$price = ['1545', '1545', '2119', '2194'];

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
                        <?php require Yii::getAlias('@frontend')."/views/layouts/ribbonElement.php"; ?>
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



