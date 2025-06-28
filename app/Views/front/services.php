<div id="services" class="services_section" style="padding: 80px 0; background-color: #f8f9fa; position: relative; z-index: 999;">
    <div class="container">        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title">Optimize Your Finances</h2>
                <p class="section-subtitle">Financial Solutions</p>
            </div>
        </div>
          <div class="row services-grid" style="margin-top: 50px;">
            <!-- Servicio 1: Tax Preparation -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Tax Preparation" class="img-fluid">
                    </div>                    <div class="service-content">
                        <h4>Tax Preparation</h4>
                        <p>Tax preparation involves accurately filing your taxes while maximizing deductions and minimizing liabilities. It can be overwhelming to navigate the complex tax code alone.</p>
                        <button class="btn btn-service" data-toggle="modal" data-target="#bookingModal" data-service="Tax Preparation">Book it Now</button>
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Accounting and Financial Management -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Accounting and Financial Management" class="img-fluid">
                    </div>                    <div class="service-content">
                        <h4>Accounting and Financial Management</h4>
                        <p>Managing your finances is crucial for making informed decisions and growing your business. Accounting and financial management services help streamline your operations.</p>
                        <div class="service-price">$27.00</div>
                        <button class="btn btn-service" data-toggle="modal" data-target="#bookingModal" data-service="Accounting and Financial Management" data-price="$27.00">Book it Now</button>
                    </div>
                </div>
            </div>

            <!-- Servicio 3: Business Startup Assistance -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Business Startup Assistance" class="img-fluid">
                    </div>                    <div class="service-content">
                        <h4>Business Startup Assistance</h4>
                        <p>Starting a new business can be both exciting and challenging. Business startup assistance provides the guidance and support you need to launch successfully.</p>
                        <div class="service-price">$150.00</div>
                        <button class="btn btn-service" data-toggle="modal" data-target="#bookingModal" data-service="Business Startup Assistance" data-price="$150.00">Book it Now</button>
                    </div>
                </div>
            </div>

            <!-- Servicio 4: ITIN Application Support -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="ITIN Application Support" class="img-fluid">
                    </div>                    <div class="service-content">
                        <h4>ITIN Application Support</h4>
                        <p>Applying for an Individual Taxpayer Identification Number (ITIN) can be a complex process, especially if you are unfamiliar with the requirements and documentation needed.</p>
                        <div class="service-price">$185.00</div>
                        <button class="btn btn-service" data-toggle="modal" data-target="#bookingModal" data-service="ITIN Application Support" data-price="$185.00">Book it Now</button>
                    </div>
                </div>
            </div>        </div>
    </div>
</div>

