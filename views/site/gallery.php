<?php
use yii\helpers\Html;

$this->context->layout = 'main'; 

$this->title = 'Visual Highlights';


$this->registerCssFile('@web/css/gallery.css', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs("AOS.init();");
?>

<div class="container py-5">
  <div class="text-center mb-5" data-aos="fade-down">
    <h1 class="fw-bold text-primary"><?= Html::encode($this->title) ?></h1>
    <p class="text-muted">Explore our facilities, culture, and achievements in pictures.</p>
  </div>

  <!-- Highlight Section 1 -->
  <div class="row align-items-center mb-5" data-aos="fade-up">
    <div class="col-md-6">
      <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="img-fluid rounded shadow" alt="Highlight 1">
    </div>
    <div class="col-md-6">
      <h3 class="fw-bold">State-of-the-art Manufacturing Unit</h3>
      <p>Our facility is equipped with cutting-edge machinery, ensuring precision and safety in pharmaceutical production.</p>
    </div>
  </div>

  <!-- Highlight Section 2 -->
  <div class="row align-items-center flex-md-row-reverse mb-5" data-aos="fade-left">
    <div class="col-md-6">
      <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="img-fluid rounded shadow" alt="Highlight 2">
    </div>
    <div class="col-md-6">
      <h3 class="fw-bold">Cleanroom & Compliance Zones</h3>
      <p>Visual showcase of our cleanroom, maintained under strict GMP compliance for sterile processing.</p>
    </div>
  </div>

  <!-- Gallery Grid -->
  <div class="text-center mb-4" data-aos="zoom-in">
    <h3 class="fw-bold text-secondary">Gallery Grid</h3>
    <p class="text-muted">Snapshots of our journey, team moments, and awards.</p>
  </div>
  <div class="row g-3" data-aos="fade-up">
    <div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Production Area">
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Packaging Unit">
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Quality Control Lab">
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Cleanroom Area">
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Sterile Zone">
  </div>
</div>

<div class="col-sm-6 col-md-4">
  <div class="card border-0 shadow-sm">
    <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top" alt="Team Collaboration">
  </div>
</div>

  </div>
</div>
