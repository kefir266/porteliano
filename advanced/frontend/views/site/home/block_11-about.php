<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */


?>
<article id="about" class="wrap-about">
    <div class="row">
        <div class="col-md-12">
            <h1 class="block-header">О КОМПАНИИ</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <p class="about-left">
                Элитные итальянские двери, межкомнатные и входные — оцените красоту и качество моделей из Италии
            </p>
        </div>
        <div class="col-md-5">
            <p class="about-right">                
                Мы всегда сможем предложить то, чего нет у наших конкурентов, так как мы работаем с большим количеством фабрик, как высокотехнологичных, полностью автоматизированных, так и с мастерскими, где плотники филигранно вытачивают каждую деталь вручную. Важно отметить, что очень часто при выполнении сложных заказов нам приходится состыковывать несколько фабрик, чтобы произвести на свет заказ продукции, которую ни одна из них сама сделать не способна.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="<?= Url::to(['pages/about']); ?>"
               class="btn btn-default btn-lg get-consultation"
               role="button">
                Получить бесплатную консультацию
            </a>
        </div>
    </div>
    
</article>
