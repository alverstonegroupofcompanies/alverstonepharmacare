<?php
use yii\helpers\Html;
$this->context->layout = 'main'; 
$this->registerCssFile('@web/css/home.css', ['depends' => [\yii\web\JqueryAsset::class]]);

$this->registerJs(<<<JS
function animateSlide(event) {
  var currentSlide = \$(event.target).find('.owl-item').eq(event.item.index);
  currentSlide.find('[data-animate]').each(function () {
    var animation = \$(this).data('animate');
    \$(this).removeClass('animate__animated ' + animation); // reset
    void this.offsetWidth; // reflow trick
    \$(this).addClass('animate__animated ' + animation);
  });
   // Refresh AOS on carousel change
  if (typeof AOS !== 'undefined') {
    AOS.refresh();
  }
}

\$('.custom-carousel').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    dots: true,
    onInitialized: function() {
      // Refresh AOS once Owl is fully initialized
      AOS.init({
        once: true
      });
      AOS.refresh();
    },
    onTranslated: function() {
      AOS.refresh(); // Reapply animations after each slide change
    }
  });
JS);



$this->registerJs(<<<JS
  let minLoadTime = 1000;
  let startTime = Date.now();

  $(window).on('load', function () {
    let elapsed = Date.now() - startTime;
    let remaining = minLoadTime - elapsed;

    setTimeout(function () {
      $('#pharma-loader-wrapper').fadeOut('slow');
    }, remaining > 0 ? remaining : 0);
  });
JS);
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
?>

<!-- Pharma Capsule Loader -->
<!-- <div id="pharma-loader-wrapper">
  <div class="pharma-loader">
    <div class="capsule"></div>
    <p class="loader-text">Alverstone Pharmacare</p>
  </div>
</div> -->

<!-- Carousel Section -->
<div class="owl-carousel owl-theme custom-carousel">

    <!-- Slide 1 -->
    <div class="carousel-slide">
        <?= Html::img('@web/images/slide1.png', ['alt' => 'High Quality Medicines', 'class' => 'carousel-img']) ?>
        <div class="carousel-caption-left" data-aos="fade-right">
            <h3>Partner with Alverstone Pharmacare</h3>
            <p>Register your pharmacy with us and gain access to high-quality medicines, competitive pricing, and dedicated support.</p>
            <a href="https://forms.gle/DWjvf2kz24u5fDZQ8" class="btn btn-gradient">Register Now</a>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-slide">
        <?= Html::img('@web/images/carousel/medium-vecteezy_ai-generated-medical-vials-production-line-in-a_41299860_medium.jpg', ['alt' => 'State-of-the-Art Manufacturing', 'class' => 'carousel-img']) ?>
        <div class="carousel-caption-left" data-aos="fade-right">
            <h3>Advanced Manufacturing Facility</h3>
            <p>Discover our cutting-edge sterile injectables production facility, ensuring precision, safety, and quality in every batch.</p>
            <a href="<?= Yii::$app->request->baseUrl ?>/site/infrastructure" class="btn btn-gradient">Know More</a>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-slide">
        <?= Html::img('@web/images/carousel/medium-vecteezy_ai-generated-pharmaceutical-bottle-manufacturing-factory_39863874_medium.jpg', ['alt' => 'Third-Party Products', 'class' => 'carousel-img']) ?>
        <div class="carousel-caption-left" data-aos="fade-right">
            <h3>Trusted Third-Party Products</h3>
            <p>We partner with reliable third-party manufacturers to deliver branded pharmaceutical products under the Alverstone name.</p>
            <a href="<?= Yii::$app->request->baseUrl ?>/site/contact" class="btn btn-gradient">Contact Us</a>
        </div>
    </div>

    <!-- Slide 4 -->
    <div class="carousel-slide">
        <?= Html::img('@web/images/carousel/medium-vecteezy_round-white-tablets-pills-on-dark-background-selective_7774388_medium.jpg', ['alt' => 'Global Presence', 'class' => 'carousel-img']) ?>
        <div class="carousel-caption-left" data-aos="fade-right">
            <h3>Global Reach & Compliance</h3>
            <p>From India to international markets, we ensure regulatory compliance and high-quality healthcare solutions for all our partners.</p>
            <a href="<?= Yii::$app->request->baseUrl ?>/site/about" class="btn btn-gradient">Learn More</a>
        </div>
    </div>

</div>


