<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */


Yii::setAlias('@imgLogos', '@web/img/catalog/logos');
// TODO: перенести массив $fileNames(возможно и $alt) в базу 
$logos = [];
$directoryLogo = Yii::getAlias('@webroot') . '/img/catalog/logos';

if (file_exists($directoryLogo)) {
    $fileNames = array_diff(scandir($directoryLogo), ['..', '.']);
    for ($i = 2; $i < count($fileNames); $i++) {
        $alt = preg_replace("/\.\w+/i", '', $fileNames[$i]);
        $logos[] = Html::img('@imgLogos/' . $fileNames[$i], ['alt' => "$alt"]);
    }
}
?>

<div style='display: flex' id="catalog" class="wrap-catalog">
    <div class="panel-Catalog">
        <div class="row">
            <div style="display: flex" class="col-md-12">
                <h2>Каталог</h2>
            </div>
        </div>
        <div class="row">
            <div  class="tiles">
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <div class="entryDoors">
                        <div class="doors-gradient">
                            <h3>ВХОДНЫЕ ДВЕРИ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-1 col-xs-1">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="grips">
                                <div class="doors-gradient">
                                    <h3>РУЧКИ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="septa">
                                <div class="doors-gradient">
                                    <h3>МЕЖКОМНАТНЫЕ<br/> ПЕРЕГОРОДКИ</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="interiorDoors">
                        <div class="doors-gradient">
                            <h3>МЕЖКОМНАТНЫЕ ДВЕРИ</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="running-ribbon">
                    <div class="view">
                        <ul>
                            <?php
                            for ($i = 0; $i < count($logos); $i++) {
                                echo '<li class="gray"><a href="#">' . $logos[$i] . '</a></li>';
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
        </div>


    </div>
</div>


