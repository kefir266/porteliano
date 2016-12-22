<?php
/* @var $model app\models\EntryForm */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>



<?= $form->field($model, 'name')->label('Имя')->error([]) ?>

<?= $form->field($model, 'email')->label('Е-мейл') ?>

<?= $form->field($model, 'message')->textarea(['rows' => 6])->label('Текст вопроса') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>