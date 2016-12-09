<?php
/**
 * Created by PhpStorm.
 * User: Antis
 * Date: 27.11.2016
 * Time: 1:29
 */
/* @var @questionForm \frontend\models\QuestionForm */

/*  models  */
use  frontend\models\QuestionForm;
/*  widgets  */
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

?>

<div class="consultation-form">

    <div class="row">
        <div class="col-lg-4">
            <?php
            $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",

                    'horizontalCssClasses' => [
                        'label' => 'col-sm-4',
                        'offset' => 'col-sm-offset-4',
                        'wrapper' => 'col-sm-8',
                        'error' => '',
                        'hint' => '',
                    ],

                ],
                'options' => ['class' => 'form-horizontal'],
            ]); ?>
            <?= $form->field($questionForm, 'username',
                [
                    'horizontalCssClasses' => [
                        'wrapper' => 'col-sm-2',
                    ],
                    'template' => '{input}{error}'
                ]
            )->textInput(['placeholder' => 'Ваше имя']); ?>
        </div>
        <div class="col-lg-4">

            <?= $form->field($questionForm, 'phone',
                [
                    'horizontalCssClasses' => [
                        'wrapper' => 'col-sm-2',
                    ],
                    'template' => '{input}{error}'
                ]
            )->textInput(['placeholder' => 'Телефонный номер']); ?>
        </div>
        <div class="col-lg-4">
            <?= Html::submitButton('Получить консультацию', ['class' => 'btn consultation-button']) ?>
        </div>
        <?php ActiveForm::end() ?>
    </div>


</div>