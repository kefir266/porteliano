<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <?= $form->field($model, 'email') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <?= $form->field($model, 'subject') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
            </div>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>

</div>

</div>
