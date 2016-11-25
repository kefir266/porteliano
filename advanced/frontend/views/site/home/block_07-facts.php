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

?>
<div class="wrap-facts-at-Glance">

    <div class="img-holder"
         data-image="<?='img/background/facts.jpg'?>">
    </div>

    <script>
        $('div.wrap-facts-at-Glance > .img-holder').imageScroll({
            holderClass: 'imageHolder',
            container: $('div.wrap-facts-at-Glance'),
            speed: 0.1,
            coverRatio: 0.75,
            mediaWidth: 2000,
            mediaHeight: 1415,
            holderMaxHeight: 1000,
            holderMinHeight: 950,
            parallax: true,
            touch: false
        });
    </script>

</div>
