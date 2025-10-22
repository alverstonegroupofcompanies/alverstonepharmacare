<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Welcome | Alverstone Pharmacare LLP';
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ===== Base Layout ===== */
body, html {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
  background: #000;
}

.landing {
  display: flex;
  height: 100vh;
  width: 100%;
  font-family: 'Montserrat', sans-serif;
  overflow: hidden;
}

/* ===== Sections ===== */
.section {
  flex: 1;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  cursor: pointer;
  transition: all 0.6s cubic-bezier(.2,.8,.2,1);
  overflow: hidden;
  isolation: isolate;
}

.section:hover {
  flex: 1.1;
}

.section::before {
  content: "";
  position: absolute;
  inset: 0;
  background-size: cover;
  background-position: center;
  z-index: 1;
  transition: transform 2.5s ease, filter 0.5s ease;
  will-change: transform;
}

.section:hover::before {
  transform: scale(1.08);
  filter: brightness(1.05);
}

.section::after {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.45);
  z-index: 2;
  transition: background 0.5s ease;
}

.section:hover::after {
  background: rgba(0,0,0,0.25);
}

/* ===== Content ===== */
.content {
  position: relative;
  z-index: 3;
  max-width: 600px;
  padding: 20px;
  animation: fadeUp 1.2s ease forwards;
  opacity: 0;
  transform: translateY(30px);
}

.section:hover .content {
  opacity: 1;
  transform: translateY(0);
}

.content i {
  font-size: 3.5rem;
  margin-bottom: 1rem;
  color: #fff;
  text-shadow: 0 4px 15px rgba(0,0,0,0.4);
  transition: transform 0.4s ease;
}

.section:hover .content i {
  transform: scale(1.15) rotate(3deg);
}

.content h1 {
  font-size: 1.5rem;
  font-weight: 800;
  margin-bottom: 0.6rem;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.content h2 {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 0.8rem;
  opacity: 0.95;
}

.content p {
  font-size: 1.05rem;
  line-height: 1.6;
  margin: 0 auto 1.2rem;
  max-width: 500px;
  opacity: 0.9;
}

/* ===== Buttons ===== */
.login-btn {
  display: inline-block;
  padding: 12px 30px;
  background: rgba(255,255,255,0.2);
  color: #fff;
  border: 1px solid rgba(255,255,255,0.5);
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  backdrop-filter: blur(6px);
}

.login-btn:hover {
  background: rgba(255,255,255,0.3);
  border-color: #fff;
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 4px 20px rgba(255,255,255,0.25);
}

/* ===== Section Backgrounds ===== */
.section.aim::before {
  background-image: linear-gradient(to bottom right, rgba(36,68,188,0.85), rgba(36,68,188,0.55)), 
  url('/images/banners/17843.jpg');
}

.section.pharma::before {
  background-image: linear-gradient(to bottom right, rgba(68,180,76,0.85), rgba(68,180,76,0.55)), 
  url('/images/banners/38127474_169_06_2019_19.jpg');
}

/* ===== Animation ===== */
@keyframes fadeUp {
  from {opacity: 0; transform: translateY(40px);}
  to {opacity: 1; transform: translateY(0);}
}

/* ===== Responsive ===== */
@media (max-width: 900px) {
  .landing { flex-direction: column; height: auto; }
  .section { width: 100%; min-height: 50vh; }
  .content h1 { font-size: 2rem; }
  .content h2 { font-size: 1.1rem; }
  .content p { font-size: 0.95rem; }
  .login-btn { padding: 10px 25px; font-size: 0.9rem; }
}
</style>

<div class="landing" role="main" aria-label="Choose site section">

  <!-- AIM Section -->
  <section class="section aim" tabindex="0" data-target="<?= Url::to(['/site/pharmacare-home']) ?>">
    <div class="content">
      <i class="fa-solid fa-syringe"></i>
      <h1>Alverstone Pharmacare LLP</h1>
      <h2>Advanced Injection Manufacturing Plant (AIM)</h2>
      <p>Precision-driven injectable production with automation, safety, and compliance at every stage.</p>
      <a href="<?= Url::to(['/site/pharmacare-home']) ?>" class="login-btn">Login to AIM</a>
    </div>
  </section>

  <!-- Pharmacy Chain Section -->
  <section class="section pharma" tabindex="0" data-target="<?= Url::to(['/site/pharmacy-chain']) ?>">
    <div class="content">
      <i class="fa-solid fa-prescription-bottle-medical"></i>
      <h1>Pharmacy Chain</h1>
      <h2>Alverstone Nationwide Retail & Wholesale Network</h2>
      <p>Ensuring trusted healthcare delivery through innovation and service excellence across India.</p>
      <a href="<?= Url::to(['/site/pharmacy-chain']) ?>" class="login-btn">Login to Pharmacy Chain</a>
    </div>
  </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.section').forEach(sec => {
    sec.addEventListener('click', () => {
      const url = sec.dataset.target;
      if (url) window.location.href = url;
    });
    sec.addEventListener('keydown', e => {
      if (['Enter',' '].includes(e.key)) {
        e.preventDefault();
        const url = sec.dataset.target;
        if (url) window.location.href = url;
      }
    });
  });

  // Fade in content after page load
  setTimeout(() => {
    document.querySelectorAll('.content').forEach(el => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    });
  }, 400);
});
</script>
