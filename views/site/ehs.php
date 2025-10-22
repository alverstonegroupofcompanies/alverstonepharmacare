<?php
use yii\helpers\Html; 
use yii\helpers\Url;
$this->context->layout = 'main'; 
$this->registerCssFile('@web/css/infra.css', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->title = 'Environment, Health & Safety | Alverstone Pharmacare';

$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
$this->registerCssFile('https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
$this->registerJsFile('https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs("AOS.init();");

?>
<!-- Banner Image Section -->
<section class="career-banner" style="position: relative; height: 350px; background-image: url('/images/banners/group-of-business-men-and-women-with-multiethnic-a-2025-03-09-06-35-28-utc.webp'); background-size: cover; background-position: center;">
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(42, 108, 150, 0.5); display: flex; align-items: center; justify-content: center;">
    <h1 class="text-white fw-bold" style="font-size: 2.8rem;">Join Our Team</h1>
  </div>
</section>

<!-- Why EHS Matters -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center" data-aos="fade-up">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="<?= Yii::getAlias('@web') ?>/images/banners/Pharmacare Manufctring.jpg" class="img-fluid rounded-3 shadow" alt="Why EHS is Important">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3 text-primary">Why EHS Matters at Alverstone Pharmacare</h2>
        <p class="mb-3">
          At Alverstone Pharmacare, Environment, Health, and Safety (EHS) is not just a compliance checklist — it’s a core value that shapes every aspect of our operations. As a responsible pharmaceutical manufacturer, we recognize the impact of our processes on the ecosystem, our workforce, and the communities we serve.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>We maintain **zero-discharge** manufacturing through advanced Effluent Treatment Plants (ETPs).</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Our **air and water emissions** are continuously monitored and reported under CPCB/SPCB guidelines.</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>All staff are trained in **personal protective equipment (PPE)**, safety drills, and first aid response.</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>We promote **employee health** through regular screenings, ergonomic workspaces, and wellness programs.</li>
          <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>We follow **global GMP and ISO 14001** standards to ensure safe and sustainable production environments.</li>
        </ul>
        <p class="mt-3">
          EHS isn’t a department at Alverstone — it’s our everyday discipline. Through continuous improvement, smart automation, and a safety-first mindset, we protect people, preserve the planet, and power pharmaceutical innovation responsibly.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Environment, Health & Safety Accordion -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-4" data-aos="fade-up">
      <div class="col-lg-10 text-center">
        <h2 class="fw-bold" style="color: #2444bc;">Environment, Health & Safety</h2>
        <p class="lead mt-3">Our commitment to Environment, Health & Safety (EHS) is rooted in ethics, responsibility, and compliance at every operational level.</p>
      </div>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-10">
        <div class="accordion" id="ehsAccordion">

          <!-- Environment -->
          <div class="accordion-item mb-3 shadow-sm">
            <h2 class="accordion-header" id="headingEnv">
              <button class="accordion-button fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnv" aria-expanded="true" aria-controls="collapseEnv">
                 Environment
              </button>
            </h2>
            <div id="collapseEnv" class="accordion-collapse collapse show" aria-labelledby="headingEnv" data-bs-parent="#ehsAccordion">
              <div class="accordion-body">
                We minimize our ecological footprint through green manufacturing, energy-efficient operations, and eco-friendly sourcing. Our systems are designed to reduce water usage, cut carbon emissions, and increase reliance on renewable energy sources. 
              </div>
            </div>
          </div>

          <!-- Health -->
          <div class="accordion-item mb-3 shadow-sm">
            <h2 class="accordion-header" id="headingHealth">
              <button class="accordion-button collapsed fw-bold text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHealth" aria-expanded="false" aria-controls="collapseHealth">
                 Health
              </button>
            </h2>
            <div id="collapseHealth" class="accordion-collapse collapse" aria-labelledby="headingHealth" data-bs-parent="#ehsAccordion">
              <div class="accordion-body">
                Our facilities are equipped with full-time medical professionals, routine health monitoring, vaccination drives, and counseling sessions. Employee mental health is treated with the same priority as physical wellness.
              </div>
            </div>
          </div>

          <!-- Safety -->
          <div class="accordion-item shadow-sm">
            <h2 class="accordion-header" id="headingSafety">
              <button class="accordion-button collapsed fw-bold" style="color: #e97c30;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSafety" aria-expanded="false" aria-controls="collapseSafety">
                 Safety
              </button>
            </h2>
            <div id="collapseSafety" class="accordion-collapse collapse" aria-labelledby="headingSafety" data-bs-parent="#ehsAccordion">
              <div class="accordion-body">
                Safety is ingrained in our culture. We maintain hazard analysis procedures, protective gear standards, spill control protocols, and fire prevention systems to protect our teams and assets.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sustainability Section with Image -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center" data-aos="fade-up">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?= Yii::getAlias('@web') ?>/images/banners/freepik__the-style-is-candid-image-photography-with-natural__78453.png" class="img-fluid rounded-3 shadow" alt="Sustainability">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold text-success mb-3">Our Commitment to Sustainability</h2>
        <p>We align our production and supply chain with sustainability goals, from solar panel installations to using biodegradable packaging. We publish annual environmental impact assessments and track KPIs aligned with SDG targets.</p>
      </div>
    </div>
  </div>
</section>

<!-- Health & Wellness -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-4" data-aos="fade-up">
      <div class="col-lg-10 text-center">
        <h2 class="fw-bold text-primary">Employee Health & Wellness</h2>
        <p class="lead mt-3">A healthy team is a productive team. We provide extensive support for physical and mental health.</p>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-10">
        <div class="p-4 bg-white shadow rounded-3">
          <ul class="mb-0 list-unstyled">
            <li>✔️ Ergonomic workspaces and safety-certified labs</li>
            <li>✔️ Regular yoga, meditation, and health sessions</li>
            <li>✔️ 24x7 medical team and ambulance availability</li>
            <li>✔️ Quarterly health screenings and vaccination programs</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Certifications -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row justify-content-center mb-4" data-aos="fade-up">
      <div class="col-lg-10 text-center">
        <h2 class="fw-bold" style="color: #2444bc;">Certifications & Compliance</h2>
        <p class="lead mt-3">Globally accepted standards guide our manufacturing and safety principles.</p>
      </div>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-10">
        <div class="p-4 bg-light shadow rounded-3">
          <ul class="mb-0">
            <li><strong>ISO 14001</strong>: Environmental Management System</li>
            <li><strong>ISO 45001</strong>: Occupational Health & Safety Management</li>
            <li><strong>WHO-GMP & US FDA</strong>: Quality Standards for Manufacturing</li>
            <li>Annual audits, third-party inspections, and policy reviews ensure compliance</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Emergency Preparedness -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center" data-aos="fade-up">
      <div class="col-md-6">
        <img src="<?= Yii::getAlias('@web') ?>/images/banners/freepik__the-style-is-candid-image-photography-with-natural__78452.png" class="img-fluid rounded-3 shadow" alt="Emergency Preparedness">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3" style="color: #d65f1c;">Emergency Preparedness & Response</h2>
        <p>From chemical containment to fire escape protocols, we have systems to mitigate risk across our facilities. Our Emergency Response Teams (ERTs) are trained in evacuation, CPR, and chemical spill management, conducting quarterly mock drills and compliance reviews.</p>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center" data-aos="fade-up">
      <div class="col-md-6 order-md-2">
        <img src="<?= Yii::getAlias('@web') ?>/images/banners/freepik__candid-photography-with-natural-textures-and-highl__58831.png" class="img-fluid rounded-3 shadow" alt="Waste Management">
      </div>
      <div class="col-md-6 order-md-1">
        <h2 class="fw-bold text-success mb-3">Waste Management & Pollution Control</h2>
        <p>Through our in-house ETPs, automated segregation units, and zero-liquid-discharge systems, we ensure no untreated waste escapes our plants. Continuous Emission Monitoring Systems (CEMS) track our air and water outputs to comply with CPCB/SPCB regulations.</p>
      </div>
    </div>
  </div>
</section>
