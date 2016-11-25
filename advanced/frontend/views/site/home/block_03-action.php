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
<div  class="wrap-action">
    <div class="img-holder"
         data-image="<?='img/background/FOTO_INTRO_01.jpg'?>">
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js"></script>

    <script>

        $('.img-holder').imageScroll({
            holderClass: 'imageHolder',
            container: $('div.wrap-action'),
            speed: 0.2,
            coverRatio: 0.75,
            mediaWidth: 2000,
            mediaHeight: 1415,
            holderMinHeight: 1000,
            parallax: true,
            touch: false
        });

    </script>
</div>
