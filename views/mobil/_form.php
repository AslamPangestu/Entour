<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'merek_mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kapasitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'palt')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
