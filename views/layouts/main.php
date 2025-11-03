<!-- Sets up the initial part of an HTML page using Yii2's built-in features -->
<?php
// Registering assets like CSS, JS for the view
use app\assets\AppAsset;

// Importing Bootstrap 5 Navbar and Nav components
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

// Yii helper classes for HTML and breadcrumbs
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

// Register the main application asset bundle (e.g., CSS, JS files)
AppAsset::register($this);

// Marks the beginning of the page rendering lifecycle in Yii
$this->beginPage();
?>

<!-- CSS and JS registration -->
<?php
// external css
$this->registerCssFile(Yii::getAlias('@web/css/main.css'));
// OwlCarousles Libraries
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(<<<JS
    \$('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 3000,
      responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
      }
    });
  JS);
?>
<!-- aos -->
 <?php
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', [
  'depends' => [\yii\web\JqueryAsset::class]
]);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">


    <!-- Form security -->
    <?= Html::csrfMetaTags() ?> 
    <!-- SEO Meta Tags -->
 
    <!-- Meta description (default fallback) -->
    <meta name="description" content="<?= Html::encode($this->params['meta_description'] ?? 'Alverstone Pharmacare - High-quality pharmaceutical injectables, trusted partners, and global presence.') ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?= Html::encode($this->title) ?>">
    <meta property="og:description" content="Alverstone Pharmacare - High-quality pharmaceutical injectables, trusted partners, and global presence.">
    <meta property="og:image" content="https://alverstonepharmacare.com/images/banners/Pharmacare-llp-02.png">
    <meta property="og:url" content="https://alverstonepharmacare.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= Html::encode($this->title) ?>">
    <meta name="twitter:description" content="Alverstone Pharmacare - High-quality pharmaceutical injectables, trusted partners, and global presence.">
    <meta name="twitter:image" content="https://alverstonepharmacare.com/images/banners/Pharmacare-llp-02.png">


    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png">




    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
<?php $this->beginBody() ?>

<!-- Scrolling Info Bar -->
<div class="scrolling-info text-center">
    <div class="marquee">
        <i class="bi bi-envelope"></i> mail@alverstones.com &nbsp;&nbsp;&nbsp;
        <i class="bi bi-telephone"></i>  
            <a href="tel:+918139807686" style="text-decoration: none; color: #24449c;" class="me-2"> +91 81398 07686</a>
        <i class="bi bi-geo-alt"></i> BIO 360 Kerala Life Sciences Industries Park, Thiruvananthapuram - 695317
    </div>
</div>

<!-- Navigation -->
<?php
NavBar::begin([
  'options' => ['class' => 'navbar navbar-expand-lg navbar-light sticky-top py-2'],
  'brandLabel' => Html::img('@web/images/banners/Pharmacare-LLP-WIDE.png', ['alt' => 'Pharmacare', 'class' => 'd-inline-block align-text-top']),
  'brandUrl' => Yii::$app->homeUrl,
]);

echo Nav::widget([
  'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-lg-0'],
  'items' => [
    ['label' => 'Home', 'url' => ['/site/index']],
    [
      'label' => 'About Us',
      'url' => ['/site/about'],
      'items' => [
        ['label' => 'Infrastructure', 'url' => ['/site/infrastructure']],
        ['label' => 'Visual Highlights', 'url' => ['/site/gallery']],
        ['label' => 'Standards & Accreditations', 'url' => ['/site/accreditation']],
      ],
    ],
    // ['label' => 'Our Products', 'url' => ['/medicine/index']],
    ['label' => 'We Care', 'url' => ['/site/wecare']],
    ['label' => 'Contact Us', 'url' => ['/site/contact']],
    // ['label' => 'Admin Medicines', 'url' => ['/admin-medicine']],
    ['label' => 'Careers', 'url' => ['/site/careers']],
  ],
]);
NavBar::end();
?>


<!-- Page Content -->
<div class="container-fluid">
    <?= Breadcrumbs::widget([
      'links' => $this->params['breadcrumbs'] ?? [],
    ]) ?>
</div>

<?= $content ?>


<footer class="footer-modern py-5" style="background: #171b2aff; color: #fff;">
  <div class="container">
    <div class="row align-items-start">
      <!-- Branding -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <div class="brand-info">
          <img src="/images/banners/Pharmacare-LLP-WIDE.png" alt="Alverstone Logo" class="mb-3" style="max-width: 180px;">
          <p style="color: #e0e0e0; line-height: 1.8;">
            Alverstone Pharmacare delivers world-class injectables with precision and care — serving global markets from South India.
          </p>
        </div>
      </div>

      <!-- Links + Contact + Map -->
      <div class="col-lg-7">
        <div class="row g-4">
          <!-- Quick Links -->
          <div class="col-6 col-md-4">
            <h6 class="footer-heading">Quick Links</h6>
            <ul class="footer-links list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Products</a></li>
              <li><a href="#">Quality</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-6 col-md-4">
            <h6 class="footer-heading">Contact</h6>
            <ul class="footer-contact list-unstyled">
              <li><i class="fas fa-map-marker-alt me-2"></i> BIO 360 Kerala Life Sciences Industries Park, Thiruvananthapuram - 695317</li>
              <li><i class="fas fa-phone me-2"></i> +91 81398 07686</li>
              <li><i class="fas fa-envelope me-2"></i> mail@alverstones.com</li>
            </ul>
          </div>

          <!-- Map -->
          <div class="col-12 col-md-4">
            <h6 class="footer-heading">Locate Us</h6>
            <div class="footer-map position-relative rounded overflow-hidden shadow-sm border" style="padding-top: 56.25%; background-color: #e9f5ef;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7889.001086685652!2d76.83817079061824!3d8.64385156561158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05c185cf113b59%3A0xc052d59cbdb3e440!2sAlverstone%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1753698347605!5m2!1sen!2sin"
                style="border:0; position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="text-center mt-5 pt-4 border-top border-light small">
      <p class="mb-0" style="color: #cfd8dc;">&copy; <?= date('Y') ?> Alverstone Pharmacare. All rights reserved.</p>
    </div>
  </div>
</footer>

<style>
.footer-modern {
  background: #000;
  color: #fff;
}

.footer-modern .footer-heading {
  font-weight: 700;
  color: #fff;
  margin-bottom: 15px;
  position: relative;
}

.footer-modern .footer-heading::after {
  content: '';
  display: block;
  width: 50px;
  height: 3px;
  background: linear-gradient(90deg, #44b44c, #2444bc);
  margin-top: 5px;
  border-radius: 3px;
}

.footer-modern a {
  color: #cfe0ff;
  text-decoration: none;
  transition: color 0.3s;
}

.footer-modern a:hover {
  color: #44b44c;
}

.footer-modern .footer-links li,
.footer-modern .footer-contact li {
  margin-bottom: 10px;
  font-size: 0.95rem;
}

.footer-modern .footer-contact i {
  color: #44b44c;
}

.footer-modern .footer-map {
  border: 2px solid #44b44c;
}

.footer-modern .small {
  color: #cfd8dc;
  font-size: 0.85rem;
}

.footer-modern .brand-info p {
  font-size: 0.95rem;
}
</style>




<?php $this->endBody() ?>
</body>
</html>



<?php $this->endPage() ?>
