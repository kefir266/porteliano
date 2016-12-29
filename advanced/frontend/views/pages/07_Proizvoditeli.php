<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer \frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */

use app\assets\PagesAsset;

PagesAsset::register($this);


//Yii::setAlias('@imgLogos', '@web/img/catalog/logos');
//// TODO: перенести массив $fileNames в базу
//$logos = [];
//$directoryLogo = Yii::getAlias('@webroot') . '/img/catalog/logos';
//
//if (file_exists($directoryLogo)) {
//    $fileNames = array_diff(scandir($directoryLogo), ['..', '.']);
//    for ($i = 2; $i < count($fileNames); $i++) {
//        $alt = preg_replace("/\.\w+/i", '', $fileNames[$i]);
//        //$logos[] = Html::img('@imgLogos/' . $fileNames[$i], ['alt' => "$alt"]);
//    }
//}
?>
<div class="wrap wrap-manuf switch" data-swith="manufacturers">
    <div class="row  mobil-width">
        <div class="col-md-4 ">
            <h2 class="manuf-header">Производители</h2>
        </div>
    </div>
    <div class="row  mobil-width">
        <div class="col-md-4 ">

            <?

            echo Html::beginTag('ul', ['class' => 'list']);
            foreach($fabrics as $manufacturer) {


                echo Html::beginTag('li');
                echo Html::a($manufacturer->title, Url::to(['/catalog/',
                    'manufacturer' => $manufacturer->id, 'section' => '0']));//['pages/manufacturers_inner', 'id' => $manufacturer->id]
                echo Html::endTag('li');

            }
            echo Html::endTag('ul');
            ?>
        </div>
        <div class="col-md-8 ">
            <?php
            echo Html::beginTag('ul', ['class' => 'list-company']);
            foreach($fabrics as $manufacturer) {
                echo Html::beginTag('li', ['class' => 'wrap-resize']);
                echo Html::a($manufacturer->title,
                    Url::to(['/catalog/',
                        'manufacturer' => $manufacturer->id, 'section' => '0']),
                    ['class' => $manufacturer->class]);
                echo Html::endTag('li');
            }
            echo Html::endTag('ul');
            ?>
        </div>
    </div>