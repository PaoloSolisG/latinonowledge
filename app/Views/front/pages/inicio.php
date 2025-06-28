<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Latino Knowledge - Strategic Financial Guidance</title>
    <meta name="keywords" content="latino knowledge, tax preparation, accounting, financial management, business startup assistance, ITIN, newport news, virginia">
    <meta name="description" content="Latino Knowledge provides expert financial services including tax preparation, accounting, financial management, and business startup assistance in Newport News, Virginia.">
    <meta name="author" content="Latino Knowledge">

    <base href="<?php echo base_url('public/front') ?>/">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FontAwesome 6 for modern icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Latino Knowledge Enhanced Styles -->
    <link rel="stylesheet" href="css/latino-knowledge-enhanced.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <?php include APPPATH . 'Views/front/header/header.php'; ?>        <div id="content">
            <?php include APPPATH . 'Views/front/pages/slider/slider.php'; ?>
            <?php include APPPATH . 'Views/front/pages/home/home.php'; ?>
            <?php include APPPATH . 'Views/front/pages/services/services_enhanced.php'; ?>
            <?php include APPPATH . 'Views/front/pages/team/team_enhanced.php'; ?>
            <?php include APPPATH . 'Views/front/pages/insights/insights_enhanced.php'; ?>
            <?php include APPPATH . 'Views/front/pages/contacto/contact_enhanced.php'; ?>
        </div>
        <?php include APPPATH . 'Views/front/footer/footer.php'; ?>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>
        // Latino Knowledge location: Newport News, Virginia
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 37.0871,
                    lng: -76.4730
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 37.0871,
                    lng: -76.4730
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->

</body>

</html>