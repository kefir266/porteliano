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


// псевдоним пути к папке на основе другого псевдонима
Yii::setAlias('@novelty', '@web/img/novelty/');
?>
<div class="wrap-novelty">
    <div class="novelty">
        <?=Html::tag('h3','Новинки');?>
            <?=Html::img('@novelty/door_1.jpg',
                        ['alt'=>'door_1', 'class' => 'tile']);?>
            <?=Html::img('@novelty/door_2.jpg',
                        ['alt'=>'door_1', 'class' => 'tile']);?>
            <?=Html::img('@novelty/door_3.jpg',
                        ['alt'=>'door_1', 'class' => 'tile']);?>
            <?=Html::img('@novelty/door_4.jpg',
                        ['alt'=>'door_1', 'class' => 'tile']);?>
    </div>
</div>
