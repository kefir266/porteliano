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

<div class="contact-form">
    <div class="row">

        <div class="col-lg-10 col-lg-offset-1">
            <h2>Заполните форму</h2>
            <p>Наш менеджер свяжется с вами и раскажет о данном предложении</p>
            <hr style="
                    border: none; /* Убираем границу для браузера Firefox */
                    color: #9a2434; /* Цвет линии для остальных браузеров */
                    background-color:#9a2434; /* Цвет линии для браузера Firefox и Opera */
                    height: 2px; /* Толщина линии */
                   "/>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-10 col-md-offset-1">
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

            <?= $form->field($questionForm, 'email',
                [
                    'horizontalCssClasses' => [
                        'wrapper' => 'col-sm-2',
                    ],
                    'template' => '{input}{error}'
                ]
            )->textInput(['placeholder' => 'E-mail']); ?>

            <?= $form->field($questionForm, 'phone',
                [
                    'horizontalCssClasses' => [
                        'wrapper' => 'col-sm-2',
                    ],
                    'template' => '{input}{error}'
                ]
            )->textInput(['placeholder' => 'Телефонный номер']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 col-md-offset-1">
            <div class="form-group">
                    <?= Html::submitButton('ОТПРАВИТЬ ЗАЯВКУ', ['class' => 'btn btn-primary']) ?>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>

</div>