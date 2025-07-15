@extends('index')

@push('style')
    <title>{{ $title }} - Services</title>
@endpush

@section('main-content')
    <header>
        <div class="logo">Kouser Ahamed</div>
        <div class="nav-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav>
            <a href="{{ url('/') }}#aboutme">About Me</a>
            <a href="{{ url('/') }}#work">Works</a>
            <a href="{{ url('/') }}#service" class="active">Services</a>
            <a href="{{ url('/') }}#resume">Resume</a>
            <a href="{{ url('/') }}#contact">Contact Me</a>
        </nav>
    </header>

    <section class="service-detail-hero">
        <div class="container">
            <h1>{{ $title }}</h1>
            <div class="breadcrumbs">
                <a href="{{ url('/') }}">Home</a> > 
                <a href="{{ url('/') }}#service">Services</a> > 
                <span>{{ $title }}</span>
            </div>
        </div>
    </section>

    <section class="service-detail-content">
        <div class="container">
            <div class="service-content-grid">
                <div class="service-main-content">
                    <img src="{{ asset('assets/images/' . $service . '.jpg') }}" alt="{{ $title }}" class="service-featured-image">
                    
                    <h2>About {{ $title }}</h2>
                    <p>
                        Denim veldt mullet exercitation alamo consomes consequent alum nostrums. Amit minim mullet non deferrent alamo est sit aliqua dolor denim sent alamo the session enter end minim mullet deferunt alamo exercitation dolor denim aliquant dolor exercitation deferent.
                    </p>
                    
                    <h2>Our {{ $title }} Process</h2>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <h3>Research & Discovery</h3>
                            <p>We start with thorough research to understand your needs, audience, and objectives.</p>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <h3>Conceptualization & Design</h3>
                            <p>Our expert team creates innovative concepts and designs tailored to your requirements.</p>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <h3>Development & Implementation</h3>
                            <p>We bring designs to life with cutting-edge development practices and attention to detail.</p>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <h3>Testing & Delivery</h3>
                            <p>Rigorous testing ensures quality before delivering the final product to our clients.</p>
                        </div>
                    </div>
                    
                    <h2>Why Choose Our {{ $title }} Service</h2>
                    <ul class="service-benefits">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Expert team with years of experience in {{ $title }}</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Customer-focused approach with regular communication and updates</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Modern design principles and latest technology implementation</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Affordable pricing with flexible packages to suit your needs</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>Post-delivery support and maintenance options available</span>
                        </li>
                    </ul>
                </div>
                
                <div class="service-sidebar">
                    <div class="sidebar-widget service-list">
                        <h3>Our Services</h3>
                        <ul>
                            <li class="{{ $service == 'mobile-app-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'mobile-app-design') }}">Mobile App Design</a>
                            </li>
                            <li class="{{ $service == 'website-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'website-design') }}">Website Design</a>
                            </li>
                            <li class="{{ $service == 'dashboard-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'dashboard-design') }}">Dashboard Design</a>
                            </li>
                            <li class="{{ $service == 'product-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'product-design') }}">Product Design</a>
                            </li>
                            <li class="{{ $service == 'branding-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'branding-design') }}">Branding Design</a>
                            </li>
                            <li class="{{ $service == 'graphics-design' ? 'active' : '' }}">
                                <a href="{{ route('service.detail', 'graphics-design') }}">Graphics Design</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="sidebar-widget contact-widget">
                        <h3>Get a Quote</h3>
                        <form class="sidebar-form">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <select>
                                    <option value="">Select Service</option>
                                    <option value="mobile-app-design" {{ $service == 'mobile-app-design' ? 'selected' : '' }}>Mobile App Design</option>
                                    <option value="website-design" {{ $service == 'website-design' ? 'selected' : '' }}>Website Design</option>
                                    <option value="dashboard-design" {{ $service == 'dashboard-design' ? 'selected' : '' }}>Dashboard Design</option>
                                    <option value="product-design" {{ $service == 'product-design' ? 'selected' : '' }}>Product Design</option>
                                    <option value="branding-design" {{ $service == 'branding-design' ? 'selected' : '' }}>Branding Design</option>
                                    <option value="graphics-design" {{ $service == 'graphics-design' ? 'selected' : '' }}>Graphics Design</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Your Message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="contact-btn">Get Quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Ready to Start Your <span class="highlight">{{ $title }}</span> Project?</h2>
            <p>Contact us today for a free consultation and quote.</p>
            <div class="cta-buttons">
                <a href="{{ url('/') }}#contact" class="btn-solid">Contact Us</a>
                <a href="{{ url('/') }}#work" class="btn-outline">View Portfolio</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            © 2025 All rights reserved by <span>Kouser Ahamed</span>
        </div>
    </footer>
@endsection
