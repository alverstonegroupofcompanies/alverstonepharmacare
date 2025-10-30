<?php
/* @var $this yii\web\View */
$this->title = 'Alverstone Pharmacare LLP';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>


/* ===== Hero Section ===== */
.hero {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  background-color: #fff;
  background-image: url('/images/banners/4403214_18410.jpg'); /* <-- your vector path */
  background-repeat: no-repeat;
  background-size: cover; /* or 'contain' for smaller art */
  background-position: center;
  padding: 60px 20px;
}

/* ===== Title & Description ===== */
.hero h1 {
  font-size: 3rem;
  margin: 10px 0;
  font-weight: 600;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
    font-family: "Inria Sans", sans-serif;
}

.hero p {
  max-width: 680px;
  margin: 10px auto 45px;
  font-size: 1.05rem;
  line-height: 1.6;
  color: #333;
    font-family: "Saira", sans-serif;
}
/* ===== Portal Grid ===== */
.portal-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: stretch;
  gap: 40px;
}

/* ===== Portal Card ===== */
.portal-card {
  flex: 1 1 300px;
  max-width: 320px;
  min-height: 370px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  text-align: center;
  padding: 35px 25px;
  border-radius: 14px;
  background: #fff;
  border: 2px solid transparent;
  background-clip: padding-box;
  position: relative;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
}

.portal-card::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 14px;
  padding: 2px;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
}

.portal-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.portal-card i {
  font-size: 2.5rem;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 18px;
}

.portal-card h3 {
  font-size: 1.15rem;
  margin-bottom: 10px;
  color: #2444bc;
  font-family: "Saira", sans-serif;
  font-weight: 600;
}

.portal-card p {
  flex-grow: 1;
  font-size: 0.95rem;
  color: #555;
  margin-bottom: 25px;
  line-height: 1.5;
  max-width: 250px;
}

.portal-card::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 14px;
  padding: 2px;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
}

.portal-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.12);
}

.portal-card i {
  font-size: 2.3rem;
  background: linear-gradient(135deg, #2444bc, #44b44c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 15px;
}

.portal-card h3 {
  font-size: 1.1rem;
  margin-bottom: 8px;
  color: #2444bc;
    font-family: "Saira", sans-serif;
    font-weight: 600;
}

.portal-card p {
  font-size: 0.95rem;
  color: #444;
  margin-bottom: 25px;
  line-height: 1.5;
}
/* ===== Portal Login Button ===== */
.portal-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  width: 100%;
  padding: 10px 18px;
  font-size: 1rem;
  font-weight: 600;
  color: #2444bc;
  background: #fff;
  border: 2px solid transparent;
  border-radius: 8px;
  background-image: linear-gradient(#fff, #fff),
                    linear-gradient(135deg, #2444bc, #44b44c);
  background-origin: border-box;
  background-clip: padding-box, border-box;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
}

.portal-btn i {
  font-size: 1rem;
  transition: transform 0.3s ease;
}

/* Hover Effect */
.portal-btn:hover {
  background: linear-gradient(135deg, #2444bc, #44b44c);
  color: #fff;
  box-shadow: 0 5px 15px rgba(36, 68, 188, 0.3);
  transform: translateY(-2px);
}

.portal-btn:hover i {
  transform: translateX(5px);
}

/* ===== Social Links ===== */
.social {
  margin-top: 40px;
}

.social a {
  color: #2444bc;
  font-size: 1.3rem;
  margin: 0 10px;
  transition: 0.3s;
}

.social a:hover {
  color: #44b44c;
}

/* ===== Footer ===== */
footer {
  margin-top: 40px;
  color: #555;
  font-size: 0.9rem;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .portal-card { width: 90%; }
  .hero h1 { font-size: 1.7rem; }
  .hero p { font-size: 0.95rem; }
}
</style>

<!-- ====== Hero Section ====== -->
<div class="hero">
  <div class="hero-content">



    <!-- Title & Description -->
    <h1>Alverstone Pharmacare LLP</h1>
    <p>
      Empowering healthcare through advanced injection manufacturing and a growing network of trusted pharmacy partners.
    </p>

    <!-- Portal Cards -->
    <div class="portal-grid">

      <!-- AIM Portal -->
      <div class="portal-card">
        <i class="fas fa-syringe"></i>
        <h3>Advanced Injection Manufacturing</h3>
        <p>Cutting-edge technology ensuring sterile, safe, and precise production.</p>
        <button class="portal-btn" onclick="window.location.href='<?= Yii::$app->urlManager->createUrl(['site/pharmacare-home']) ?>'">Login</button>
      </div>

      <!-- Pharmacy Network -->
      <div class="portal-card">
        <i class="fas fa-pills"></i>
        <h3>Pharmacy Chain Network</h3>
        <p>Delivering accessibility and reliability across every community we serve.</p>
        <button class="portal-btn" onclick="window.location.href='<?= Yii::$app->urlManager->createUrl(['site/pharmacy-chain']) ?>'">Login</button>
      </div>
    </div>

    <!-- Social Icons -->
    <div class="social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-x-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>

    <!-- Footer -->
    <footer>
      © <?= date('Y') ?> Alverstone Pharmacare LLP. All rights reserved.
    </footer>
  </div>
</div>
