<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

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
require_once Yii::getAlias('@frontend') . '/views/layouts/manufacturersNames.php';
?>

<div id="catalog" class="wrap-catalog">
    <div class="panel-Catalog ">
        <div class="row">
            <div class="col-md-12">
                <h2>Каталог</h2>
            </div>
        </div>
        <div class="row">
            <div class="tiles">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="<?= Url::to(['/catalog', 'section' => '3']) ?>">
                        <div class="interiorDoors">
                            <div class="doors-gradient">
                                <h3>МЕЖКОМНАТНЫЕ ДВЕРИ</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-1 col-xs-1 indent-col">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="<?= Url::to(['/catalog', 'section' => '5']) ?>">
                                <div class="grips">
                                    <div class="doors-gradient">
                                        <h3>РУЧКИ</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="<?= Url::to(['/catalog', 'section' => '2']) ?>">
                                <div class="septa">
                                    <div class="doors-gradient">
                                        <h3>МЕЖКОМНАТНЫЕ<br/> ПЕРЕГОРОДКИ</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-5">
                    <a href="<?= Url::to(['/catalog', 'section' => '4']) ?>">
                        <div class="entryDoors">


                            <div class="doors-gradient">
                                <h3>ВХОДНЫЕ ДВЕРИ</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="ribbon-panel ">
        <div class="running-ribbon row">
            <div class="col-md-1 col-sm-1 col-xs-1 show">
                <button id="prev" class="btn btn-link" data-param="prev"></button>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="view">
                    <ul>
                        <?php
                        for ($i = 0; $i < count($logoNames); $i++) {
                            echo '<li> <a href="#" class="center-logo ' . $logoNames[$i] . '"></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1 show">
                <button id="next" class="btn btn-link" data-param="next"></button>
            </div>
        </div>
    </div>
</div>


