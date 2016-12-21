<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\bootstrap\Modal;
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

            <?php
            /*$address указывает какой view должен загрузится в Content*/
            /*$controller должен использовать $this->renderAjax*/
            $address = Url::to(['site/entry'], true);           
            
            Modal::begin([
                'headerOptions' => ['id' => 'consultation-modal-header'],
                'header' => '<h2>здесь будет то, что написано в title</h2>',
                //keeps from closing modal with esc key or by clicking out of the modal.
                // user must click cancel or X to close
                //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
                'size' => '',//
                'id' => 'get-consultation',
                'toggleButton' => [
                    'tag' => 'button',
                    'value' => $address,
                    'title' => 'Обратная связь',
                    'id' => '',
                    'class' => 'btn btn-default btn-lg get-consultation',
                    'label' => 'Получить бесплатную консультацию',
                ]
            ]);
            echo "<div id='consultation'></div>";
            Modal::end();
            ?>
        </div>
    </div>
    
</article>
