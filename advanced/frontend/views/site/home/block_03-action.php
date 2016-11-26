<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $modelStyle \frontend\models\QuestionForm */

/*  models  */

/*  widgets  */
use yii\helpers\Html;
/*  assets  */
use app\assets\AppAsset;
use app\assets\MainAsset;

AppAsset::register($this);
MainAsset::register($this);
?>

<div id="action" class="wrap-action">
    <div class="img-holder"
         data-image="<?= Yii::getAlias('@web').'/img/background/FOTO_INTRO_01.jpg'?>">
    </div>

    <h1>АКЦИЯ</h1>
    <p>
        Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверейи перегородок на 4%!
    </p>
    <div class="contact-form">
        <div class="row">
            <div class="col-lg-5">

            </div>
        </div>
    </div>

    <script>
        $('div.wrap-action > .img-holder').imageScroll({
            holderClass: 'imageHolder',
            container: $('div.wrap-action'),
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
