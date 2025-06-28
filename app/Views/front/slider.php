<div id="slider" class="slider_section banner_main" style="margin-top: 100px; position: relative; z-index: 1;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="https://speedy.uenicdn.com/a7278618-7a54-4df4-86b5-fda0f0563468/c1920_800a/image/upload/v1739612958/business/292d64f7-960a-4d26-956c-f4ae51ac66e1.jpg" alt="Financial Solutions">
                <div class="carousel-overlay"></div>
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1 class="animate-fade-in">Maximize Your<br><strong class="dark_brown">Financial Potential</strong></h1>
                        <p class="animate-fade-in-delay">Discover reliable solutions designed to simplify your financial challenges and help you grow with confidence.</p>
                        <a id="contactUsLink" href="#contact" class="btn btn-financial">Contact Us Today</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="https://speedy.uenicdn.com/a7278618-7a54-4df4-86b5-fda0f0563468/c1920_800a/image/upload/v1739612958/business/292d64f7-960a-4d26-956c-f4ae51ac66e1.jpg" alt="Investment Growth">
                <div class="carousel-overlay"></div>
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1 class="animate-fade-in">Smart Investment<br><strong class="dark_brown">Strategies</strong></h1>
                        <p class="animate-fade-in-delay">Build wealth through proven investment approaches tailored to your unique financial goals and risk tolerance.</p>
                        <a id="contactUsLink" href="#contact" class="btn btn-financial">Learn More</a>
                    </div>
                </div>
            </div>            <div class="carousel-item">
                <img class="third-slide" src="https://speedy.uenicdn.com/a7278618-7a54-4df4-86b5-fda0f0563468/c1920_800a/image/upload/v1739612958/business/292d64f7-960a-4d26-956c-f4ae51ac66e1.jpg" alt="Financial Planning">
                <div class="carousel-overlay"></div>
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1 class="animate-fade-in">Professional<br><strong class="dark_brown">Financial Planning</strong></h1>
                        <p class="animate-fade-in-delay">Secure your future with comprehensive financial planning services designed for long-term success.</p>
                        <a id="contactUsLink" href="#contact" class="btn btn-financial">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>    </div>
</div>

<style>
/* Slider Improvements */
.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
    z-index: 1;
}

.carousel-caption {
    z-index: 2;
    text-align: center;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
}

.carousel-caption h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.carousel-caption p {
    font-size: 1.3rem;
    margin-bottom: 30px;
    line-height: 1.6;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.btn-financial {
    background: linear-gradient(90deg, #00cccc 0%, #28DEBB 100%);
    color: #FDFCF9;
    padding: 15px 35px;
    font-size: 1.1rem;
    font-weight: 600;
    border: 2px solid #30C5DC;
    border-radius: 50px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.btn-financial:hover {
    background: #08f39d;
    color: #333;
    border-color: #08f39d;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    text-decoration: none;
}

.animate-fade-in {
    animation: fadeInUp 1s ease-out;
}

.animate-fade-in-delay {
    animation: fadeInUp 1s ease-out 0.3s both;
}

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

.carousel-indicators {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex !important;
    flex-direction: row !important;
    justify-content: center;
    align-items: center;
    width: auto;
    margin-left: 0;
    z-index: 3;
    padding-left: 0;
    list-style: none;
}

.carousel-indicators li {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #FDFCF9;
    border: 2px solid #30C5DC;
    margin: 0 8px;
    display: inline-block;
    transition: background 0.3s, border 0.3s;
}

.carousel-indicators .active {
    background-color: #c8b568;
    border-color: #c8b568;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
    color: #28a745;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(40, 167, 69, 0.8);
    border-radius: 50%;
    padding: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .carousel-caption h1 {
        font-size: 2.5rem;
    }
    
    .carousel-caption p {
        font-size: 1.1rem;
    }
    
    .btn-financial {
        padding: 12px 25px;
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    #slider {
        margin-top: 5px !important;
    }
    .carousel-indicators {
        flex-direction: row !important;
        display: flex !important;
        justify-content: flex-end !important;
        align-items: center;
        width: 100%;
        margin-left: 0;
    }
    .carousel-caption h1 {
        font-size: 2rem;
    }
    
    .carousel-caption p {
        font-size: 1rem;
    }
}
</style>

<script>
    // Enhanced smooth scrolling with multiple contact links
    document.addEventListener('DOMContentLoaded', function() {
        const contactLinks = document.querySelectorAll('a[href="#contact"]');
        
        contactLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const contactElement = document.getElementById('contact');
                if (contactElement) {
                    const headerHeight = document.getElementById('mainHeader')?.offsetHeight || 0;
                    const elementPosition = contactElement.getBoundingClientRect().top + window.pageYOffset;
                    const offsetPosition = elementPosition - headerHeight;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                } else {
                    console.error('The element with ID "contact" does not exist.');
                }
            });
        });
    });
</script>