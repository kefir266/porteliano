<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'section_id')->dropDownList($model->getSections()) ?>

    <?= $form->field($model, 'material_id')->dropDownList($model->getMaterials()) ?>

    <?= $form->field($model, 'style_id')->dropDownList($model->getStyles()) ?>

    <?= $form->field($model, 'manufacturer_id')->dropDownList($model->getManufacturers()) ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
