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

<!-- Contact Section Styles -->
<style>
/* Contact Section Styles */
.contact-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.section-header {
    margin-bottom: 60px;
}

.section-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #28a745, #20a83a);
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 20px;
    box-shadow: 0 4px 15px rgba(40,167,69,0.3);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
}

.section-description {
    font-size: 1.1rem;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Contact Form */
.contact-form-wrapper {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.form-header {
    margin-bottom: 30px;
}

.form-header h3 {
    color: #2c3e50;
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.form-header p {
    color: #6c757d;
    margin: 0;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 14px;
}

.input-wrapper {
    position: relative;
}

.input-wrapper i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6c757d;
    z-index: 2;
}

.input-wrapper input,
.input-wrapper select,
.input-wrapper textarea {
    width: 100%;
    padding: 15px 15px 15px 45px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 16px;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.input-wrapper textarea {
    resize: vertical;
    min-height: 120px;
}

.input-wrapper input:focus,
.input-wrapper select:focus,
.input-wrapper textarea:focus {
    outline: none;
    border-color: #007bff;
    background: white;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
}

.checkbox-wrapper {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.checkbox-wrapper input[type="checkbox"] {
    width: 18px;
    height: 18px;
    margin-top: 2px;
    flex-shrink: 0;
}

.checkbox-wrapper label {
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
}

.checkbox-wrapper a {
    color: #007bff;
    text-decoration: none;
}

.checkbox-wrapper a:hover {
    text-decoration: underline;
}

.form-actions {
    text-align: center;
    margin-top: 30px;
}

.submit-btn {
    background: linear-gradient(135deg, #28a745, #20a83a);
    color: white;
    border: none;
    padding: 15px 40px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 15px rgba(40,167,69,0.3);
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(40,167,69,0.4);
}

.form-note {
    margin-top: 15px;
    font-size: 12px;
    color: #6c757d;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
}

/* Contact Information */
.contact-info-wrapper {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.contact-info-card,
.quick-actions-card,
.social-media-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.contact-info-card h3,
.quick-actions-card h3,
.social-media-card h3 {
    color: #2c3e50;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 25px;
}

.contact-items {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.contact-item {
    display: flex;
    gap: 15px;
    align-items: flex-start;
}

.contact-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #007bff, #0056b3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
    flex-shrink: 0;
}

.contact-content h4 {
    color: #2c3e50;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.contact-content p {
    color: #6c757d;
    margin-bottom: 8px;
    line-height: 1.4;
}

.contact-content a {
    color: #007bff;
    text-decoration: none;
    font-weight: 600;
}

.contact-content a:hover {
    text-decoration: underline;
}

.directions-link,
.availability,
.response-time {
    font-size: 12px;
    color: #28a745;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 4px;
}

/* Quick Actions */
.action-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.action-btn {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.action-btn.primary {
    background: linear-gradient(135deg, #007bff, #0056b3);
    color: white;
}

.action-btn.secondary {
    background: linear-gradient(135deg, #28a745, #20a83a);
    color: white;
}

.action-btn.whatsapp {
    background: linear-gradient(135deg, #25d366, #128c7e);
    color: white;
}

.action-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    color: white;
    text-decoration: none;
}

.action-btn i {
    font-size: 24px;
    width: 30px;
    text-align: center;
}

.action-btn strong {
    display: block;
    font-size: 14px;
    margin-bottom: 2px;
}

.action-btn span {
    font-size: 12px;
    opacity: 0.9;
}

/* Social Media */
.social-links {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 15px;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 600;
}

.social-link.facebook {
    background: #f0f4ff;
    color: #3b5998;
    border: 1px solid #e6f0ff;
}

.social-link.instagram {
    background: #fff5f5;
    color: #e4405f;
    border: 1px solid #ffe6e6;
}

.social-link.linkedin {
    background: #f0f8ff;
    color: #0077b5;
    border: 1px solid #e6f2ff;
}

.social-link:hover {
    transform: translateX(5px);
    text-decoration: none;
}

.social-link i {
    font-size: 18px;
    width: 20px;
    text-align: center;
}

/* Promotional Banner */
.promo-banner {
    background: linear-gradient(135deg, #e74c3c, #c0392b);
    border-radius: 15px;
    padding: 20px;
    color: white;
    text-align: center;
}

.promo-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.promo-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
}

.promo-text strong {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

.promo-text p {
    margin: 0;
    font-size: 14px;
    opacity: 0.9;
}

/* Map Section */
.map-section {
    margin-top: 60px;
}

.map-header {
    text-align: center;
    margin-bottom: 30px;
}

.map-header h3 {
    color: #2c3e50;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.map-header p {
    color: #6c757d;
    font-size: 1.1rem;
}

.map-wrapper {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    height: 400px;
}

.contact-map {
    width: 100%;
    height: 100%;
    border: none;
}

/* Responsive Design */
@media (max-width: 992px) {
    .contact-info-wrapper {
        margin-top: 30px;
    }
    
    .contact-form-wrapper {
        padding: 30px;
    }
}

@media (max-width: 768px) {
    .contact-section {
        padding: 60px 0;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .contact-form-wrapper,
    .contact-info-card,
    .quick-actions-card,
    .social-media-card {
        padding: 25px;
    }
    
    .map-wrapper {
        height: 300px;
    }
    
    .promo-content {
        flex-direction: column;
        gap: 10px;
    }
}

@media (max-width: 576px) {
    .contact-form-wrapper {
        padding: 20px;
    }
    
    .input-wrapper input,
    .input-wrapper select,
    .input-wrapper textarea {
        padding: 12px 12px 12px 40px;
        font-size: 14px;
    }
    
    .submit-btn {
        padding: 12px 30px;
        font-size: 14px;
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .action-btn {
        padding: 12px;
    }
}
</style>

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
