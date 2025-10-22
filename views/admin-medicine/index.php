<?php
use yii\helpers\Html;

/** @var app\models\Medicine[] $medicines */
$this->context->layout = 'admin';
$this->title = 'Manage Medicines';
$this->registerCssFile('@web/css/dashboard.css', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color:#2444bc;" class="fw-bold"><?= Html::encode($this->title) ?></h2>
        <?= Html::a('<i class="fas fa-plus-circle me-1"></i> Add Medicine', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table align-middle table-hover table-bordered mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 80px;">Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th class="text-center" style="width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($medicines)): ?>
                        <tr>
                            <td colspan="4" class="text-center text-muted">No medicines found.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($medicines as $m): ?>
                            <tr>
                                <td>
                                    <?php if ($m->image): ?>
                                        <img src="<?= Yii::getAlias('@web/uploads/medicine/' . $m->image) ?>" class="img-thumbnail rounded" width="60">
                                    <?php else: ?>
                                        <span class="text-muted small">No Image</span>
                                    <?php endif; ?>
                                </td>
                                <td class="fw-semibold"><?= Html::encode($m->name) ?></td>
                                <td>
                                    <span class="badge bg-info text-dark"><?= Html::encode($m->category) ?></span>
                                </td>
                                <td class="text-center">
                                    <?= Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $m->id], ['class' => 'btn btn-outline-primary btn-sm me-1', 'title' => 'Update']) ?>
                                    <?= Html::a('<i class="fas fa-trash-alt"></i>', ['delete', 'id' => $m->id], [
                                        'class' => 'btn btn-outline-danger btn-sm',
                                        'title' => 'Delete',
                                        'data' => [
                                            'confirm' => 'Are you sure you want to delete this medicine?',
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
