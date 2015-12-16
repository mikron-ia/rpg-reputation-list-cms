<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReputationEvent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reputation-event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rep_network_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'change')->textInput() ?>

    <?= $form->field($model, 'event_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
