
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="	">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thomi Jasir Profile</title>

    <!-- Vendor CSS & Liblary -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-3.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup.css">
    <link rel="stylesheet" href="vendor/mediaelementplayer.css">
    <link rel="stylesheet" href="vendor/masterslider.css">
    <link rel="stylesheet" href="vendor/masterslider-style.css">
    <link rel="stylesheet" href="vendor/colorio.css">
    <link rel="stylesheet" href="vendor/owee/owee.css">
    <!-- Font Required -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <!-- CSS styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /CSS styles -->

</head>
<body class="show-sidebar dark-sidebar">

<a href="#" id="menu-toggle-wrapper">
    <div id="menu-toggle"></div>
</a>

<!-- inner bar wrapper -->
<a href="#" id="inner-bar">

</a>
<!-- /inner bar wrapper -->

<div id="side-bar">
    <div class="inner-wrapper">
        <div id="side-inner">

            <div id="logo-wrapper">
                <a href="index.html"><img src="asset/image/profile.png" alt="logo"></a>
            </div>

            <div id="side-contents">

                <ul id="navigation">
                    <li><a href="{{route("home")}}">Home</a></li>
                    <li><a href="{{route("portofolio")}}">Portfolio</a></li>
                    <li><a href="{{route("profile")}}">Profile</a></li>
                    <li><a href="{{route("skill")}}">Skills</a></li>
                    <li><a href="{{route("contact")}}">Contact</a></li>
                </ul>

            </div>

            <!-- Sidebar footer -->
            <div id="side-footer">
                <!-- Social icons -->
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
                <!-- /Social icons -->
                <div id="copyright">
                    Copyright	&copy; 2017
                </div>
            </div>
            <!-- /Sidebar footer -->

        </div>
    </div>
</div>

@yield("page-wrap")



<!-- jquery core -->
<script type="text/javascript" src="vendor/jquery/jquery-1.11.0.min.js"></script>

<!-- imagesLoaded jquery plugin -->
<script type="text/javascript" src="vendor/js/imagesloaded.pkgd.min.js"></script>

<!-- jquery isotop plugin -->
<script type="text/javascript" src="vendor/js/isotope.pkgd.min.js"></script>

<!-- jquery history neede for ajax pages -->
<script type="text/javascript" src="vendor/js/jquery.history.js"></script>

<!-- owwwlab jquery kenburn slider plugin -->
<script type="text/javascript" src="vendor/owee/jquery.owwwlab-kenburns.js"></script>

<!-- owwwlab jquery double carousel plugin -->
<script type="text/javascript" src="vendor/owee/jquery.owwwlab-DoubleCarousel.js"></script>

<!-- owwwwlab jquery video background plugin -->
<script type="text/javascript" src="vendor/owee/jquery.owwwlab-video.js"></script>

<!-- tweenmax animation framework -->
<script type="text/javascript" src="vendor/js/TweenMax.min.js"></script>

<!-- jquery nice scroll plugin needed for vertical portfolio page -->
<script type="text/javascript" src="vendor/js/jquery.nicescroll.min.js"></script>

<!-- jquery magnific popup needed for ligh-boxes -->
<script type="text/javascript" src="vendor/js/jquery.magnific-popup.js"></script>

<!-- html5 media player -->
<script type="text/javascript" src="vendor/js/mediaelement-and-player.min.js"></script>

<!-- jquery inview plugin -->
<script type="text/javascript" src="vendor/js/jquery.inview.min.js"></script>

<!-- smooth scroll -->
<script type="text/javascript" src="vendor/js/smoothscroll.js"></script>

<!-- Master Slider -->
<script src="vendor/masterslider/jquery.easing.min.js"></script>
<script src="vendor/masterslider/masterslider.min.js"></script>
<!-- theme custom scripts -->
<script type="text/javascript" src="vendor/js/customio.js"></script>
@yield("scripts")

</body>

</html>