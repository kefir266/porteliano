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
<div id="action-another"  class="wrap-action-another">
    <div class="img-holder"
         data-image="<?=Yii::getAlias('@web').'/img/background/anotherAction.jpg'?>">
    </div>

    <h1>АКЦИЯ</h1>
    <p>
        Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверейи перегородок на 4%!
    </p>
    <?=require 'contact-form.php'?>
    
    <script>
        $('div.wrap-action-another > .img-holder').imageScroll({
            holderClass: 'imageHolder',
            container: $('div.wrap-action-another'),
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
