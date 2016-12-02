<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 28.11.2016
 * Time: 13:23
 */

use yii\bootstrap;

/*  assets  */
use app\assets\MainPageAsset;

use app\assets\AppAsset;
use app\assets\MainAsset;
use app\assets\FontAsset;
use app\assets\BackAsset;

AppAsset::register($this);
$test = MainAsset::register($this);
FontAsset::register($this);
BackAsset::register($this);
MainPageAsset::register($this);

?>
<div id="Scrollspy" data-spy="scroll" data-target=".navbar" data-offset="10">
    <div class="crop">
        <div id="quick-selection" class="wrap-quick-selection">

            <?php require_once Yii::getAlias('@frontend') . '/views/layouts/quickSelection.php' ?>

        </div>
    </div>
    <?php require_once Yii::getAlias('@frontend') . '/views/site/home/block_06-doors.php'; ?>


</div>