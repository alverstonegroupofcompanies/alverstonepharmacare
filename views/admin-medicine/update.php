<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */

$this->title = 'Update Medicine: ' . $model->name;
?>

<div class="medicine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data'], // important for file upload
    ]); ?>

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
            <img src="<?= Yii::getAlias('@web/uploads/medicine/' . $model->image) ?>" width="120" alt="Current Image" />
        </div>
    <?php endif; ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
