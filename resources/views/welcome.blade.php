<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kouser - Visual Designer</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background-color: #fff;
      color: #333;
    }

    /* Header/Nav */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 25px 60px;
      border-bottom: 1px solid #eee;
    }

    .logo {
      font-size: 28px;
      font-weight: 600;
      color: #000;
    }

    nav {
      display: flex;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-size: 15px;
      font-weight: 500;
      position: relative;
      padding-bottom: 5px;
      transition: color 0.2s ease;
    }

    nav a:hover {
      color: #f36a3e;
    }

    nav a.active {
      color: #f36a3e;
    }

    nav a.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #f36a3e;
    }

    /* Hero Section */
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 80px 60px;
      flex-wrap: wrap;
    }

    .hero-text {
      max-width: 50%;
    }

    .hero-text h1 {
      font-size: 38px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .hero-text h1 span {
      color: #f36a3e;
    }

    .hero-text p {
      color: #777;
      line-height: 1.6;
      margin-bottom: 25px;
    }

    .hero-text button {
      padding: 12px 20px;
      font-weight: bold;
      border-radius: 6px;
      margin-right: 15px;
      cursor: pointer;
    }

    .btn-outline {
      background-color: white;
      border: 2px solid #f36a3e;
      color: #f36a3e;
    }

    .btn-solid {
      background-color: #275d52;
      color: white;
      border: none;
    }

    .hero-img img {
      max-width: 320px;
      border-radius: 10px;
    }

    /* Social Links */
    .socials {
      position: absolute;
      right: 30px;
      top: 200px;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .socials a {
      writing-mode: vertical-rl;
      transform: rotate(180deg);
      background-color: #2b665c;
      color: white;
      padding: 10px 8px;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      text-align: center;
      font-size: 14px;
    }

    /* Services Section */
    .services {
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 60px 20px;
      background-color: #fafafa;
      flex-wrap: wrap;
    }

    .service-card {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      text-align: center;
      width: 250px;
    }

    .service-card h3 {
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .service-card p {
      color: #888;
      font-size: 14px;
    }

    .icon-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      color: white;
    }

    .web { background-color: #2ec18f; }
    .dash { background-color: #f36a3e; }
    .app { background-color: #2196f3; }

    /* Responsive */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 20px;
      }

      nav {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }

      .hero {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 40px 20px;
      }

      .hero-text, .hero-img {
        max-width: 100%;
      }

      .socials {
        position: static;
        flex-direction: row;
        justify-content: center;
        margin-top: 20px;
      }

      .services {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="logo">Kouser</div>
    <nav>
      <a href="#" class="active">About Me</a>
      <a href="#">Works</a>
      <a href="#">Portfolio</a>
      <a href="#">Services</a>
      <a href="#">Pricing</a>
      <a href="#">Contact Me</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Hi, I Am Kouser Ahamed,<br><span>Expert Visual Designer.</span></h1>
      <p>Amit minim mullet non doforent alamo est sit aliquant dolor the non alamo denim sent. Veldt official consequent there denim alamos mullet denim exercitation venulose consequent shunts.</p>
      <button class="btn-outline">KNOW MORE</button>
      <button class="btn-solid">SEE MY PROJECTS</button>
    </div>
    <div class="hero-img">
      <img src="assets/images/kou.jpg" alt="Kouser Ahamed">
    </div>
  </section>

  <!-- Social Buttons -->
  <div class="socials">
    <a href="#">LINKEDIN</a>
    <a href="#">DRIBBLE</a>
    <a href="#">BEHANCE</a>
  </div>

  <!-- Services Section -->
  <section class="services">
    <div class="service-card">
      <div class="icon-circle web">🖥</div>
      <h3>Website Design</h3>
      <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrum.</p>
    </div>
    <div class="service-card">
      <div class="icon-circle dash">📊</div>
      <h3>Dashboard Design</h3>
      <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrum.</p>
    </div>
    <div class="service-card">
      <div class="icon-circle app">📱</div>
      <h3>Mobile App Design</h3>
      <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrum.</p>
    </div>
  </section>

</body>
</html>
