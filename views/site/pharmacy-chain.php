<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->context->layout = 'pharmacy-layout';
$this->title = 'Alverstone Pharmacare LLP - Pharmacy Chain';
?>

<style>

*{
    font-family: "Inria", sans-serif;
}

h2 {
    font-size: 2.6rem;
    color: #2444bc;
    text-align: center;
    margin-bottom: 30px;
    position: relative;
    font-weight: 600;
    font-family: "Saira", sans-serif;
}

</style>
<!-- ====== Minimal Hero Banner ====== -->
<section class="hero-banner">
    <div class="hero-content">
        <!-- <h1>Alverstone Pharmacare LLP - Pharmacy Chain</h1> -->
    </div>
</section>

<style>
.hero-banner {
    width: 100%;
    min-height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: 
        linear-gradient(
            rgba(36,68,188,0.25),
            rgba(68,180,76,0.25)
        ),
        url('<?= Yii::getAlias("@web/images/banners/Alverstone Pharmacare LLP - Pharmacy Chain.png") ?>') center/cover no-repeat;
    color: #fff;
    text-align: center;
}

</style>
<!-- ====== About Us Section ====== -->
<section class="about-us" id="about-us">
  <div class="about-container">

    <!-- Left: Image Card -->
    <div class="about-image" data-aos="fade-right">
      <div class="image-frame">
        <img src="/images/banners/infra-2.jpg" alt="Alverstone Pharmacare Facility">
        <div class="image-overlay"></div>
      </div>
    </div>

    <!-- Right: Text & Highlights -->
    <div class="about-text" data-aos="fade-left">
      <h2>About Us</h2>
      <p>
        <strong>Alverstone Pharmacare LLP</strong> stands at the forefront of Kerala’s healthcare innovation — combining trust, precision, and excellence.  
        With over <strong>500 pharmacy outlets</strong> managed under the <strong>Alverstone Group</strong>, we ensure accessible, high-quality medicines across all districts.
      </p>
      <p>
        Our vision extends beyond distribution — focusing on automation, modern manufacturing, and professional pharmacy management.  
        Through our <strong>Advanced Injection Manufacturing (AIM) Plant</strong>, we uphold world-class standards of quality and care.
      </p>

      <div class="about-highlights">
        <div class="highlight">
          <i class="fa-solid fa-hospital-user"></i>
          <h4>500+ Outlets</h4>
          <p>Serving every district of Kerala with excellence.</p>
        </div>
        <div class="highlight">
          <i class="fa-solid fa-flask"></i>
          <h4>Modern Facilities</h4>
          <p>Automated production with world-class standards.</p>
        </div>
        <div class="highlight">
          <i class="fa-solid fa-users-gear"></i>
          <h4>Professional Support</h4>
          <p>Guided management for partner pharmacies.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ====== Styles ====== -->
<style>
.about-us {
  border-radius: 24px;
  padding: 90px 6%;
  /* max-width: 1200px; */
  /* margin: 80px auto; */
  box-shadow: 0 10px 40px rgba(36,68,188,0.06);
  overflow: hidden;
}

.about-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  gap: 60px;
}

/* ====== IMAGE CARD ====== */


.image-frame {
  position: relative;
  border-radius: 24px; /* Slightly larger for thicker border */
  padding: 5px; /* Border thickness */
  background: linear-gradient(135deg, #2444bc, #44b44c); /* Gradient border */
  overflow: hidden;
  box-shadow: 0 12px 30px rgba(0,0,0,0.1);
  transition: transform 0.6s ease, box-shadow 0.4s ease;
}

.image-frame:hover {
  transform: scale(1.03);
  box-shadow: 0 20px 45px rgba(36,68,188,0.15);
}

.image-frame img {
  width: 100%;
  display: block;
  border-radius: 20px; /* Slightly smaller to fit inside the frame */
}


.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(36,68,188,0.25), rgba(68,180,76,0.25));
  opacity: 0;
  transition: opacity 0.5s ease;
}

.image-frame:hover .image-overlay {
  opacity: 1;
}

/* ====== TEXT COLUMN ====== */
.about-text h2 {
  font-size: 2.4rem;
  font-weight: 700;
  text-align: left;
  color: #2444bc;
  margin-bottom: 18px;
  position: relative;
}

