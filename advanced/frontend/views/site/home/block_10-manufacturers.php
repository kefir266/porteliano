<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */


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
            for ($i = 0; $i < count($logos); $i++){
                echo '<li class="gray wrap-resize"><a href="#">'.$logos[$i].'</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="arrow"></div>
</article>
