<!-- Slider Section Styles -->
<link rel="stylesheet" href="<?= base_url('./public/css/slider.css') ?>">

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