.about-text h2::after {
  content: "";
  display: block;
  width: 70px;
  height: 4px;
  background: linear-gradient(90deg, #44b44c, #2444bc);
  border-radius: 4px;
  margin-top: 10px;
}

.about-text p {
  color: #555;
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 1.2rem;
  text-align: justify;
}

/* ====== HIGHLIGHTS ====== */
.about-highlights {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 25px;
}

.highlight {
  flex: 1 1 30%;
  background: #f8faff;
  border-radius: 14px;
  padding: 22px;
  text-align: center;
  box-shadow: 0 3px 10px rgba(36,68,188,0.08);
  transition: all 0.4s ease;
}

.highlight:hover {
  background: linear-gradient(135deg, rgba(36,68,188,0.08), rgba(68,180,76,0.08));
  transform: translateY(-6px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.highlight i {
  font-size: 2.2rem;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 10px;
  transition: transform 0.4s ease;
}

.highlight:hover i {
  transform: scale(1.15) rotate(5deg);
}

.highlight h4 {
  color: #2444bc;
  font-weight: 600;
  font-family: "Saira", sans-serif;
  margin-bottom: 5px;
  font-size: 1.3rem;
}

.highlight p {
  font-size: 0.95rem;
  color: #555;
  text-align: center;
}

/* ====== RESPONSIVE ====== */
@media (max-width: 900px) {
  .about-container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .about-text h2 {
    text-align: center;
    font-size: 2rem;
  }

  .about-text h2::after {
    margin: 12px auto;
  }

  .highlight {
    flex: 1 1 100%;
  }

  .image-frame {
    max-width: 380px;
    margin: 0 auto 30px;
  }
}
</style>


<!-- Optional: Include AOS for scroll animations -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
AOS.init({ duration: 900, once: true });
</script>
<!-- ====== Mission & Vision Cards with Gradient Icons ====== -->
<section class="section mission-vision-image-cards">
  <div class="container">
    <h2>Mission & Vision</h2>
    <div class="mv-cards">
      
      <!-- Mission Card -->
      <div class="mv-card">
        <div class="mv-icon">
          <i class="fas fa-bullseye"></i>
        </div>
        <h3>Our Mission</h3>
        <p>
          Making healthcare accessible, reliable, and affordable through high-quality pharmaceutical services, delivered with care and professionalism.  
          We aim to support healthier communities with innovation and trust.
        </p>
      </div>

      <!-- Vision Card -->
      <div class="mv-card">
        <div class="mv-icon">
          <i class="fas fa-eye"></i>
        </div>
        <h3>Our Vision</h3>
        <p>
          To be a leading, innovation-driven healthcare provider, empowering communities through technology, integrity, and excellence.  
          We strive to redefine healthcare experience with modern solutions and compassionate service.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome CDN -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>

<style>
/* Container styling */
.mission-vision-image-cards {
  background: url("/images/vector-bg/402376162_2e6ce9ff-dccc-414c-9d49-91eca97c80a8.jpg") no-repeat center center;
  background-size: cover;
  padding: 100px 8%;
  text-align: center;
  position: relative;
}

/* Optional subtle overlay for readability */
.mission-vision-image-cards::before {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(255,255,255,0.85);
  z-index: 0;
}

.mission-vision-image-cards .container {
  position: relative;
  z-index: 1;
}

/* Heading */
.mission-vision-image-cards h2 {
  font-size: 2.8rem;
  color: #2444bc;
  margin-bottom: 70px;
  font-weight: 700;
  position: relative;
}

.mission-vision-image-cards h2::after {
  content: "";
  display: block;
  width: 100px;
  height: 5px;
  background: linear-gradient(90deg, #44b44c, #2444bc);
  margin: 20px auto 0;
  border-radius: 6px;
}

/* Cards Grid */
.mv-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 50px;
  max-width: 1100px;
  margin: auto;
}

/* Individual Card */
.mv-card {
  background: #fff;
  padding: 50px 35px;
  border-radius: 25px;
  border: 6px solid transparent;
  border-image: linear-gradient(135deg, #44b44c, #2444bc) 1;
  box-shadow: 0 12px 35px rgba(36, 68, 188, 0.15);
  transition: all 0.35s ease;
}

.mv-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 18px 40px rgba(36, 68, 188, 0.25);
}

/* Gradient Icons */
.mv-icon {
  font-size: 4rem;
  background: linear-gradient(45deg, #44b44c, #2444bc);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 25px;
  transition: transform 0.3s ease;
}

.mv-card:hover .mv-icon {
  transform: scale(1.2) rotate(5deg);
}

/* Headings and Text */
.mv-card h3 {
  font-size: 1.8rem;
  color: #2444bc;
  margin-bottom: 20px;
  font-weight: 700;
}

.mv-card p {
  font-size: 1.1rem;
  color: #555;
  line-height: 1.8;
  letter-spacing: 0.4px;
  text-align: center;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .mission-vision-image-cards h2 {
    font-size: 2.2rem;
  }

  .mv-card h3 {
    font-size: 1.5rem;
  }

  .mv-card p {
    font-size: 1rem;
  }

  .mv-icon {
    font-size: 3rem;
  }
}
</style>

<!-- ====== Register Your Pharmacy Section ====== -->
<section class="section register-pharmacy" id="register-pharmacy">
    <div class="container">
        <h2>Register Your Pharmacy With Us</h2>
        <p>Join Alverstone Pharmacare LLP network and grow your business with professional support, trusted products, and marketing assistance.</p>
        
        <!-- Benefits Highlights -->
        <div class="benefits">
            <div class="benefit-card">
                <i class="fa-solid fa-handshake"></i>
                <h4>Professional Support</h4>
                <p>Our team helps manage your pharmacy efficiently and professionally.</p>
            </div>
            <div class="benefit-card">
                <i class="fa-solid fa-capsules"></i>
                <h4>Trusted Products</h4>
                <p>Access to high-quality, genuine pharmaceutical products for your customers.</p>
            </div>
            <div class="benefit-card">
                <i class="fa-solid fa-bullhorn"></i>
                <h4>Marketing Assistance</h4>
                <p>Promotional support to grow your pharmacy and increase customer reach.</p>
            </div>
        </div>

        <!-- Google Form Registration Button -->
        <a href="https://forms.gle/DWjvf2kz24u5fDZQ8" target="_blank" class="btn-gform">Register Your Pharmacy</a>
    </div>
</section>

<style>
.register-pharmacy {
    background: #f4f7fb;
    padding: 60px 8%;
    border-radius: 16px;
    /* max-width: 1100px;
    margin: 60px auto; */
    text-align: center;
}

.register-pharmacy h2 {
    font-size: 2.6rem;
    color: #2444bc;
    margin-bottom: 20px;
}

.register-pharmacy h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #44b44c, #2444bc);
    margin: 15px auto 0;
    border-radius: 4px;
}

.register-pharmacy p {
    font-size: 1.1rem;
    color: #555;
    margin-bottom: 50px;
}

/* Benefits Cards */
.benefits {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    margin-bottom: 40px;
}

.benefit-card {
    background: #fff;
    border: 2px solid transparent;
    border-image: linear-gradient(90deg, #44b44c, #2444bc) 1;
    border-radius: 16px;
    padding: 25px 20px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
}

.benefit-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(36,68,188,0.15);
}

.benefit-card i {
    font-size: 2.5rem;
    color: #2444bc;
    margin-bottom: 15px;
}

.benefit-card h4 {
    font-size: 1.3rem;
    color: #2444bc;
    margin-bottom: 10px;
}

.benefit-card p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

/* Google Form Button */
.btn-gform {
    display: inline-block;
    padding: 16px 40px;
    font-size: 1.1rem;
    font-weight: 600;
    text-decoration: none;
    color: #fff;
    border-radius: 40px;
    background: linear-gradient(90deg, #44b44c, #2444bc);
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    transition: transform 0.3s, box-shadow 0.3s;
}

.btn-gform:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(36,68,188,0.25);
}

@media (max-width: 992px) {
    .benefits {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- ====== Our Products Section ====== -->
<section class="section our-products">
    <div class="container">
        <h2>Our Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <i class="fa-solid fa-face-smile"></i>
                <h4>Skin & Personal Care</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-capsules"></i>
                <h4>Medicinal Products</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-baby"></i>
                <h4>Baby Care Products</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-venus"></i>
                <h4>Women’s Care Products</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-wheelchair"></i>
                <h4>Orthopedic & Pain Relief</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-leaf"></i>
                <h4>Nutritional & Health Supplements</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-kit-medical"></i>
                <h4>First Aid & Emergency Care</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-hospital"></i>
                <h4>Surgical & Hospital Supplies</h4>
            </div>
            <div class="product-card">
                <i class="fa-solid fa-paw"></i>
                <h4>Pet Care Essentials</h4>
            </div>
        </div>
    </div>
</section>

<style>
.our-products {
    background: #f4f7fb;
    padding: 60px 8%;
}

.our-products h2 {
    font-size: 2.6rem;
    color: #2444bc;
    text-align: center;
    margin-bottom: 50px;
    position: relative;
}

.our-products h2::after {
    content: "";
    display: block;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #44b44c, #2444bc);
    margin: 15px auto 0;
    border-radius: 4px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
}

.product-card {
    background: #fff;
    border-radius: 16px;
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(36,68,188,0.08);
    border: 3px solid transparent;
    border-image: linear-gradient(90deg, #44b44c, #2444bc) 1;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(36,68,188,0.15);
}

.product-card i {
    font-size: 2.5rem;
    color: #44b44c;
    margin-bottom: 15px;
    display: block;
}

.product-card h4 {
    font-size: 1.2rem;
    color: #2444bc;
    margin-bottom: 0;
}

@media (max-width: 768px) {
    .our-products h2 {
        font-size: 2rem;
    }
    .product-card h4 {
        font-size: 1.1rem;
    }
}
</style>

