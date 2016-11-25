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
<div class="wrap-Contacts">
    <!--  Интерактивная карта  -->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;width=1280&amp;height=653&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
    <!--  Статичная карта  
    <a href="https://yandex.ru/maps/?um=constructor:-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=-zt7pyu1ot07ORrKltN3hhhNxShJKgs-&amp;width=600&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor" alt="" style="border: 0;" /></a>
    -->
</div>
