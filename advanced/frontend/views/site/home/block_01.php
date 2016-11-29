<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */
use app\models\Section;

/*  widgets  */


/*  assets  */
use app\assets\FontAsset;
use app\assets\MainPageAsset;
use app\assets\AppAsset;
use app\assets\BackAsset;

FontAsset::register($this);
AppAsset::register($this);
MainPageAsset::register($this);
BackAsset::register($this);
?>
<?php




//$items = ['1' => 'Межкомнатные двери', '2' => 'Входные двери', '3' => 'Перегородки' ];
//$items = [
//    ['label' => 'Межкомнатные двери', 'url' => '#'],
//    ['label' => 'Входные двери', 'url' => '#'],
//    ['label' => 'Перегородки', 'url' => '#'],
//];
?>
<div class="crop">
    <div id="quick-selection" class="wrap-quick-selection">

        <?php require Yii::getAlias('@frontend').'/views/layouts/quickSelection.php' ?>

    </div>
</div>