<!-- About Us Section -->
<section class="about-us-section py-5 mt-5" style="background: url('<?= Yii::$app->request->baseUrl ?>/images/banners/peach.webp') no-repeat center center / cover;">
  <div class="container">
    <div class="text-center mb-5">
       <h2 class="section-title mb-3" data-aos="fade-up" data-aos-duration="1000">About Alverstone Pharmacare</h2>
      <p class="text-muted">Driven by safety, innovation, and purpose-built manufacturing.</p>
    </div>
    <div class="row g-4">

      <!-- EHS -->
      <div class="col-md-4">
        <div class="about-card-wrapper" data-aos="slide-up" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="300">
          <div class="about-card p-4 text-center h-100">
            <div class="icon mb-3">
              <i class="fas fa-leaf gradient-icon"></i>
            </div>
            <h5 class="fw-bold mb-2">Environment, Health & Safety</h5>
            <p class="text-muted">We operate sustainably with a sharp focus on health, safety, and environmental compliance to protect people and the planet.</p>
          </div>
        </div>
      </div>

      <!-- Infrastructure -->
      <div class="col-md-4">
        <div class="about-card-wrapper" data-aos="slide-up" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="400">
          <div class="about-card p-4 text-center h-100">
            <div class="icon mb-3">
              <i class="fas fa-industry gradient-icon"></i>
            </div>
            <h5 class="fw-bold mb-2">State-of-the-Art Infrastructure</h5>
            <p class="text-muted">Our South India facility is equipped with advanced cleanroom systems, automated machinery, and strict quality control labs.</p>
          </div>
        </div>
      </div>

      <!-- Vision -->
      <div class="col-md-4">
        <div class="about-card-wrapper" data-aos="slide-up" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="500">
          <div class="about-card p-4 text-center h-100">
            <div class="icon mb-3">
              <i class="fas fa-eye gradient-icon"></i>
            </div>
            <h5 class="fw-bold mb-2">Our Vision</h5>
            <p class="text-muted">To become a global leader in sterile injectables through innovation, ethics, and accessible healthcare solutions.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Our Offerings Section -->

<section class="our-offerings-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">
        Our <span style="color: #44b44c;" data-aos="fade-up">Offerings</span>
      </h2>
      <p class="text-muted">
        Alverstone Pharmacare delivers reliable, quality-assured injectable solutions — both from our own manufacturing and carefully vetted third-party partners.
      </p>
    </div>

    <div class="row g-4">
      <!-- In-house Manufacturing -->
      <div class="col-md-6">
        <div class="offering-card" onclick="toggleContent(this)" data-aos="fade-up-right" data-aos-duration="1000">
          <div class="card-bg">
            <img src="/images/banners/Manufactuirng-Unit---01.jpg" alt="In-House" />
            <div class="card-overlay">
              <div class="card-content">
                <h5>In-House Manufactured Injectables</h5>
                <p>
                  We specialize in high-quality dry powder and liquid injections at our South India facility. Our operations are built on precision, regulatory compliance, and long-term reliability.
                </p>
              </div>
            </div>
            <div class="card-title-bar">
              <h5>In-House Manufactured Injectables</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Third-Party Branding -->
      <div class="col-md-6">
        <div class="offering-card" onclick="toggleContent(this)" data-aos="fade-up-left" data-aos-duration="1000">
          <div class="card-bg">
            <img src="/images/banners/Pharmacare Manufctring.jpg" alt="Third-Party Products" />
            <div class="card-overlay">
              <div class="card-content">
                <h5>Third-Party Branded Products</h5>
                <p>
                  Manufactured by trusted partners, these pharmaceutical products are marketed under the Alverstone brand and undergo strict quality assurance protocols.
                </p>
              </div>
            </div>
            <div class="card-title-bar">
              <h5>Third-Party Branded Products</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="products-section py-5 section-colored-2">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000">Our <span style="color: #44b44c;">Products</span></h2>
      <p class="text-muted fs-5">
        Explore our range of quality-assured pharmaceutical injections manufactured at our own facility in South India.
      </p>
    </div>

    <!-- Dry Powder Injection -->
    <div class="row align-items-center py-5 px-md-4 bg-white rounded-4 shadow-sm mb-5" data-aos="fade-left">
      <div class="col-md-6 mb-4 mb-md-0">
        <?= Html::img('@web/images/banners/drypowder-injection.png', [
          'class' => 'img-fluid rounded-3 w-100',
          'alt' => 'Dry Powder Injection'
        ]) ?>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3 text-gradient">Dry Powder Injection</h3>
        <p class="text-muted fs-5 mb-4">
          Our sterile dry powder injections are meticulously formulated for stability, precision dosing, and patient safety. Manufactured under stringent GMP protocols, these products ensure optimal efficacy in therapeutic delivery.
        </p>
        <?= Html::a('Learn More', ['#'], ['class' => 'btn gradient-btn px-4 py-2 btn-lg rounded-pill text-white']) ?>
      </div>
    </div>

    <!-- Liquid Injection -->
    <div class="row align-items-center flex-md-row-reverse py-5 px-md-4 bg-white rounded-4 shadow-sm" data-aos="fade-right">
      <div class="col-md-6 mb-4 mb-md-0">
        <?= Html::img('@web/images/banners/liquid-injection.png', [
          'class' => 'img-fluid rounded-3 w-100',
          'alt' => 'Liquid Injection'
        ]) ?>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold mb-3 text-gradient">Liquid Injection</h3>
        <p class="text-muted fs-5 mb-4">
          Engineered for reliability and purity, our liquid injectable formulations cater to diverse therapeutic needs. Produced in a state-of-the-art facility, these injections comply with global regulatory standards for safety and efficacy.
        </p>
        <?= Html::a('Learn More', ['#'], ['class' => 'btn gradient-btn px-4 py-2 btn-lg rounded-pill text-white']) ?>
      </div>
    </div>
  </div>

