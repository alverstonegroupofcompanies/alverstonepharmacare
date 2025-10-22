<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="medicine-form">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->errorSummary($model) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>
    <?= $form->field($model, 'dosage_form')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'strength')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'price')->textInput(['type' => 'number', 'step' => '0.01']) ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?php if (!empty($model->image)): ?>
        <div class="mb-3">
            <p>Current Image:</p>
            <img src="<?= Yii::getAlias('@web/uploads/medicine/' . $model->image) ?>" width="100" />
        </div>
    <?php endif; ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
