
<?php
$this->context->layout = 'admin';
$this->title = 'Add New Medicine';
?>

<h1><?= $this->title ?></h1>

<?= $this->render('_form', ['model' => $model]) ?>
