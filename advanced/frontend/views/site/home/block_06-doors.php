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

?>
<article id="doors" class="wrap-doors" data-item="a2">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h2 class="doors-h2"><?= $sectionNames[$currentSection] ?></h2>
        </div>
    </div>
    <!-- Навигация -->
    <div class="row">
        <div class="col-md-offset-1 col-md-10 flex-wrap">
            <ul class="nav nav-tabs nav-pills center-block" role="tablist">
                <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">МЕЖКОМНАТНЫЕ</a></li>
                <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ВХОДНЫЕ</a></li>
            </ul>
        </div>
    </div>
    <!-- Вкладки -->
    <div class="row">
        <!-- кнопка назад -->
        <div class="col-md-1 flex-vert-centr show">
            <button id="prev" class="btn btn-link " data-param="prev"></button>
        </div>
        <!-- Содержимое вкладок -->
        <div class="col-md-10">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <!-- Вкладка 'Межкомнатные'  -->
                    <div id="doors-inn" class="doors-panel running-ribbon-doors">
                        <div class="wrap-tiles view">
                            <ul>
                                <?php require Yii::getAlias('@frontend')."/views/layouts/ribbonElement.php"; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <!-- Вкладка 'Входные'  -->
                    <div id="doors-out"></div>
                </div>
            </div>
        </div>
        <!-- кнопка вперед -->
        <div class="col-md-1 show">
            <button id="next" class="btn btn-link" data-param="next"></button>
        </div>
    </div>
    <!-- Кнопка -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="<?= Url::to(['pages/dveri']); ?>" class="btn btn-default btn-lg door-show-more" role="button">
                ПОКАЗАТЬ БОЛЬШЕ</a>
        </div>
    </div>
    <div class="arrow"></div>
</article>


