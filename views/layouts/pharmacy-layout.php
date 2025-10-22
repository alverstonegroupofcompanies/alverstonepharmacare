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
    <meta name="description" content="Alverstone Pharmacare - High-quality pharmaceutical injectables, trusted partners, and global presence.">
    <meta name="keywords" content="Pharmaceutical, Medicines, Injectable, Healthcare, India, Alverstone Pharmacare">
    <meta name="author" content="Alverstone Pharmacare">

    <!-- Open Graph / Social Meta Tags -->
    <meta property="og:title" content="Alverstone Pharmacare">
    <meta property="og:description" content="Partner with Alverstone Pharmacare for high-quality medicines and global pharmaceutical solutions.">
    <meta property="og:image" content="<?= Yii::$app->request->baseUrl ?>/favicon.ico">
    <meta property="og:url" content="<?= Yii::$app->request->hostInfo ?>">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alverstone Pharmacare">
    <meta name="twitter:description" content="Partner with Alverstone Pharmacare for high-quality medicines and global pharmaceutical solutions.">
    <meta name="twitter:image" content="<?= Yii::$app->request->baseUrl ?>/favicon.ico">

    <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="favicon.ico">


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
  'url' => Url::to(['/site/pharmacy-chain']) . '#about-us',
  'encode' => false,
],
    [
  'label' => 'Register',
  'url' => Url::to(['/site/pharmacy-chain']) . '#register-pharmacy',
  'encode' => false,
],
//     [
//       'label' => 'About Us',
//       'url' => ['/site/about'],
//       'items' => [
//         ['label' => 'Infrastructure', 'url' => ['/site/infrastructure']],
//         ['label' => 'Visual Highlights', 'url' => ['/site/gallery']],
//         ['label' => 'Standards & Accreditations', 'url' => ['/site/accreditation']],
//       ],
//     ],
//     // ['label' => 'Our Products', 'url' => ['/medicine/index']],
//     ['label' => 'We Care', 'url' => ['/site/wecare']],
//     ['label' => 'Contact Us', 'url' => ['/site/contact']],
//     // ['label' => 'Admin Medicines', 'url' => ['/admin-medicine']],
//     ['label' => 'Careers', 'url' => ['/site/careers']],
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

<footer class="footer-modern py-5">
  <div class="container">
    <div class="row align-items-start">
      <!-- Contact Info -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h6 class="footer-heading">Contact & Location</h6>
        <ul class="footer-contact list-unstyled mb-4">
          <li><i class="fas fa-map-marker-alt me-2"></i> BIO 360 Kerala Life Sciences Industries Park, Thiruvananthapuram - 695317</li>
          <li><i class="fas fa-phone me-2"></i> +91 81398 07686</li>
          <li><i class="fas fa-envelope me-2"></i> mail@alverstones.com</li>
        </ul>

        <!-- Compact Map Card -->
        <div class="map-card mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7889.001086685652!2d76.83817079061824!3d8.64385156561158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05c185cf113b59%3A0xc052d59cbdb3e440!2sAlverstone%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1753698347605!5m2!1sen!2sin"
            style="border:0; width:100%; height:200px; border-radius:12px;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Social Links -->
      <div class="col-lg-6">
        <h6 class="footer-heading">Follow Us</h6>
        <div class="social-links mt-3">
          <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 pt-4 border-top border-light small">
      <p class="mb-0">&copy; <?= date('Y') ?> Alverstone Pharmacare. All rights reserved.</p>
    </div>
  </div>
</footer>

<style>
.footer-modern {
  background: #1b2345;
  color: #fff;
  font-family: 'Montserrat', sans-serif;
}

.footer-modern .footer-heading {
  font-weight: 700;
  color: #fff;
  margin-bottom: 20px;
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

.footer-modern .footer-contact li {
  margin-bottom: 12px;
  font-size: 0.95rem;
}

.footer-modern .footer-contact i {
  color: #44b44c;
}

/* Compact Map Card */
.footer-modern .map-card {
  border: 2px solid #44b44c;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* Social Links */
.footer-modern .social-links {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
}

.footer-modern .social-btn {
  width: 45px;
  height: 45px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(45deg, #44b44c, #2444bc);
  color: #fff;
  border-radius: 50%;
  transition: transform 0.3s, box-shadow 0.3s;
}

.footer-modern .social-btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(36,68,188,0.3);
}

.footer-modern .small {
  color: #cfd8dc;
  font-size: 0.85rem;
  margin-top: 20px;
}
</style>


<?php $this->endBody() ?>
</body>
</html>



<?php $this->endPage() ?>
