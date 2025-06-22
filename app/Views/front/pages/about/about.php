<div id="about" class="about top_layer" style="background-image: url('images/about_bg.jpg'); background-attachment: fixed; background-size: cover;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pppp">
                <div class="about_box">
                    <div class="about_box_text" style="opacity: 0; transform: translateY(20px); transition: opacity 0.8s ease, transform 0.8s ease;">
                        <div class="title">
                            <h2>About <strong class="black"> us</strong></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <button class="cta-button" id="learnMoreButton">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 pppp">
                <div class="about_box_img">
                    <figure>
                        <img src="images/about_img.png" alt="#" style="transition: transform 0.5s ease;">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="aboutModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
    <div class="modal-content" style="background: #fff; padding: 20px; border-radius: 5px; max-width: 500px; text-align: center;">
        <h2>More About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        <button id="closeModalButton" style="background-color: #28a745; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Close</button>
    </div>
</div>

<style>
    .cta-button {
        background-color: #28a745; /* Updated to a green tone */
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        margin-top: 20px; /* Added margin for better separation */
    }
    .cta-button:hover {
        background-color: #218838; /* Darker green for hover */
        transform: scale(1.1);
    }
</style>

<script>
    // Text fade-in animation on scroll
    window.addEventListener('scroll', function() {
        const aboutText = document.querySelector('.about_box_text');
        const rect = aboutText.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            aboutText.style.opacity = '1';
            aboutText.style.transform = 'translateY(0)';
        }
    });

    // Zoom effect on image hover
    const aboutImage = document.querySelector('.about_box_img img');
    aboutImage.addEventListener('mouseover', function() {
        this.style.transform = 'scale(1.1)';
    });
    aboutImage.addEventListener('mouseout', function() {
        this.style.transform = 'scale(1)';
    });

    // Modal functionality
    const learnMoreButton = document.getElementById('learnMoreButton');
    const aboutModal = document.getElementById('aboutModal');
    const closeModalButton = document.getElementById('closeModalButton');

    learnMoreButton.addEventListener('click', function() {
        aboutModal.style.display = 'flex';
    });

    closeModalButton.addEventListener('click', function() {
        aboutModal.style.display = 'none';
    });
</script>