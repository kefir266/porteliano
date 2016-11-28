<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/*  models  */
use app\models\Section;

/*  widgets  */


/*  assets  */
use app\assets\FontAsset;
use app\assets\MainAsset;
use app\assets\AppAsset;
use app\assets\BackAsset;

FontAsset::register($this);
AppAsset::register($this);
MainAsset::register($this);
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
    <div class="wrap-quick-selection">

        <?php require Yii::getAlias('@frontend').'/views/layouts/quickSelection.php' ?>

    </div>
</div>