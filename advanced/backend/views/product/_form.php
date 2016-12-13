<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = \yii\bootstrap\ActiveForm::begin([
        'options' => ['enctype' => 'multipart/formdata']
    ]); ?>
    <div class="row">
    <div class="col-md-12">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'section_id')->dropDownList($model->getSections()); ?>

        <?= $form->field($model, 'material_id')->dropDownList($model->getMaterials()) ?>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'style_id')->dropDownList($model->getStyles()) ?>

            <?= $form->field($model, 'manufacturer_id')->dropDownList($model->getManufacturers()) ?>

            <?= $form->field($model, 'currentPrice'
//        [
//        'options' => [
//            'tag' => 'div',
//            'class' => '',
//        ],
//        'template' => '<span class="col-md-2 col-lg-2">
//            <label class="control-label">Final item price</label>{input}{error}</span>'
//            ]
            )
                ->textInput(['type' => 'number'])?>

            <?= $form->field($model, 'currentCurrency' )->dropDownList($model->getCurrencies()) ?>
            <?= $form->field($model, 'article')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <?php

            //    echo $form->field($model, 'img')->widget(\kartik\file\FileInput::className(),
            //        [
            //            'options' => ['accept' => '/img/'.$model->manufacturer->title.'/*',],
            //            'model' => $model,
            //            //'name' => 'attachment_49[]',
            //            'pluginOptions' => [
            //                'initialCaption' => $model->title,
            //                'initialPreviewConfig' =>
            //                    ['caption' => '/img/' .$model->manufacturer->title . '/' .$model->img,],
            //                'initialPreview' =>
            //                    ['/img/' . $model->manufacturer->title . '/' . $model->img,],
            //
            //                'overwriteInitial' => false,
            //                'maxFileSize' => 2000
            //            ]
            //        ]);
            //    //    echo $form->field($model, 'img')->textInput(['maxlength' => true])

            $previews = "/frontend/web/img/products/" . $model->manufacturer->title . '/' . $model->img;
            $previewConf = ['caption' => $model->img,];

            var_dump($model->imageFile);
            echo $form->field($model, 'imageFile')->widget(FileInput::className(), [
                'name' => 'imageFile',

                'options' => ['accept' => 'image/*',],
//        'options' => [
//            'multiple' => false,
//        ],
                'model' => $model,
                'pluginOptions' => [
                    'uploadUrl' => Url::to(['/file/upload']),
                    'initialPreview' => $previews,
                    'initialPreviewAsData' => true,
                    'initialCaption'=>$model->img,
                    'initialPreviewConfig' => $previewConf,
                    'overwriteInitial' => true,
                    'uploadExtraData' => ['manufacturer' => $model->manufacturer->title,
                    ],
                    'maxFileSize' => 2000
                ]
            ]);

            ?>
        </div>
        <div class="col-md-9">
            <?php

            $previews = [];
            $previewConf = [];
            foreach ($model->files as $id => $file) {

                $previews[$id] = "/frontend/web/img/products/" . $model->manufacturer->title . '/' . $file->file;
                $previewConf[$id] = ['caption' => $file->file,];
            }
            echo $form->field($model, 'upload_files[]')->widget(\kartik\file\FileInput::className(), [
                'name' => 'attachment_49[]',
                'options' => [
                    'multiple' => true
                ],
                'pluginOptions' => [
                    'uploadUrl' => Url::to(['/file/upload']),
                    'initialPreview' => $previews,
                    'initialPreviewAsData' => true,
                    //'initialCaption'=>"",
                    'initialPreviewConfig' => $previewConf,
                    'overwriteInitial' => false,
                    'maxFileSize' => 2000
                ]
            ]);
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <?= $form->field($model, 'note')->textarea(['rows' => 3, 'maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">

        <div class="col-md-9">

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php \yii\bootstrap\ActiveForm::end(); ?>

</div>
