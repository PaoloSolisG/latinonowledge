<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2>Contact<strong class="black"> Us</strong></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding">
            <form class="main_form">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" placeholder="Name" type="text" name="Name">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" placeholder="Email" type="text" name="Email">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <button class="send">Send</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="mail-icon">
                            <li><img src="images/phone_icon.png" /> (+71) 75896472 (+72) 258963475</li>
                            <li><img src="images/mail_icon.png" /> Demo@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="social_icon">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padddd">
            <div class="map_section">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<script>
    // This example adds a marker to indicate the position of Times Square in New York City.
 function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script><!-- end google map js -->