<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Step 1: Service and Time Selection -->
            <div id="step1" class="booking-step">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="bookingForm">
                        <!-- Select a Service -->
                        <div class="form-group">
                            <label for="serviceSelect">Select a Service</label>
                            <div class="service-selector">
                                <select class="form-control service-dropdown" id="serviceSelect" name="serviceSelect">
                                    <option value="Tax Preparation">Tax Preparation</option>
                                    <option value="Accounting and Financial Management">Accounting and Financial Management</option>
                                    <option value="Business Startup Assistance">Business Startup Assistance</option>
                                    <option value="ITIN Application Support">ITIN Application Support</option>
                                </select>
                                <div class="service-price-display" id="servicePriceDisplay">$</div>
                            </div>
                        </div>

                        <!-- Date and Time Section -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bookingDate">Date</label>
                                    <input type="date" class="form-control date-input" id="bookingDate" name="bookingDate">
                                </div>
                            </div>
                            <div class="col-md-6">                                <div class="form-group">
                                    <label for="bookingTime">Time</label>
                                    <select class="form-control time-input" id="bookingTime" name="bookingTime">
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="11:15 AM">11:15 AM</option>
                                        <option value="11:30 AM">11:30 AM</option>
                                        <option value="11:45 AM">11:45 AM</option>
                                        <option value="12:00 PM" selected>12:00 PM</option>
                                        <option value="12:15 PM">12:15 PM</option>
                                        <option value="12:30 PM">12:30 PM</option>
                                        <option value="12:45 PM">12:45 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Timezone -->
                        <div class="form-group">
                            <div class="timezone-display">
                                <i class="fa fa-globe"></i>
                                <span>(GMT-04:00) Eastern Time - New York</span>
                            </div>
                        </div>                        <!-- Time Selection Grid -->
                        <div class="form-group">
                            <label>Please choose a time below</label>
                            <div class="time-grid">
                                <button type="button" class="time-slot" data-time="11:00 AM">11:00 AM</button>
                                <button type="button" class="time-slot" data-time="11:15 AM">11:15 AM</button>
                                <button type="button" class="time-slot" data-time="11:30 AM">11:30 AM</button>
                                <button type="button" class="time-slot" data-time="11:45 AM">11:45 AM</button>
                                <button type="button" class="time-slot selected" data-time="12:00 PM">12:00 PM</button>
                                <button type="button" class="time-slot" data-time="12:15 PM">12:15 PM</button>
                                <button type="button" class="time-slot" data-time="12:30 PM">12:30 PM</button>
                                <button type="button" class="time-slot" data-time="12:45 PM">12:45 PM</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-continue" id="continueBooking">Continue</button>
                </div>
            </div>            <!-- Step 2: Contact Information -->
            <div id="step2" class="booking-step" style="display: none;">
                <div class="modal-header">
                    <button type="button" class="btn-back" id="backToStep1">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                    <h5 class="modal-title">Contact Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Booking Summary -->
                    <div class="booking-summary">
                        <div class="summary-left">
                            <div class="date-display">
                                <div class="day" id="summaryDay">24</div>
                                <div class="month" id="summaryMonth">Jun</div>
                            </div>
                            <div class="time-display" id="summaryTime">12:00 PM</div>
                        </div>
                        <div class="summary-right">
                            <div class="service-info">
                                <i class="fa fa-star"></i>
                                <span id="summaryService">Tax Preparation</span>
                            </div>
                            <div class="location-info">
                                <i class="fa fa-map-marker"></i>
                                <span>Virginia</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="userName">Your name *</label>
                            <input type="text" class="form-control contact-input" id="userName" name="userName" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userEmail">E-mail *</label>
                                    <input type="email" class="form-control contact-input" id="userEmail" name="userEmail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userPhone">Phone number</label>
                                    <input type="tel" class="form-control contact-input" id="userPhone" name="userPhone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="userMessage">Your message</label>
                            <textarea class="form-control contact-input message-area" id="userMessage" name="userMessage" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="terms-checkbox">
                                <input type="checkbox" id="termsAgreement" name="termsAgreement" required>
                                <label for="termsAgreement">
                                    I agree with the <a href="#">Terms & Conditions</a> and the <a href="#">Privacy & Cookies Policy</a> of UENI and any applicable Terms and Conditions of Latino Knowledge. This site is protected by reCAPTCHA and the Google <a href="#">Privacy Policy</a> and <a href="#">Terms of Service</a> apply.
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-book" id="submitFinalBooking">Book</button>
                </div>
            </div>

            <!-- Step 3: Success Message -->
            <div id="step3" class="booking-step" style="display: none;">
                <div class="modal-header">
                    <h5 class="modal-title">Booking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>                <div class="modal-body text-center">
                    <div class="success-animation">
                        <div class="checkmark-container">
                            <div class="checkmark-circle">
                                <i class="fa fa-check checkmark-icon"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="success-title">Thank You!</h3>
                    <p class="success-message">Your booking request has been successfully sent. We will get back to you shortly to confirm your booking.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-home" id="backToHome">Back to Home</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Services Section Styles */
.services_section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative !important;
    z-index: 999 !important;
    clear: both;
    overflow: visible;
}

/* Prevent any overlapping issues */
.services_section::before {
    content: '';
    display: block;
    height: 1px;
    clear: both;
}

/* Ensure container has proper stacking */
.services_section .container {
    position: relative;
    z-index: 1001;
}

/* Fix for any floating elements from previous sections */
#services {
    clear: both !important;
    margin-top: 0 !important;
    padding-top: 80px !important;
}

