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




$logos = [
    Html::img('@web/img/catalog/logos/big/AstorMobili.jpg', ['alt'=>'AstorMobili']),
    Html::img('@web/img/catalog/logos/big/Agoprofil.jpg', ['alt'=>'Agoprofil']),
    Html::img('@web/img/catalog/logos/big/Ghizzi&Benatti.jpg',['alt'=>'Ghizzi&Benatti']),
    Html::img('@web/img/catalog/logos/big/Longhi.jpg',['alt'=>'Longhi']),
    Html::img('@web/img/catalog/logos/big/PaoloLucchetta.jpg',['alt'=>'PaoloLucchetta']),
]
?>

<div class="wrap-catalog">

        <div class="panel-Catalog">
            <h2>Каталог</h2>

            <div class="tiles">
                <div class="entryDoors">
                    <div class="doors-gradient">
                        <h3>ВХОДНЫЕ ДВЕРИ</h3>
                    </div>
                </div>
                <div class="grips">
                    <div class="doors-gradient">
                        <h3>РУЧКИ</h3>
                    </div>
                </div>
                <div class="septa">
                    <div class="doors-gradient">
                        <h3>МЕЖКОМНАТНЫЕ<br/> ПЕРЕГОРОДКИ</h3>
                    </div>
                </div>
                <div class="interiorDoors">
                    <div class="doors-gradient">
                        <h3>МЕЖКОМНАТНЫЕ ДВЕРИ</h3>
                    </div>
                </div>
            </div>
            
            <div class="running-ribbon">
                <div class="view">
                    <ul>
                        <?php
                        // TODO: сделать логотипы в серой гамме и цветные
                        for ($i = 0; $i < count($logos);$i++){
                            echo '<li>'.$logos[$i].'</li>';
                        }
                        ?>
                    </ul>
                </div>
                <div id="show">
                    <button id="prev" class="btn btn-link" data-param="prev"></button>
                    <button id="next" class="btn btn-link" data-param="next"></button>
                </div>
            </div>
        </div>        
</div>


