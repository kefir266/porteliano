<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/formdata']
    ]); ?>


    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'section_id')->dropDownList($model->getSections()); ?>

    <?= $form->field($model, 'material_id')->dropDownList($model->getMaterials()) ?>

    <?= $form->field($model, 'style_id')->dropDownList($model->getStyles()) ?>

    <?= $form->field($model, 'manufacturer_id')->dropDownList($model->getManufacturers()) ?>


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

    $previews = "/img/" . $model->manufacturer->title . '/' . $model->img;
    $previewConf = ['caption' => $model->img,];

    echo $form->field($model, 'img')->widget(\kartik\file\FileInput::className(), [
        //'name' => 'attachment_49[]',
        'options' => ['accept' => '/img/'.$model->manufacturer->title.'/*',],
//        'options' => [
//            'multiple' => false,
//        ],
        'model' => $model,
        'pluginOptions' => [
            'initialPreview' => $previews,
            'initialPreviewAsData' => true,
            'initialCaption'=>$model->img,
            'initialPreviewConfig' => $previewConf,
            'overwriteInitial' => true,
            'maxFileSize' => 2000
        ]
    ]);

    ?>



    <?php

    $previews = [];
    $previewConf = [];
    foreach ($model->files as $id => $file) {

        $previews[$id] = "/img/" . $model->manufacturer->title . '/' . $file->file;
        $previewConf[$id] = ['caption' => $file->file,];
    }
    echo $form->field($model, 'upload_files[]')->widget(\kartik\file\FileInput::className(), [
        'name' => 'attachment_49[]',
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'initialPreview' => $previews,
            'initialPreviewAsData' => true,
            //'initialCaption'=>"",
            'initialPreviewConfig' => $previewConf,
            'overwriteInitial' => false,
            'maxFileSize' => 2000
        ]
    ]);
    ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