.section-title {
    font-size: 3rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: linear-gradient(45deg, #28a745, #20c997);
    border-radius: 2px;
}

.section-subtitle {
    font-size: 1.2rem;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.services-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.service-card {
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    overflow: hidden;
    height: 100%;
    position: relative;
    z-index: 1000 !important;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.service-image {
    position: relative;
    overflow: hidden;
    height: 200px;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.1);
}

.service-image::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(40, 167, 69, 0.8), rgba(32, 201, 151, 0.8));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.service-card:hover .service-image::after {
    opacity: 1;
}

.service-content {
    padding: 30px 20px;
    text-align: center;
}

.service-content h4 {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
}

.service-content p {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 25px;
    font-size: 0.95rem;
}

.service-price {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: white;
    padding: 10px 15px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 1.2rem;
    margin-bottom: 20px;
    display: inline-block;
    text-align: center;
    min-width: 120px;
}

.price-label {
    font-size: 0.8rem;
    font-weight: 400;
    opacity: 0.9;
}

.btn-service {
    background: linear-gradient(45deg, #28a745, #20c997);
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-service:hover {
    background: linear-gradient(45deg, #218838, #1c7430);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(40, 167, 69, 0.3);
    color: white;
    text-decoration: none;
}

/* Responsive Design */
@media (max-width: 768px) {
    .section-title {
        font-size: 2.5rem;
    }
    
    .service-content {
        padding: 20px 15px;
    }
    
    .service-content h4 {
        font-size: 1.3rem;
    }
    
    .service-image {
        height: 180px;
    }
}

@media (max-width: 576px) {
    .section-title {
        font-size: 2rem;
    }
    
    .section-subtitle {
        font-size: 1rem;
    }
    
    .service-image {
        height: 150px;
    }
}

/* Animation for service cards */
.service-card {
    animation: fadeInUp 0.6s ease-out;
}

.service-card:nth-child(1) { animation-delay: 0.1s; }
.service-card:nth-child(2) { animation-delay: 0.2s; }
.service-card:nth-child(3) { animation-delay: 0.3s; }
.service-card:nth-child(4) { animation-delay: 0.4s; }

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Modal Styles */
.modal-dialog {
    max-width: 600px;
    margin: 30px auto;
}

.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    background-color: #f5f5f0;
    max-height: 85vh;
    overflow-y: auto;
    overflow-x: hidden;
}

.booking-step {
    width: 100%;
    overflow-x: hidden;
}

.modal-header {
    background-color: #f5f5f0;
    color: #333;
    border-radius: 20px 20px 0 0;
    border-bottom: none;
    padding: 25px 30px 10px;
    position: relative;
}

.modal-title {
    font-weight: 700;
    font-size: 2rem;
    color: #333;
    text-align: center;
    width: 100%;
}

.btn-back {
    position: absolute;
    left: 15px;
    top: 15px;
    background: none;
    border: none;
    font-size: 1.3rem;
    color: #333;
    cursor: pointer;
    padding: 0;
}

.btn-back:hover {
    color: #17a2b8;
}

.modal-body {
    padding: 30px 35px;
    background-color: #f5f5f0;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
    font-size: 1rem;
}

/* Service Selector */
.service-selector {
    display: flex;
    gap: 10px;
    align-items: center;
}

.service-dropdown {
    flex: 1;
    background-color: #e8e8e0;
    border: none;
    border-radius: 25px;
    padding: 7px 20px;
    font-size: 1rem;
    color: #333;
}

.service-price-display {
    background-color: #e8e8e0;
    border-radius: 25px;
    padding: 15px 20px;
    font-weight: 600;
    color: #333;
    min-width: 80px;
    text-align: center;
    font-size: 1rem;
}

/* Date and Time Inputs */
.date-input, .time-input {
    background-color: #e8e8e0;
    border: none;
    border-radius: 25px;
    padding: 7px 20px;
    font-size: 1rem;
    color: #333;
}

/* Timezone Display */
.timezone-display {
    background-color: #e8e8e0;
    border-radius: 25px;
    padding: 15px 20px;
    color: #666;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.85rem;
}

.timezone-display i {
    font-size: 1rem;
}

/* Time Grid */
.time-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-top: 15px;
}

.time-slot {
    background-color: #e8e8e0;
    border: none;
    border-radius: 25px;
    padding: 15px 20px;
    font-size: 1rem;
    color: #666;
    cursor: pointer;
    transition: all 0.3s ease;
}

.time-slot:hover {
    background-color: #d0d0c0;
    color: #333;
}

.time-slot.selected {
    background-color: #17a2b8;
    color: white;
}

/* Booking Summary (Step 2) */
.booking-summary {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    padding: 20px;
    background-color: #e8e8e0;
    border-radius: 15px;
}

.summary-left {
    display: flex;
    gap: 12px;
    align-items: center;
}

.date-display {
    text-align: center;
}

.day {
    font-size: 1.5rem;
    font-weight: 700;
    color: #333;
    line-height: 1;
}

.month {
    font-size: 0.8rem;
    color: #666;
    text-transform: uppercase;
}

.time-display {
    font-size: 1rem;
    font-weight: 600;
    color: #333;
}

.summary-right {
    flex: 1;
}

.service-info, .location-info {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    color: #333;
    font-size: 0.9rem;
}

.service-info i, .location-info i {
    font-size: 0.9rem;
}

/* Contact Form Inputs */
.contact-input {
    background-color: #e8e8e0;
    border: none;    border-radius: 25px;
    padding: 15px 20px;
    font-size: 1rem;
    color: #333;
    width: 100%;
}

.contact-input:focus {
    background-color: #d8d8d0;
    outline: none;
    box-shadow: none;
}

.message-area {
    min-height: 100px;
    resize: vertical;
    border-radius: 15px !important;
}

/* Terms Checkbox */
.terms-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 0.8rem;
    color: #666;
    line-height: 1.3;
}

.terms-checkbox input[type="checkbox"] {
    margin-top: 2px;
    width: 16px;
    height: 16px;
    accent-color: #17a2b8;
    cursor: pointer;
}

.terms-checkbox label {
    cursor: pointer;
    font-weight: 400;
}

.terms-checkbox a {
    color: #17a2b8;
    text-decoration: underline;
}

.terms-checkbox a:hover {
    text-decoration: none;
}

/* Success Animation (Step 3) */
.success-animation {
    margin: 40px 0;
}

.checkmark-container {
    display: inline-block;
}

.checkmark-circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: linear-gradient(45deg, #4caf50, #66bb6a);
    position: relative;
    margin: 0 auto;
    animation: scaleIn 0.6s ease-in-out;
    box-shadow: 0 10px 30px rgba(76, 175, 80, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
}

.checkmark-icon {
    font-size: 3rem;
    color: white;
    animation: checkmarkAppear 0.6s ease-in-out 0.6s both;
}

.success-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin: 30px 0 20px;
    animation: fadeInUp 0.6s ease-in-out 1.2s both;
}

.success-message {
    font-size: 1.1rem;
    color: #666;
    line-height: 1.6;
    max-width: 400px;
    margin: 0 auto 40px;
    animation: fadeInUp 0.6s ease-in-out 1.4s both;
}

/* Success Animations */
@keyframes scaleIn {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes checkmarkAppear {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    50% {
        transform: scale(1.2);
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Modal Footer */
.modal-footer {
    padding: 25px 35px;
    border-top: none;
    background-color: #f5f5f0;
    border-radius: 0 0 20px 20px;
    display: flex;
    justify-content: center;
}

.btn-continue, .btn-book {
    background-color: #17a2b8;
    color: white;
    padding: 15px 40px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 25px;
    text-transform: none;
    transition: all 0.3s ease;
    min-width: 180px;
}

.btn-continue:hover, .btn-book:hover {
    background-color: #138496;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(23, 162, 184, 0.3);
    color: white;
}

.btn-home {
    background-color: #17a2b8;
    color: white;
    padding: 15px 40px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 25px;
    text-transform: none;
    transition: all 0.3s ease;
    min-width: 180px;
    animation: fadeInUp 0.6s ease-in-out 1.6s both;
}

.btn-home:hover {
    background-color: #138496;
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(23, 162, 184, 0.3);
    color: white;
}

.close {
    font-size: 1.3rem;
    font-weight: 300;
    color: #17a2b8;
    opacity: 0.8;
    text-shadow: none;
    position: absolute;
    right: 15px;
    top: 15px;
}

.close:hover {
    opacity: 1;
    color: #138496;
}

/* Responsive Modal */
@media (max-width: 768px) {
    .modal-dialog {
        margin: 15px;
        max-width: calc(100% - 30px);
    }
    
    .modal-body {
        padding: 15px;
    }
    
    .time-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }
    
    .service-selector {
        flex-direction: column;
        gap: 8px;
    }
    
    .service-price-display {
        align-self: stretch;
    }

    .booking-summary {
        flex-direction: column;
        gap: 10px;
        padding: 12px;
    }

    .summary-left {
        justify-content: center;
    }

    .modal-title {
        font-size: 1.5rem;
    }
    
    .time-slot {
        padding: 8px 12px;
        font-size: 0.8rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Price mapping for services
    const servicePrices = {
        'Tax Preparation': 'Contact for pricing',
        'Accounting and Financial Management': '$27.00',
        'Business Startup Assistance': '$150.00',
        'ITIN Application Support': '$185.00'
    };

    // Modal functionality
    const serviceButtons = document.querySelectorAll('.btn-service');
    
    serviceButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent any default behavior
            event.stopPropagation(); // Stop event bubbling
            
            const serviceName = button.getAttribute('data-service');
            const serviceSelect = document.getElementById('serviceSelect');
            const servicePriceDisplay = document.getElementById('servicePriceDisplay');
            
            // Set selected service
            serviceSelect.value = serviceName;
            servicePriceDisplay.textContent = servicePrices[serviceName] || '$';
            
            // Reset to step 1
            showStep(1);
            
            // Show modal
            $('#bookingModal').modal('show');
        });
    });

    // Service dropdown change handler
    document.getElementById('serviceSelect').addEventListener('change', function() {
        const selectedService = this.value;
        const servicePriceDisplay = document.getElementById('servicePriceDisplay');
        servicePriceDisplay.textContent = servicePrices[selectedService] || '$';
    });    // Time slot selection
    const timeSlots = document.querySelectorAll('.time-slot');
    const timeSelect = document.getElementById('bookingTime');
    
    timeSlots.forEach(function(slot) {
        slot.addEventListener('click', function() {
            // Remove selected class from all slots
            timeSlots.forEach(function(s) {
                s.classList.remove('selected');
            });
            
            // Add selected class to clicked slot
            this.classList.add('selected');
            
            // Update the time input
            const selectedTime = this.getAttribute('data-time');
            timeSelect.value = selectedTime;
            
            // If the time is not in the select options, add it temporarily
            if (!Array.from(timeSelect.options).some(option => option.value === selectedTime)) {
                const newOption = document.createElement('option');
                newOption.value = selectedTime;
                newOption.textContent = selectedTime;
                timeSelect.appendChild(newOption);
                timeSelect.value = selectedTime;
            }
        });
    });
    
    // Also handle when user changes the select dropdown
    timeSelect.addEventListener('change', function() {
        const selectedTime = this.value;
        
        // Update time slot buttons
        timeSlots.forEach(function(slot) {
            slot.classList.remove('selected');
            if (slot.getAttribute('data-time') === selectedTime) {
                slot.classList.add('selected');
            }
        });
    });    // Continue button (Step 1 to Step 2)
    document.getElementById('continueBooking').addEventListener('click', function() {
        const selectedService = document.getElementById('serviceSelect').value;
        const selectedDate = document.getElementById('bookingDate').value;
        const selectedTime = document.getElementById('bookingTime').value; // Get from select instead of button
        
        if (!selectedDate) {
            alert('Please select a date for your appointment.');
            return;
        }
        
        if (!selectedTime) {
            alert('Please select a time for your appointment.');
            return;
        }
        
        // Update summary in step 2
        updateBookingSummary(selectedService, selectedDate, selectedTime);
        
        // Show step 2
        showStep(2);
    });

    // Back button (Step 2 to Step 1)
    document.getElementById('backToStep1').addEventListener('click', function() {
        showStep(1);
    });    // Final booking submission
    document.getElementById('submitFinalBooking').addEventListener('click', function() {
        const userName = document.getElementById('userName').value.trim();
        const userEmail = document.getElementById('userEmail').value.trim();
        const termsAgreement = document.getElementById('termsAgreement').checked;
        
        if (!userName) {
            alert('Please enter your name.');
            document.getElementById('userName').focus();
            return;
        }
        
        if (!userEmail) {
            alert('Please enter your email.');
            document.getElementById('userEmail').focus();
            return;
        }
        
        if (!termsAgreement) {
            alert('Please agree to the terms and conditions.');
            document.getElementById('termsAgreement').focus();
            return;
        }
          // Get all booking data
        const bookingData = {
            service: document.getElementById('serviceSelect').value,
            date: document.getElementById('bookingDate').value,
            time: document.getElementById('bookingTime').value, // Get from select instead of button
            name: userName,
            email: userEmail,
            phone: document.getElementById('userPhone').value,
            message: document.getElementById('userMessage').value
        };
        
        // Here you would typically send the data to your server
        console.log('Booking data:', bookingData);
        
        // Show success step
        showStep(3);
    });

    // Back to Home button
    document.getElementById('backToHome').addEventListener('click', function() {
        $('#bookingModal').modal('hide');
        resetModal();
        
        // Optional: scroll to top of page
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Helper function to show specific step
    function showStep(stepNumber) {
        const step1 = document.getElementById('step1');
        const step2 = document.getElementById('step2');
        const step3 = document.getElementById('step3');
        
        // Hide all steps
        step1.style.display = 'none';
        step2.style.display = 'none';
        step3.style.display = 'none';
        
        // Show selected step
        if (stepNumber === 1) {
            step1.style.display = 'block';
        } else if (stepNumber === 2) {
            step2.style.display = 'block';
        } else if (stepNumber === 3) {
            step3.style.display = 'block';
            // Restart animations for step 3
            restartSuccessAnimations();
        }
    }    // Helper function to restart success animations
    function restartSuccessAnimations() {
        const elements = document.querySelectorAll('.checkmark-circle, .checkmark-icon, .success-title, .success-message, .btn-home');
        elements.forEach(function(element) {
            element.style.animation = 'none';
            element.offsetHeight; // Trigger reflow
            element.style.animation = null;
        });
    }

    // Helper function to update booking summary
    function updateBookingSummary(service, date, time) {
        const dateObj = new Date(date + 'T00:00:00');
        const day = dateObj.getDate();
        const month = dateObj.toLocaleDateString('en-US', { month: 'short' });
        
        document.getElementById('summaryDay').textContent = day;
        document.getElementById('summaryMonth').textContent = month;
        document.getElementById('summaryTime').textContent = time;
        document.getElementById('summaryService').textContent = service;
    }    // Helper function to reset modal
    function resetModal() {
        showStep(1);
        document.getElementById('bookingForm').reset();
        document.getElementById('contactForm').reset();
        
        // Reset time slots
        timeSlots.forEach(function(s) {
            s.classList.remove('selected');
        });
        timeSlots[4].classList.add('selected'); // Default to 12:00 PM (5th button, index 4)
        
        // Reset time select to match the selected button
        document.getElementById('bookingTime').value = '12:00 PM';
        
        // Reset default values
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('bookingDate').value = today;
        const defaultService = document.getElementById('serviceSelect').value;
        document.getElementById('servicePriceDisplay').textContent = servicePrices[defaultService] || '$';
    }

    // Reset modal when closed
    $('#bookingModal').on('hidden.bs.modal', function() {
        resetModal();
    });

    // Set default date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('bookingDate').value = today;

    // Initialize default price
    const defaultService = document.getElementById('serviceSelect').value;
    document.getElementById('servicePriceDisplay').textContent = servicePrices[defaultService] || '$';

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);

    // Observe all service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(function(card) {
        card.style.animationPlayState = 'paused';
        observer.observe(card);
    });
});
</script>
