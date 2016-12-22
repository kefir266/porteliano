<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\pages\ManufInnerAsset;
ManufInnerAsset::register($this);

$this->params['breadcrumbs'][] = [
    'label' => 'Производители',
    'url' => Url::to(['/pages/manufacturers']),
    'template' => "<li> {link} </li>\n", // template for this link only
];
$this->params['breadcrumbs'][] = [
    'label' => $name,
    'url' => '#',
    'template' => "<li> {link} </li>\n", // template for this link only
];
$title = 'Традиции и инновации';

Yii::setAlias('@imgBigLogos', '@web/img/catalog/logos/big');
?>
<div class="wrap order-registration switch" data-swith="manufacturers">
    <div class="confirm-orders-title"><?=$fabric->title?> - <?=$title?></div>
    <div class="generic">
        <?=  Html::img('/img/' . $fabric->image->src,['class' => 'manuf-logo'])?>
        <?php echo $fabric->body ?>
        <?= Html::a('Перейти официальный сайт', \yii\helpers\Url::to($fabric->website)) ?>
    </div>
</div>