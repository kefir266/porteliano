<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
/*  assets  */
use app\assets\AppAsset;
use app\assets\MainAsset;

AppAsset::register($this);
MainAsset::register($this);

Yii::setAlias('@imgLogos', '@web/img/catalog/logos');
// TODO: перенести массив $fileNames(возможно и $alt) в базу
$logos =[];
$directoryLogo = Yii::getAlias('@webroot').'/img/catalog/logos';

if (file_exists($directoryLogo)) {
    $fileNames = array_diff(scandir($directoryLogo), ['..', '.']);
    for ($i = 2; $i < count($fileNames); $i++){
        $alt = preg_replace("/\.\w+/i",'',$fileNames[$i]);
        $logos[] = Html::img('@imgLogos/'.$fileNames[$i], ['alt'=>"$alt"]);
    }
}
?>

<div class="wrap-catalog">

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
                        for ($i = 0; $i < count($logos); $i++){
                            echo '<li class="gray"><a href="#">'.$logos[$i].'</a></li>';
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


