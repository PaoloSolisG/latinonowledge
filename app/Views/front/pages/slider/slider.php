<div id="slider" class="slider_section banner_main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>Gather<br><strong class="dark_brown">New Body Energy</strong></h1>
                        <a id="contactUsLink" href="#contact">contact us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>Gather<br><strong class="dark_brown">New Body Energy</strong></h1>
                        <a id="contactUsLink" href="#">contact us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>Gather<br><strong class="dark_brown">New Body Energy</strong></h1>
                        <a id="contactUsLink" href="#">contact us</a>
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
        </a>
    </div>
</div>
<script>
    document.getElementById('contactUsLink').addEventListener('click', function(event) {
        event.preventDefault();
        const contactElement = document.getElementById('contact');
        if (contactElement) {
            const headerHeight = document.getElementById('mainHeader').offsetHeight || 0; // Adjust for header height
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
</script>