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

    <?php echo $form->field($model, 'section_id')->dropDownList($model->getSections());   ?>

    <?= $form->field($model, 'material_id')->dropDownList($model->getMaterials()) ?>

    <?= $form->field($model, 'style_id')->dropDownList($model->getStyles()) ?>

    <?= $form->field($model, 'manufacturer_id')->dropDownList($model->getManufacturers()) ?>


    <?php
    //echo $form->field($model, 'imageFile')->fileInput();
    echo $form->field($model, 'img')->widget(\kartik\file\FileInput::className(),
        [
            'options' => ['accept' => '@frontend/web/img/*'],
            'model' => $model,
        ]);
    //echo $form->field($model, 'img')->textInput(['maxlength' => true])
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
