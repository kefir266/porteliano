<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Номер заказа...', 'maxlength' => 10]],

            'done' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'term' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATE]],

            'full_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Заказчик...', 'maxlength' => 100]],

        ]

    ]);




    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );


    ActiveForm::end(); ?>
<?php
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'order_id',
            'product_id',
            'price',
            'quantity',
            // 'currency_id',
            'sum',

            ['class' => 'yii\grid\ActionColumn', 'controller' => 'order-content',],
        ],
    ]);
    ?>
</div>


