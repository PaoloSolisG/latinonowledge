<!-- Contact Section Styles -->
<link rel="stylesheet" href="<?= base_url('./public/css/contact.css') ?>">

<!-- Enhanced Contact Section for Latino Knowledge -->
<section id="contact" class="contact-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header text-center">
            <div class="section-badge">
                <i class="fas fa-envelope"></i>
                <span>Contact Us</span>
            </div>
            <h2 class="section-title">Get in Touch With Us</h2>
            <p class="section-description">
                Have questions or need assistance? We're here to help. Reach out today to learn how we can support your financial journey.
            </p>
        </div>

        <div class="row justify-content-center align-items-stretch">
            <!-- Contact Form -->
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="contact-form-wrapper w-100">
                    <div class="form-header">
                        <h3>Send Us a Message</h3>
                        <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                    </div>
                    
                    <form class="enhanced-contact-form" id="contactForm" action="#contact-submit" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstName">First Name *</label>
                                    <div class="input-wrapper">
                                        <i class="fas fa-user"></i>
                                        <input type="text" id="firstName" name="first_name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastName">Last Name *</label>
                                    <div class="input-wrapper">
                                        <i class="fas fa-user"></i>
                                        <input type="text" id="lastName" name="last_name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <div class="input-wrapper">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-wrapper">
                                        <i class="fas fa-phone"></i>
                                        <input type="tel" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service Interested In</label>
                            <div class="input-wrapper">
                                <i class="fas fa-briefcase"></i>
                                <select id="service" name="service">
                                    <option value="">Select a service...</option>
                                    <option value="tax-preparation">Tax Preparation</option>
                                    <option value="accounting">Accounting & Financial Management</option>
                                    <option value="business-startup">Business Startup Assistance</option>
                                    <option value="itin-support">ITIN Application Support</option>
                                    <option value="consultation">General Consultation</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Tell us about your request *</label>
                            <div class="input-wrapper">
                                <i class="fas fa-comment-alt"></i>
                                <textarea id="message" name="message" rows="5" placeholder="Please describe how we can help you..." required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox-wrapper">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms">
                                    I agree with the <a href="https://latino-knowledge.ueniweb.com/merchant-policies" target="_blank">Terms & Conditions</a> 
                                    and the <a href="https://latino-knowledge.ueniweb.com/legal-notice" target="_blank">Privacy Policy</a> 
                                    of Latino Knowledge. *
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="submit-btn">
                                <span>Send Message</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                            <p class="form-note">
                                <i class="fas fa-shield-alt"></i>
                                Your information is secure and will only be used to respond to your inquiry.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="col-lg-6 d-flex align-items-stretch">
                <div class="map-section w-100">
                    <div class="map-header">
                        <h3>Visit Our Office</h3>
                        <p>Located in the heart of New York City</p>
                    </div>
                    <div class="map-wrapper" style="position:relative; min-height:400px;">
                        <!-- Awesome location icon -->
                        <div style="position:absolute;z-index:2;left:50%;top:30px;transform:translateX(-50%);">
                            <i class="fas fa-map-marker-alt" style="font-size:48px;color:#e74c3c;text-shadow:0 2px 8px rgba(0,0,0,0.15);"></i>
                        </div>
                        <div id="contactMap" class="contact-map"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- Contact Map JavaScript -->
<script>
function initContactMap() {
    // Empire State Building location
    var nyLocation = {
        lat: 40.748817,
        lng: -73.985428
    };
    var map = new google.maps.Map(document.getElementById('contactMap'), {
        zoom: 15,
        center: nyLocation,
        styles: [
            {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]},
            {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]},
            {"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}, {"lightness": 17}]},
            {"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]},
            {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 18}]},
            {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#ffffff"}, {"lightness": 16}]},
            {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]},
            {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#dedede"}, {"lightness": 21}]},
            {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]},
            {"elementType": "labels.text.fill", "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]},
            {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]},
            {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]},
            {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#fefefe"}, {"lightness": 20}]},
            {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]}
        ]
    });
    
    // Custom marker
    var marker = new google.maps.Marker({
        position: nyLocation,
        map: map,
        title: 'Latino Knowledge - New York Office',
        animation: google.maps.Animation.DROP,
        icon: {
            url: "https://cdn-icons-png.flaticon.com/512/684/684908.png",
            scaledSize: new google.maps.Size(48, 48)
        }
    });
    
    // Info window
    var infoWindow = new google.maps.InfoWindow({
        content: `
            <div style="padding: 10px; max-width: 300px;">
                <h4 style="margin: 0 0 10px 0; color: #2c3e50;">Latino Knowledge</h4>
                <p style="margin: 0 0 8px 0; color: #6c757d; font-size: 14px;">
                    <strong>Address:</strong><br>
                    350 5th Ave<br>
                    New York, NY 10118
                </p>
            </div>
        `
    });
    
    marker.addListener('click', function() {
        infoWindow.open(map, marker);
    });
}

// Form submission handling
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Basic validation
            if (!data.first_name || !data.last_name || !data.email || !data.message || !data.terms) {
                alert('Please fill in all required fields and accept the terms and conditions.');
                return;
            }
            
            // Here you would typically send the data to your server
            // For now, we'll show a success message
            alert('Thank you for your message! We will get back to you within 24 hours.');
            
            // Reset form
            this.reset();
        });
    }
});
</script>
<!-- Load Google Maps API -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initContactMap"></script>
</section>
