<?php
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Medicine[] $medicines */

$this->title = 'Medicines';
?>

<div class="container mt-4">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <?php foreach ($medicines as $medicine): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <?php if (!empty($medicine->image)): ?>
                        <img src="<?= Yii::getAlias('@web/uploads/medicine/' . $medicine->image) ?>"
                             class="card-img-top" alt="<?= Html::encode($medicine->name) ?>">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title"><?= Html::encode($medicine->name) ?></h5>
                        <p class="card-text"><?= Html::encode($medicine->description) ?></p>
                        <ul class="list-unstyled">
                            <li><strong>Category:</strong> <?= Html::encode($medicine->category) ?></li>
                            <li><strong>Dosage Form:</strong> <?= Html::encode($medicine->dosage_form) ?></li>
                            <li><strong>Strength:</strong> <?= Html::encode($medicine->strength) ?></li>
                            <li><strong>Price:</strong> $<?= Html::encode($medicine->price) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