<!-- Manufacturing Video Section -->
<section class="manufacturing-video-section py-5 mt-5" style="background-color: #f8f9fc;">
  <div class="container">
    <div class="row align-items-center gy-4">

      <!-- Left: Video Block -->
      <div class="col-lg-6">
        <div class="video-container position-relative rounded shadow overflow-hidden" style="cursor: pointer;" onclick="loadVideo()">

          <!-- Thumbnail with Video Icon and Waves -->
          <div class="video-thumbnail position-relative">
            <img src="<?= Yii::getAlias('@web') ?>/images/banners/liquid-injection.png"
                 class="img-fluid rounded w-100"
                 alt="Manufacturing Video Thumbnail">

            <!-- Wave and Icon -->
            <div class="video-icon-wrapper position-absolute top-50 start-50 translate-middle d-flex justify-content-center align-items-center">
              <span class="wave-circle"></span>
              <span class="wave-circle delay"></span>
              <span class="wave-circle delay2"></span>

              <div class="icon-circle d-flex justify-content-center align-items-center">
                <i class="fas fa-play text-white fs-4"></i>
              </div>
            </div>
          </div>

          <!-- Hidden Video -->
          <div class="video-iframe d-none">
            <div class="ratio ratio-16x9">
              <video
                id="yt-player"
                class="w-100 h-100"
                controls
                preload="metadata"
                title="Manufacturing Video"
              >
                <source src="<?= Yii::getAlias('@web') ?>/videos/221_TVZJXzEzMDBfVjEtMDA4NA.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>

        </div>
      </div>

      <!-- Right: Content Block -->
      <div class="col-lg-6">
        <div class="content ps-lg-4">
          <h2 class="fw-bold mb-3"  data-aos="fade-up" data-aos-duration="1000" style="color: #24449c;">
            Inside Our <span style="color: #44b44c;">Manufacturing</span> Facility
          </h2>
          <p class="text-muted mb-4">
            Discover how our advanced manufacturing facilities and skilled workforce produce high-quality pharmaceutical products with precision and care. Watch our behind-the-scenes process in action.
          </p>
          <?= Html::a('Know More', ['site/infrastructure'], ['class' => 'btn gradient-btn px-4 py-2 btn-lg rounded-pill text-white']) ?>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Stats Section -->
<section class="stats-section py-5 text-white" style="background: linear-gradient(to right, #24449c, #44b44c);">
  <div class="container">
    <div class="row text-center g-4">
      <!-- Experience -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-calendar-check fa-2x mb-3"></i>
          <h2 class="counter" data-target="15">5+</h2>
          <p class="mb-0">Years of Excellence</p>
        </div>
      </div>

      <!-- Vials Produced -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-vial fa-2x mb-3"></i>
          <h2 class="counter" data-target="5000000">0</h2>
          <p class="mb-0">Vials Produced / Day</p>
        </div>
      </div>

      <!-- Countries Served -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-globe-asia fa-2x mb-3"></i>
          <h2 class="counter" data-target="18">3+</h2>
          <p class="mb-0">Countries Served</p>
        </div>
      </div>

      <!-- Approved Products -->
      <div class="col-md-3 col-6">
        <div class="stat-card">
          <i class="fas fa-check-circle fa-2x mb-3"></i>
          <h2 class="counter" data-target="120">0</h2>
          <p class="mb-0">Approved Products</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Divider -->
