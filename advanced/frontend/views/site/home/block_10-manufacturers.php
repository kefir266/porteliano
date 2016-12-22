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

                foreach ( $fabrics as $manufacturer): ?>
                <li>
                        <?= Html::a('', \yii\helpers\Url::to($manufacturer->website), ['class' => $manufacturer->class]) ?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="arrow"></div>
</article>
