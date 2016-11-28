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

$this->params['breadcrumbs'][] = [
    'label' => 'Производители',
    'url' => Url::to(['pages/dveri']),
    'template' => "<li> {link} </li>\n", // template for this link only

];

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
<div class="wrap wrap-manuf">
    <div class="row">
        <div class="col-md-4 ">
            <h2>Производители</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">

            <?
            for ($i = 0; $i < count($manufacturer); $i++) {
                echo Html::beginTag('ul', ['class' => 'list']);
                echo Html::beginTag('li');
                echo '<a href="#">' . $manufacturer[$i] . '</a>';
                echo Html::endTag('li');
                echo Html::endTag('ul');
            }
            ?>
        </div>
        <div class="col-md-8 ">
            <?php
            for ($i = 0; $i < count($logos); $i++) {
                echo Html::beginTag('ul', ['class' => 'list-company']);
                echo Html::beginTag('li', ['class' => 'gray wrap-resize']);
                echo '<a href="#">' . $logos[$i] . '</a>';
                echo Html::endTag('li');
                echo Html::endTag('ul');
            }
            ?>
        </div>
    </div>