<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileupload\FileUpload;
use dosamigos\fileupload\FileUploadUI;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'section_id')->dropDownList($model->getSections());   ?>

    <?= $form->field($model, 'material_id')->dropDownList($model->getMaterials()) ?>

    <?= $form->field($model, 'style_id')->dropDownList($model->getStyles()) ?>

    <?= $form->field($model, 'manufacturer_id')->dropDownList($model->getManufacturers()) ?>

<!--    --><?//= FileUpload::widget([
//        'model' => $model,
//        'attribute' => 'img',
//        'url' => ['product/ImageUpload', 'id' => $model->id], // your url, this is just for demo purposes,
//        'options' => ['accept' => 'img/*'],
//        'clientOptions' => [
//            'maxFileSize' => 1000000
//        ],
//        // Also, you can specify jQuery-File-Upload events
//        // see: https://github.com/blueimp/jQuery-File-Upload/wiki/Options#processing-callback-options
//        'clientEvents' => [
////            'fileuploaddone' => 'function(e, data) {
////                                console.log(e);
////                                console.log(data);
////                            }',
////            'fileuploadfail' => 'function(e, data) {
////                                console.log(e);
////                                console.log(data);
////                            }',
//        ],
//    ]);?>
    <?= FileUploadUI::widget([
        'model' => $model,
        'attribute' => 'img',
        'url' => ['admin/product/imageUpload', 'id' => $model->id],
        'gallery' => true,
        'fieldOptions' => [
            'accept' => 'img/*'
        ],
        'clientOptions' => [
            'maxFileSize' => 2000000
        ],
        // ...
        'clientEvents' => [
//            'fileuploaddone' => 'function(e, data) {
//                                    console.log(e);
//                                    console.log(data);
//                                }',
//            'fileuploadfail' => 'function(e, data) {
//                                    console.log(e);
//                                    console.log(data);
//                                }',
        ],
    ]);
    ?>
    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
