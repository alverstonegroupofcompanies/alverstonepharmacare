<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= Html::encode($this->title ?: 'Alverstone Pharmacare LLP') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
