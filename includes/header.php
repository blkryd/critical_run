<?php
/**
 * Created by PhpStorm.
 * User: Shamem Ahmad
 * Email : blkryd@gmail.com
 * Date: 9/24/2017
 * Time: 12:35 AM
 */
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="East West University Business Club Presents">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="shortcut icon" type="image/x-icon" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

    <!-- Site Title -->
    <title>Critical Run 2017</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
<!--    <link href="css/mdb.min.css" rel="stylesheet">-->

    <!-- DropZone CSS -->
    <link href="assets/dropzone/dropzone.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!--Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.default.min.css">

    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">

    <!-- Main Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->

    <!-- End Footer Area -->
    <!-- DropZone Js -->
    <script src="assets/dropzone/dropzone.js"></script>

    <!-- jquery min -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>


    <!-- jQuery Easing -->
    <script src="assets/js/jquery.easing.js"></script>

    <!-- Owl Carousel Js -->
    <!--<script src="js/owl.carousel.min.js"></script>-->
    <script src="assets/owlcarousel/owl.carousel.min.js"></script>

    <!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

    <!-- Mean Menu -->
    <script src="assets/js/jquery.meanmenu.js"></script>

    <!-- Particles JS CDN -->
    <script src="assets/js/particles.min.js"></script>

    <!-- Main Js -->
    <script src="assets/js/main.js"></script>

    <script type="application/javascript">
        $(document).ready(function() {

            var owl = $("#sponsor");

            owl.owlCarousel({
                items : 10, //10 items above 1000px browser width
                itemsDesktop : [1000,5], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });


        });
    </script>

</head>

<body>
<!-- Preloader starts-->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
<!-- Preloader ends -->

<!-- Start Header -->
<header>
    <!-- Start Mainmenu -->
    <div class="menu-area navbar-fixed-top ">
        <div class="container">
            <div class="row">
                <div class="mainmenu-wrapper">
                    <!-- Start Header Logo -->
                    <div class="col-xs-12 col-md-5">
                        <div class="header-logo">
                            <h2><a href="index.php">Critical Run 2017</a></h2>
                        </div>
                    </div>
                    <!-- End Header Logo -->
                    <!-- Start Navigation -->
                    <div class="col-xs-12 col-md-7">
                        <div class="mainmenu">
                            <div class="navbar navbar-right">
                                <div class="navbar-header visible-xs">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse top-menu">
                                    <nav>
                                        <ul class="nav navbar-nav">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="register.php">Registration</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mainmenu -->
    <!-- Start Mobile Menu Area -->
    <div class="col-xs-12 visible-xs">
        <div class="mobile-menu">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End MObile Menu Area -->
</header>
