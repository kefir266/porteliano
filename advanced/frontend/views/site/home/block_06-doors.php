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
    <h2><?= $sectionNames[$currentSection] ?></h2>
    <!-- Навигация -->
    <ul class="nav nav-tabs nav-pills " role="tablist">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">МЕЖКОМНАТНЫЕ</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">ВХОДНЫЕ</a></li>
    </ul>
    <!-- Содержимое вкладок -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <!-- Вкладка 'Межкомнатные'  -->
            <div id="doors-inn" class="novelty doors-panel running-ribbon-doors">
                <div class="wrap-tiles view">
                    <ul>
                        <?php foreach ($products['products'] as $product) {
                            require Yii::getAlias('@frontend') . "/views/layouts/ribbonElement.php";
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
            <!-- Вкладка 'Входные'  -->
            <div id="doors-out" class="novelty doors-panel running-ribbon-doors">
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
    </div>

    <div class="arrow"></div>
</article>