<div style="height: 6px; background: linear-gradient(to right, #44b44c, #24449c); opacity: 0.8;"></div>

<section class="py-5" style="background-color: #f8f9fa">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-5" >
      <h2 class="fw-bold display-5" style="font-family: 'Quicksand', sans-serif; color: #24449c;" data-aos="fade-up" data-aos-duration="1000">
        Our <span style="color: #44b444;">Global</span> Presence
      </h2>
      <p class="lead text-dark" style="max-width: 700px; margin: auto;">
        From our manufacturing base in India, Alverstone Pharmacare proudly supplies pharmaceutical products to key international markets.
      </p>
    </div>

    <!-- Country Cards -->
    <div class="row gx-4 gy-4">
      <?php
      $countries = [
        [
          'name' => 'India',
          'image' => 'india.jpg',
          'desc' => 'Manufacturing & Distribution',
          'locations' => ['Kerala (Head Office)', 'Tamil Nadu', 'Karnataka', 'Andhra Pradesh', 'Telangana']
        ],
        [
          'name' => 'United Arab Emirates',
          'image' => 'uae.jpg',
          'desc' => 'Pharmaceutical Exports',
          'locations' => ['Dubai']
        ],
        [
          'name' => 'Kenya',
          'image' => 'kenya.jpg',
          'desc' => 'African Healthcare Outreach',
          'locations' => ['Kenya']
        ],
        [
          'name' => 'Jordan',
          'image' => 'jordan.jpg',
          'desc' => 'Healthcare Expansion',
          'locations' => ['Jordan']
        ]
      ];

      foreach ($countries as $index => $country):
        $headingColor = ($index % 2 === 0) ? '#2444bc' : '#44b44c';
      ?>
      <div class="col-lg-3 col-md-6 d-flex">
        <div class="card-global-presence position-relative p-4 rounded-4 shadow-sm bg-white w-100 d-flex flex-column align-items-center text-center">
          <!-- Image -->
          <div class="country-image mb-3 rounded-3 overflow-hidden w-100">
            <img src="<?= Yii::$app->request->baseUrl ?>/images/countries/<?= $country['image'] ?>" 
                 alt="<?= $country['name'] ?>" 
                 class="img-fluid w-100" 
                 style="height: 160px; object-fit: cover;">
          </div>

          <!-- Heading -->
          <h5 class="fw-bold mb-2 country-heading" 
              style="color: <?= $headingColor ?>; cursor: pointer;" 
              data-index="<?= $index ?>">
            <?= $country['name'] ?>
          </h5>

          <!-- Description -->
          <p class="text-muted mb-3"><?= $country['desc'] ?></p>

          <!-- Sub Country List -->
          <ul class="list-unstyled mt-auto location-list" id="locations-<?= $index ?>">
            <?php foreach ($country['locations'] as $location): ?>
              <li class="mb-2">
                <span style="color: #44b444;">&#10148;</span>
                <?= strpos($location, 'Kerala') !== false ? '<strong>' . $location . '</strong>' : $location ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Tagline -->
    <div class="text-center mt-5">
      <p class="fw-semibold text-dark">
        Trusted by healthcare professionals worldwide – from India to the UAE, Kenya, and Jordan.
      </p>
    </div>

  </div>
</section>




