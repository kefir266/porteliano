<?php
/*
 * Блок с фильтром быстрого подбора:
 */

/*  models  */

/*  widgets  */
use yii\helpers\Html;

/*  assets  */

require_once Yii::getAlias('@frontend').'/views/layouts/manufacturersNames.php';
?>
<article id="manufacturers" class="wrap-manufacturers">
    <div class="row">
        <div class="col-md-12">
            <h2 class="manufacturers-h2">Производители</h2>
        </div>
    </div>
    <div class="manufacturers">
        <ul>
            <?php   foreach ($products['fabrics'] as $manufacturer): ?>
                <li>
                        <?= Html::a('', \yii\helpers\Url::to($manufacturer['website']), ['class' => 's-01_agoprofil']) ?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="arrow"></div>
</article>
