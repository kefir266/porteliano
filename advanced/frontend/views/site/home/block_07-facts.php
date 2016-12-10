<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */


?>
<div id="facts" class="wrap-facts-at-Glance">

    <div class="img-holder"
         data-image="<?=Yii::getAlias('@web').'/img/background/facts.jpg'?>">
    </div>
    <div class="facts">
        <div class="row">

            <div class="col-md-3">
                <h1>20 лет</h1>
                <p>На  российском рынке</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h1>6 000</h1>
                <p>Довольных клиентов</p>
            </div>
            <div class="col-md-4 col-md-offset-1">
            <h1>200 000</h1>
            <p>Созданных дверей
                и перегородок</p>
        </div>

        </div>
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
