@extends('index')

@push('style')
    <title>Portfolio - Home</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endpush

@section('main-content')

  <header>
    <div class="logo">Kouser Ahamed</div>
    <nav class="navbar">
      <a href="#aboutme" class="active">About Me</a>
      <a href="#work">Works</a>
      <a href="#service">Services</a>
      <a href="#">Resume</a>
      <a href="#contact">Contact Me</a>
    </nav>
  </header>

  <section id="aboutme" class="hero">
    <div class="hero-text">
      <h1>
        Hi, I Am Kouser Ahamed,<br />
        <span>Expert Visual Designer.</span>
      </h1>
      <p>
        Amit minim mullet non doforent alamo est sit aliquant dolor the non
        alamo denim sent. Veldt official consequent there denim alamos mullet
        denim exercitation venulose consequent shunts.
      </p>
      <button class="btn-outline">KNOW MORE</button>
      <button class="btn-solid">SEE MY PROJECTS</button>
    </div>

    <div class="hero-img">
      <img src="{{ asset('assets/images/kou.jpg') }}" alt="Kouser Ahamed" />
    </div>
  </section>

  <div class="socials">
    <a href="#">LINKEDIN</a>
    <a href="#">DRIBBLE</a>
    <a href="#">BEHANCE</a>
  </div>

  <section id="work" class="services">
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

  <section class="hire-me">
    <div class="hire-container">
      <h2>Why You Hire Me For <span>Your Next Project?</span></h2>
      <p>
        Amit minim mullet non deferent alamo est sit aliqua dolor alamo denim
        sent alamo the session enter end minim mullet deferent alamo
        exercitation aliquant dolor alamo exercitation deferent.
      </p>

      <div class="hire-grid">
        <div class="hire-card green">
          <h4>01</h4>
          <h3>Branding Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums alamos topper denars prester alum on.</p>
        </div>

        <div class="hire-card orange">
          <h4>02</h4>
          <h3>Product Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums alamos topper denars prester alum on.</p>
        </div>

        <div class="hire-card full-img">
          <img src="{{ asset('assets/images/img1.jpg') }}" alt="Project collage" />
        </div>

        <div class="hire-card blue">
          <h4>03</h4>
          <h3>Graphic Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums alamos topper denars prester alum on.</p>
        </div>

        <div class="hire-card purple">
          <h4>04</h4>
          <h3>Mockup Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums alamos topper denars prester alum on.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="service" class="service-highlight">
    <div class="container">
      <h2><span>My Awesome</span> Services For You</h2>
      <p>
        Amit minim mullet non deferent alamo est sit aliqua dolor denim sent alamo the session enter end
        minim mullet deferent alamo exercitation dolor denim aliquant dolor exercitation deferent.
      </p>

      <div class="highlight-grid">
        <div class="highlight-card">
          <h3>Mobile App Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
        <div class="highlight-card active">
          <h3>Website Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
        <div class="highlight-card">
          <h3>Dashboard Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
        <div class="highlight-card">
          <h3>Product Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
        <div class="highlight-card">
          <h3>Branding Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
        <div class="highlight-card">
          <h3>Graphics Design</h3>
          <p>Denim veldt mullet exercitation alamo consomes consequent alum nostrums.</p>
          <button class="read-btn">READ MORE <span>➔</span></button>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact-section">
    <div class="contact-container">
      <h2>Let’s <span>Connect</span></h2>
      <p>Have a project in mind or just want to chat? Feel free to drop me a message below.</p>

      <form class="contact-form" method="POST" action="#">
        @csrf
        <div class="form-grid">
          <input type="text" name="name" placeholder="Your Name" required />
          <input type="email" name="email" placeholder="Your Email" required />
        </div>
        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
        <button type="submit" class="contact-btn">Send Message</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <p>Developed by <span>Kouser Ahamed</span></p>
      <p>&copy; 2025</p>
    </div>
  </footer>

@endsection
