<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 17:05
 */
/* @var $this yii\web\View */

/* @var $manufacturer \frontend\models\Manufacturer */
/*  models  */

/*  widgets  */
use yii\helpers\Html;
use yii\helpers\Url;

/*  assets  */
use app\assets\PagesAsset;

PagesAsset::register($this);
Yii::setAlias('@imgBigLogos', '@web/img/catalog/logos/big');
?>
<div class="wrap-about">
    <div class="row">
        <div class="col-md-3 col-md-offset-3">
            <h1>О компании</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
            <p>
                Компания "Porteliano" появилась на российском рынке в 1996 году и по праву заняла лидирующие позиции
                в секторе интерьера. Наша основная специфика — двери, межкомнатные перегородки, лестницы, паркет,
                мебель из дерева, стекла и алюминия, любых форм, размеров и конфигураций, в любом стиле — от
                классики до модерна, свет, зеркала, окна, а также приятные глазу и полезные в доме различные
                предметы интерьера и аксессуары.
            </p>
            <p>
                Мы работаем более чем с 50 производителями, известными не только в России и Италии, но и за их
                пределами. Это признанные специалисты своего дела, производящие высококачественную продукцию точно в
                срок. Как показали время и практика — клиенты, которые хотят сделать что-то экстраординарное, после
                долгих обсуждений в конце концов останавливаются на нашей компании, так как мы выгодно отличаемся от
                других компаний в этой области, которые привязаны к одной или нескольким фабрикам, и потому
                лимитированы как в ассортименте, так и в размерах.
            </p>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="action">
                <div class="img-holder"
                     data-image="<?= Yii::getAlias('@web') . '/img/background/FOTO_INTRO_01.jpg' ?>">
                </div>
                <h1>АКЦИЯ</h1>
                <p>
                    Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверейи
                    перегородок на 4%!
                </p>
                <?= require Yii::getAlias('@frontend') . '/views/site/home/contact-form.php' ?>
                <script>
                    $('div.action > .img-holder').imageScroll({
                        holderClass: 'imageHolder',
                        container: $('div.action'),
                        speed: 0.1,
                        coverRatio: 0.75,
                        mediaWidth: 2000,
                        mediaHeight: 1014,
                        holderMaxHeight: 1000,
                        holderMinHeight: 647,
                        parallax: true,
                        touch: false
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-1">

        </div>
        <div class="col-md-4 bottom-text">
            <p>
                Мы всегда сможем предложить то, чего нет у наших конкурентов, так как мы работаем с большим
                количеством фабрик, как высокотехнологичных, полностью автоматизированных, так и с мастерскими, где
                плотники филигранно вытачивают каждую деталь вручную. Важно отметить, что очень часто при выполнении
                сложных заказов нам приходится состыковывать несколько фабрик, чтобы произвести на свет заказ
                продукции, которую ни одна из них сама сделать не способна.
            </p>
            <p>

                Будем рады предложить Вам столь обширную гамму товаров, изготовленных нашими партнерами по вашему
                эскизу и Вашим размерам. Поверьте — для нас нет границ, мы воплотим в жизнь любые Ваши идеи, даже
                те, которые кажутся нереальными. Приходите к нам — увидите и убедитесь.
            </p>
            <p>
                Межкомнатные двери — важный элемент интерьера. Цельностеклянные и стеклянные двери невидимки
                подчеркнут прогрессивный стиль помещения, а двери из массива или шпонированные — придадут уют и
                солидность. Используя двери эконом-класса, несложно уложиться в запланированный бюджет. Если же
                средства позволяют, то можно обратить внимание на итальянские элитные двери, особенно из ценных
                пород дерева. Входные двери требуют несколько другого подхода, в котором особенно важны прочность и
                надежность. Этими качествами в полной мере обладают металлические двери. Кроме того, стоит обратить
                внимание на противопожарные образцы.
            </p>
            <p>

                Предлагаем следующие виды итальянских дверей и межкомнатных перегородок: радиусные, межкомнатные
                деревянные, из массива, стеклянные, шпонированные, из ценных пород дерева, раздвижные, эконом
                класса, элитные, входные деревянные, входные металлические, технические.
            </p>
        </div>
    </div>
</div>


