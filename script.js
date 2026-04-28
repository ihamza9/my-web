// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Form Validation
function validateForm(formId) {
    const form = document.getElementById(formId);
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.style.borderColor = '#ef4444';
            isValid = false;
        } else {
            input.style.borderColor = '#10b981';
        }
    });

    return isValid;
}

// Booking Form Validation
const bookingForm = document.getElementById('bookingForm');
if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
        if (!validateForm('bookingForm')) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
}

// Contact Form Validation
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        if (!validateForm('contactForm')) {
            e.preventDefault();
            alert('Please fill in all required fields.');
        }
    });
}

// Scroll Animations
function handleScrollAnimations() {
    const elements = document.querySelectorAll('.feature-card, .testimonial-card, .team-member, .service-card, .mv-card');

    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;
        const windowHeight = window.innerHeight;

        if (elementTop < windowHeight - 100 && elementBottom > 0) {
            element.classList.add('fade-in-up');
        }
    });
}

// Throttle scroll events
let scrollTimeout;
window.addEventListener('scroll', () => {
    if (!scrollTimeout) {
        scrollTimeout = setTimeout(() => {
            handleScrollAnimations();
            scrollTimeout = null;
        }, 16);
    }
});

// Initialize scroll animations on page load
document.addEventListener('DOMContentLoaded', () => {
    handleScrollAnimations();
});

// Interactive Alerts (for demo purposes)
function showAlert(message, type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type}`;
    alertDiv.textContent = message;
    alertDiv.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem;
        border-radius: 5px;
        color: white;
        font-weight: 600;
        z-index: 1001;
        animation: slideIn 0.3s ease-out;
    `;

    if (type === 'success') {
        alertDiv.style.backgroundColor = '#10b981';
    } else if (type === 'error') {
        alertDiv.style.backgroundColor = '#ef4444';
    } else {
        alertDiv.style.backgroundColor = '#3b82f6';
    }

    document.body.appendChild(alertDiv);

    setTimeout(() => {
        alertDiv.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => {
            document.body.removeChild(alertDiv);
        }, 300);
    }, 3000);
}

// Add alert animations to CSS (via JavaScript for demo)
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
`;
document.head.appendChild(style);

// Pre-populate service type if coming from services page
const urlParams = new URLSearchParams(window.location.search);
const serviceParam = urlParams.get('service');
if (serviceParam && document.getElementById('service_type')) {
    document.getElementById('service_type').value = serviceParam;
}