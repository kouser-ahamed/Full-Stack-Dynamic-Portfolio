/**
 * Dynamic Portfolio - Main JavaScript
 * Created: July 2025
 */

document.addEventListener('DOMContentLoaded', function() {
    // Header scroll effect
    const header = document.querySelector('header');
    const navToggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('nav');
    
    // Handle header scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Mobile navigation toggle
    if (navToggle) {
        navToggle.addEventListener('click', function() {
            nav.classList.toggle('show');
        });
    }
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (nav.classList.contains('show')) {
                nav.classList.remove('show');
            }
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Active section highlighting
    const sections = document.querySelectorAll('section[id]');
    
    function highlightCurrentSection() {
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            const navigationLink = document.querySelector(`nav a[href="#${sectionId}"]`);
            
            if (navigationLink) {
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navigationLink.classList.add('active');
                } else {
                    navigationLink.classList.remove('active');
                }
            }
        });
    }
    
    // Initial call and event binding for section highlighting
    if (sections.length > 0) {
        window.addEventListener('scroll', highlightCurrentSection);
        highlightCurrentSection();
    }
    
    // Animation for service cards
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const animateOnScroll = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.service-card, .hire-card, .highlight-card').forEach(card => {
        animateOnScroll.observe(card);
    });
    
    // Form validation
    const contactForm = document.querySelector('.contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const nameInput = contactForm.querySelector('input[name="name"]');
            const emailInput = contactForm.querySelector('input[name="email"]');
            const messageInput = contactForm.querySelector('textarea[name="message"]');
            let isValid = true;
            
            // Simple validation
            if (nameInput && nameInput.value.trim() === '') {
                markInvalid(nameInput, 'Please enter your name');
                isValid = false;
            } else if (nameInput) {
                markValid(nameInput);
            }
            
            if (emailInput && !validateEmail(emailInput.value)) {
                markInvalid(emailInput, 'Please enter a valid email address');
                isValid = false;
            } else if (emailInput) {
                markValid(emailInput);
            }
            
            if (messageInput && messageInput.value.trim() === '') {
                markInvalid(messageInput, 'Please enter your message');
                isValid = false;
            } else if (messageInput) {
                markValid(messageInput);
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
    
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    
    function markInvalid(element, message) {
        element.classList.add('invalid');
        
        // Create or update error message
        let errorMessage = element.parentNode.querySelector('.error-message');
        if (!errorMessage) {
            errorMessage = document.createElement('div');
            errorMessage.className = 'error-message';
            element.parentNode.appendChild(errorMessage);
        }
        errorMessage.textContent = message;
    }
    
    function markValid(element) {
        element.classList.remove('invalid');
        const errorMessage = element.parentNode.querySelector('.error-message');
        if (errorMessage) {
            errorMessage.remove();
        }
    }
});
