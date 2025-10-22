<?php
use yii\helpers\Html; 
use yii\helpers\Url;
$this->context->layout = 'main'; 
$this->registerCssFile('@web/css/infra.css', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->title = 'Infrastructure of Alverstone Pharmacare';

// Include AOS (Animate on Scroll)
$this->registerCssFile('https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
$this->registerJsFile('https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', ['depends' => [\yii\web\JqueryAsset::class]]);

// Then init it
$this->registerJs("AOS.init({ duration: 700, once: true, delay: 0,});");

$this->registerCssFile('@web/css/infrastructure.css', ['depends' => [\yii\web\JqueryAsset::class]]);
?>

<!-- Modern Fullscreen Banner Section -->
<section class="infra-hero-banner position-relative d-flex align-items-center justify-content-center text-center text-white" style="height: 100vh; background-image: url('/images/banners/Manufactuirng-Unit---01.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
  <div class="overlay-gradient position-absolute w-100 h-100" style="background: linear-gradient(to bottom right, rgba(42,108,150,0.6), rgba(0,0,0,0.4)); z-index: 1;"></div>
  
  <div class="z-2 position-relative">
    <h1 class="display-4 fw-bold mb-3" data-aos="fade-down">Our Infrastructure</h1>
    <p class="lead" data-aos="fade-up" data-aos-delay="200">Engineered to uphold precision, safety, and innovation.</p>
  </div>

  <!-- Scroll Indicator -->
  <div class="scroll-indicator position-absolute bottom-4 start-50 translate-middle-x z-2" data-aos="fade-up" data-aos-delay="400">
    <!-- <span class="scroll-dot d-block mb-2"></span> -->
  </div>
</section>



<!-- Introduction Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-10 text-center">
        <h2 class="fw-bold mb-3" style="color: #2444bc;">Built <span style="color: #44b44c;">for</span> Excellence</h2>
        <p class="lead mb-0">Spread across a 2000 sqft built-up area, our state-of-the-art infrastructure is purpose-built to support optimized pharmaceutical manufacturing, ensuring quality, compliance, and efficiency at every step.</p>
      </div>
    </div>
  </div>
</section>

<!-- Mosaic Gallery Section -->
<section class="py-5 border-b">
  <div class="container px-lg-5">
    <div class="row g-4">

      <div class="col-lg-6 col-md-6" data-aos="zoom-in-up">
        <img src="/images/banners/infra-3.jpg" alt="Manufacturing Area" class="img-fluid rounded-4 shadow w-100 h-100 object-fit-cover">
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="mb-4" data-aos="fade-left" data-aos-delay="100">
          <img src="/images/banners/infra-2.jpg" alt="Lab Area" class="img-fluid rounded-4 shadow w-100 object-fit-cover" style="height: 240px;">
        </div>
        <div data-aos="fade-left" data-aos-delay="200">
          <img src="/images/banners/infra-4.jpg" alt="Machinery" class="img-fluid rounded-4 shadow w-100 object-fit-cover" style="height: 240px;">
        </div>
      </div>

      <div class="col-lg-3 col-md-12" data-aos="zoom-in" data-aos-delay="300">
        <img src="/images/banners/infra-1.jpg" alt="Storage Facility" class="img-fluid rounded-4 shadow w-100 h-100 object-fit-cover">
      </div>

    </div>
  </div>
</section>
<!-- Our Pillars of Strength -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-4" data-aos="fade-up">
      <div class="col-lg-10 text-center">
        <h2 class="fw-bold" style="color: #2444bc;">Our Pillars <span>of Strength</span></h2>
        <p class="lead">At Alverstone Pharmacare, we have developed an infrastructure that ensures reliability, consistency, and innovation in every batch we produce.</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Warehousing -->
      <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="100">
        <div class="infra-card rounded-4" style="background-image: url('/images/banners/warehousing.jpg');">
          <div class="infra-overlay">
            <h4 class="fw-bold text-white mb-2">Warehousing</h4>
            <p class="text-white small mb-0">
              Equipped with climate control and advanced inventory systems, our warehouse guarantees safe and organized storage for raw materials and finished goods, ensuring seamless supply chain operations.
            </p>
          </div>
        </div>
      </div>

      <!-- Quality Assurance -->
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="infra-card rounded-4" style="background-image: url('/images/banners/qa.jpg');">
          <div class="infra-overlay">
            <h4 class="fw-bold text-white mb-2">Quality Assurance</h4>
            <p class="text-white small mb-0">
              From procurement to dispatch, we follow stringent SOPs and QC protocols. Our in-house lab is equipped for analytical testing and validation to ensure the highest standards.
            </p>
          </div>
        </div>
      </div>

      <!-- Training Facility -->
      <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-delay="300">
        <div class="infra-card rounded-4" style="background-image: url('/images/banners/training.jpg');">
          <div class="infra-overlay">
            <h4 class="fw-bold text-white mb-2">Training Facility</h4>
            <p class="text-white small mb-0">
              We invest in regular training sessions for our team—covering GMP practices, safety, equipment handling, and quality compliance—to maintain excellence across departments.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Facility & Location Overview -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center" data-aos="fade-up">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="/images/banners/Pharmacare Manufctring.jpg" alt="Facility Overview" class="img-fluid rounded-4 shadow w-100 object-fit-cover">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3" style="color: #2444bc;">Facility & <span>Location</span> Overview</h2>
        <ul class="list-unstyled fs-5" style="font-family:Saira;">
          <li class="mb-2"><strong>Location:</strong> BIO 360 Kerala Life Sciences Industries Park, Thiruvananthapuram - 695317</li>
          <li class="mb-2"><strong>Built-up Area:</strong> 1.2 Acres dedicated to pharma-grade operational flow from production to packaging.</li>
          <li class="mb-2"><strong>Current Operations:</strong> Focused on Dry Powder Injection & Liquid Injection, labeling, packing & quality testing with scale-ready architecture.</li>
          <li class="mb-2"><strong>Expansion Ready:</strong> Structural design allows future upgrades including tablet compression and liquid formulation units.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

