<?php
/*
 * Блок с фильтром быстрого подбора:
 */
/* @var @questionForm \frontend\models\QuestionForm */

/*  models  */

/*  assets  */

?>

<div id="action" class="wrap-action">
    <div class="img-holder"
         data-image="<?= Yii::getAlias('@web').'/img/background/FOTO_INTRO_01.jpg'?>">
    </div>
    <div class="action-panel">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1 class="action-header">АКЦИЯ</h1>
                <p class="action-text"> 
                    Гарантированно улучшаем любое диллерское предложение на все модели итальянских дверейи перегородок на 4%!
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <?require Yii::getAlias('@frontend') . '/views/site/home/contact-form.php'?>
            </div>
        </div>



    </div>
    <script>
        
        $('.wrap-action > .img-holder').imageScroll({
            holderClass: 'imageHolder',
            container: $('.wrap-action'),
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