<!-- Our Clients Section -->
<section class="our-clients py-5" id="clients" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold" style="font-family: 'Quicksand', sans-serif; color: #24449c;" data-aos="fade-up" data-aos-duration="1000">
        Our <span style="color: #44b444;">Clients</span>
      </h2>
      <p class="lead mt-3" style="font-family: 'Inria Sans', sans-serif; color: #555;">
        We proudly supply pharmaceutical products to corporate hospitals, government institutions, and international partners — all with a commitment to quality, compliance, and care.
      </p>
    </div>

    <!-- Owl Carousel -->
    <div class="owl-carousel owl-theme">
      <!-- Slide 1 -->
      <div class="item">
        <div class="card border-0 shadow-sm">
          <img src="<?= Yii::getAlias('@web') ?>/images/banners/modern-office-building-with-green-trees-2025-03-14-10-15-21-utc.jpg" class="card-img-top img-fluid" alt="Corporate Hospitals" style="object-fit: cover; height: 250px;">
          <div class="card-body text-center">
            <h5 class="fw-bold" style="color: #24449c;">Corporate Hospitals</h5>
            <p style="font-size: 0.95rem;">Partnering with renowned multi-specialty hospitals for consistent and quality pharmaceutical supply across India.</p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="item">
        <div class="card border-0 shadow-sm">
          <img src="<?= Yii::getAlias('@web') ?>/images/banners/physician-prescribing-medicine-to-patient-2025-01-31-06-35-55-utc.jpg" class="card-img-top img-fluid" alt="Government Institutions" style="object-fit: cover; height: 250px;">
          <div class="card-body text-center">
            <h5 class="fw-bold" style="color: #24449c;">Government Institutions</h5>
            <p style="font-size: 0.95rem;">Registered vendor for various government healthcare departments and national public health procurement agencies.</p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="item">
        <div class="card border-0 shadow-sm">
          <img src="<?= Yii::getAlias('@web') ?>/images/banners/doctors-walking-and-discussing-diagnosis-in-hospit-2025-07-21-00-18-12-utc.jpg" class="card-img-top img-fluid" alt="Export Clients" style="object-fit: cover; height: 250px;">
          <div class="card-body text-center">
            <h5 class="fw-bold" style="color: #24449c;">Export Clients</h5>
            <p style="font-size: 0.95rem;">Supplying to global healthcare providers in emerging and regulated markets, with WHO-GMP certified quality standards.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Certifications Section -->
<section class="our-certifications py-5" style="background-color: #fff;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-5 fw-bold" style="font-family: 'Quicksand', sans-serif; color: #24449c;" data-aos="fade-up" data-aos-duration="1000">
        Our <span style="color: #44b444;">Certifications</span>
      </h2>
      <p class="lead mt-3" style="font-family: 'Inria Sans', sans-serif; color: #555;">
        We adhere to globally recognized quality standards in pharmaceutical manufacturing. Our certifications reflect our commitment to excellence, safety, and compliance.
      </p>
    </div>

    <!-- Logo Loop Area -->
    <div class="text-center">
      <!-- Placeholder animation box -->
      <div class="py-5 px-3 border border-dashed rounded-3" style="border-color: #ccc; background-color: #f9f9f9;">
        <p class="mb-0" style="font-size: 1.25rem; color: #888; font-family: 'Inria Sans', sans-serif;">
          <em>Updating soon...</em>
        </p>
      </div>
    </div>
  </div>
</section>


<div class="social-float">
  <a href="https://www.facebook.com/profile.php?id=100088120728114" target="_blank" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
  <a href="https://www.linkedin.com/in/alverstone-drug-house-95744033b/" target="_blank" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
  <a href="https://twitter.com/yourpage" target="_blank" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
  <a href="https://www.youtube.com/@alverstonegroupofcompanies" target="_blank" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
  <a href="https://wa.me/919746397686" target="_blank" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
</div>



<?php
?>

<script>
  document.addEventListener("click", function (e) {
  const isHeading = e.target.classList.contains("country-heading");
  if (!isHeading) {
    document.querySelectorAll(".location-list").forEach((list) => {
      list.classList.remove("active");
    });
  }
});
  function toggleContent(card) {
    if (window.innerWidth < 768) {
      card.classList.toggle("active");
    }
  }

  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      center: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      nav: false,
      dots: true,
      items: 1, // Shows only 1 item at a time
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        992: {
          items: 1
        }
      }
    });
  });
  
  function loadVideo() {
    const container = document.querySelector('.video-container');
    const thumb = container.querySelector('.video-thumbnail');
    const videoBox = container.querySelector('.video-iframe');
    const video = container.querySelector('#yt-player');

    // Hide the thumbnail
    thumb.classList.add('d-none');

    // Show the video
    videoBox.classList.remove('d-none');

    // Play the video
    video.play();
  }
 
</script>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    const headings = document.querySelectorAll(".country-heading");

    headings.forEach((heading) => {
      heading.addEventListener("click", function () {
        const index = this.getAttribute("data-index");

        // Close all open location lists
        document.querySelectorAll(".location-list").forEach((list) => {
          if (list.id !== "locations-" + index) {
            list.classList.remove("active");
          }
        });

        // Toggle only the clicked one
        const selectedList = document.getElementById("locations-" + index);
        if (selectedList) {
          selectedList.classList.toggle("active");
        }
      });
    });
  });
</script>






