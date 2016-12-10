<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */

$logoNames = [
    's-01_agoprofil',
    's-02_astor',
    's-03_bosca',
    's-04_casali',
    's-05_cocif',
    's-06_colombo',
    's-07_comas',
    's-08_cora',
    's-09_dierre',
    's-10_foa',
    's-11_ghizzi-benatti',
    's-12_henry-glass',
    's-13_impronta',
    's-14_itlas',
    's-15_lineacali',
    's-16_longhi',
    's-17_lualdi',
    's-18_design-porte',
    's-19_oikos',
    's-20_paolo-lucchetta',
    's-21_porte-in-door',
    's-22_res',
    's-23_romagnoli',
]

?>
<article id="manufacturers" class="wrap-manufacturers">
    <div class="row">
        <div class="col-md-12">
            <h2 class="manufacturers-h2">Производители</h2>
        </div>
    </div>
    <div class="manufacturers">
        <ul>
            <?php
            for ($i = 0; $i < count($logoNames); $i++){
                echo '<li>
                        <a href="#" class="'.$logoNames[$i].'"></a>
                      </li>';
            }
            ?>
        </ul>
    </div>
    <div class="arrow"></div>
</article>
