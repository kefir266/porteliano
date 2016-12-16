<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
            'section.title',
            'material.title',
            'style.title',
            'manufacturer.title',
            'currentPrice',
            'currentCurrency',
            'img',
            'article',
            'note',
            'description:ntext',

        ],
    ]) ?>
    <?php

    $previews = "/img/products/" . $model->manufacturer->title . '/' . $model->img;
    $previewConf = ['caption' => $model->img,];

    echo \kartik\widgets\FileInput::widget([
        'name' => 'attachment_49[]',
        'model' => $model,
        'disabled' => true,

//        'options' => ['accept' => '/img/'.$model->manufacturer->title.'/*',],
//        'options' => [
//            'multiple' => false,
//        ],

        'pluginOptions' => [
            'initialPreview' => $previews,
            'initialPreviewAsData' => true,
            'initialCaption'=>$model->img,
            'initialPreviewConfig' => $previewConf,
            'overwriteInitial' => true,
            'maxFileSize' => 2000
        ]
    ])
    ?>

</div>
