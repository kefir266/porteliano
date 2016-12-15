<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */


?>
<article id="contacts" class="wrap-contacts">
    <!--  Интерактивная карта-->
    <div class="hidden-xs" style="width: 100%; height: 100%">
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true">
    </script>
    </div>
    <div class="map visible-xs"></div>
    <!--  Статичная карта  
    <a href="https://yandex.ru/maps/?um=constructor:-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor" alt="" style="border: 0;" /></a>

    <a href="https://yandex.ru/maps/?um=constructor%3A-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;width=480&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor" alt="" style="border: 0;" /></a>
    -->

    <? require Yii::getAlias('@frontend') . '/views/site/home/contact-formBackCall.php' ?>


</article>
