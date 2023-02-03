<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services</title>
    <!--/google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
    <?php include 'modal.php'; ?> 
    <style>
        .goog-logo-link {
        	display: none !important;
    	}
    	.goog-te-gadget {
    		color: transparent !important;
    	}
        .language{
            margin-top: 9px;
        }
        .inner-banner {
            background: url("./assets/images/gallery-banner.jpg") no-repeat center;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            -ms-background-size: cover;
            position: relative;
            z-index: 0;
        }
        .gallery-products{
        width: 80%;
        border: 1px solid transparent;
        margin: auto;
        margin-bottom: 30px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    .gallery-products-div{
        border: 1px solid transparent;
        margin: auto;
        box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
    }
    .gallery-products-div-button{
        display: flex;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .gallery-products-div-button button{
        border-radius: 20px;
        width: 130px;
        background-color: #ff7800;
        border: 1px solid darkgray;
    }
    .gallery-products-img{
        width: 260px;
        height: 200px;
        border: 1px solid transparent;
        margin: auto;
    }
    .gallery-products-img img{
        width: 260px;
        height: 200px;
    }
    .product-heading{
        text-align: center;
    }
    .Enquiry-btn:hover{
        color: white;
    }
    @media(max-width: 704px){
            .bwt-logo img{
                width: 160px;
                margin-left: -140px;
            }
        }
    </style>
</head>

<body>

    <!-- top header -->
    <section class="w3l-top-header py-3">
        <div class="container">
            <div class="d-grid main-top">
                <div class="top-header-left">
                    <ul class="info-top-gridshny">
                        <li class="info-grid">
                            <div class="info-icon"><span class="far fa-envelope"></span></div>
                            <div class="info-text" style="display: flex; align-items: center;">
                                <!-- <p>Monday - Friday 08:00 - 20:00</p> -->
                                <p>abc@gmail.com</p>
                            </div>

                        </li>
                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-phone-alt"></span></div>
                            <div class="info-text" style="display: flex; align-items: center;">
                                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                                <!-- <p><a href="tel:+1(21) 234 4568">+1(21) 234 557 45678</a></p> -->
                            </div>

                        </li>
                        <li class="info-grid">
                            <div class="info-icon"><span class="fas fa-map-marker-alt"></span></div>
                            <div class="info-text">
                                <p>34th Avenue</p>
                                <p>New York, S2 Honey Block</p>

                            </div>

                        </li>
                    </ul>
                </div>
                <div class="top-header-right text-lg-right">
                    <ul>
                        <li>
                            <a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                        </li>
                        <li>
                            <a href="#twitter"><span class="fab fa-twitter"></span></a>
                        </li>
                        <li><a href="#instagram" class="instagram mr-0"><span class="fab fa-google-plus-g"></span></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //top header -->

    <!--/Header-->
    <header id="site-header" class="">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.php">
                        Construe
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="services.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                        <div class="language"><a id="google_translate_element"></a></div>
                    </ul>
                    <!--/search-right-->
                    <!-- <ul class="header-search mx-lg-4">
                        <div class="w3hny-search">
                            <form action="#" method="GET" class="d-flex search-form">
                                <input class="form-control" type="search" placeholder="Search..." aria-label="Search" required="">
                                <button class="btn btn-style btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </ul> -->
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <!-- <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div> -->
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5 pb-sm-0">
        <section class="w3l-breadcrumb text-left py-sm-5 pb-0">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->

    <!--/w3-grids-->
    <section class="w3l-passion-sec2 py-5">
        <div class="container py-md-5 py-3">
            <div class="container">
                <div class="row w3l-passion-mid-grids">
                    <div class="col-lg-6 passion-grid-item-info pe-lg-5 mb-lg-0 mb-5">
                        <div class="title-content-two">
                            <h6 class="title-subw3hny mb-1 text-left">About</h6>
                            <h3 class="title-w3l mb-4">Order online with convenience.</h3>
                        </div>
                        <p class="mt-3 pe-lg-5">At Organic Spices, we strive to offer you the best in organic ingredients. We use only certified organic herbs and spices that are free from harmful pesticides, artificial additives, or any other questionable substances. So you can enjoy your cooking with peace of mind!</p>
                        <div class="w3banner-content-btns">
                            <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe mfp-iframe-btn btn btn-style btn-primary mt-lg-5 mt-4 me-2 " data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
                            <!-- <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4 me-2">Read More </a> -->
                            <a href="contact.html" class="btn btn-style btn-outline-dark mt-lg-5 mt-4">Contact Us </a>
                        </div>

                    </div>
                    <div class="col-lg-6 w3hny-passion-item">
                        <img src="assets/images/gallery-about.jpg" alt="" class="img-fluid radius-image">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//w3-grids-->

    <!-- features section -->
    <!-- <section class="w3l-features w3l-passion-mid-sec py-5" id="features">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="main-cont-wthree-2 align-items-center text-left">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Creative Plan & Design</a></h4>
                            <p class="text-para">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Best Professional Liability</a></h4>
                            <p class="text-para">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Engineering Techniques </a></h4>
                            <p class="text-para">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-md-0 mt-5">
                        <div class="grids-1 box-wrap">
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4><a href="#service" class="title-head mb-3">Dedicated To Our Clients</a></h4>
                            <p class="text-para">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!--//features section -->
    <div class="our-prducts" >
        <h1 style="text-align: center; margin-bottom: 20px;">Our Products</h1>
    </div>
    <!-- Gallery Products -->
    <div class="gallery-products">
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (6).jpg" alt="">
            </div>
            <h5 class="product-heading">Elaichi</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>
            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (7).jpg" alt="">
            </div>
            <h5 class="product-heading">Red Chillie</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (8).jpg" alt="">
            </div>
            <h5 class="product-heading">Laung</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (9).jpg" alt="">
            </div>
            <h5 class="product-heading">Mustard Seed</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (10).jpg" alt="">
            </div>
            <h5 class="product-heading">Haldi Powder</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (2).jpg" alt="">
            </div>
            <h5 class="product-heading">Corn</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (3).jpg" alt="">
            </div>
            <h5 class="product-heading">Kaali Mirch</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (4).jpg" alt="">
            </div>
            <h5 class="product-heading">Clove</h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        <div class="gallery-products-div">
            <div class="gallery-products-img">
                <img src="./assets/images/gp (5).jpg" alt="">
            </div>
            <h5 class="product-heading">Masale Powder </h5>
            <div class="gallery-products-div-button">
                <button class="btn-enquiry-now btn Enquiry-btn mfp-iframe btn-enquiry-product" data-bs-toggle="modal" data-toggle="modal" data-bs-target="#exampleModal2" data-target="#exampleModal2">Enquiry now</button>

            </div>
        </div>
        
    </div>
    <!-- Gallery Products -->

    <!--/w3l-services-->
    <section class="w3l-services py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content mb-5 text-center">
                <h6 class="title-subw3hny mb-1">Services</h6>
                <h3 class="title-w3l mb-4">We Offer Services</h3>
            </div>
            <div class="row about-cols">
                <div class="col-md-4">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/images/gallery-service (1).jpg" alt="" class="img-fluid radius-image">
                            <div class="icon"><i class="fas fa-pencil-ruler"></i></div>
                        </div>
                        <h4 class="title"><a href="#">Transportation</a></h4>
                        <p>
                           Best transportation facility with secure packages and legal documents.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/images/gallery-service (2).jpg" alt="" class="img-fluid radius-image">
                            <div class="icon"><i class="fas fa-tools"></i></div>
                        </div>
                        <h4 class="title"><a href="#">Acres Of Farms</a></h4>
                        <p>
                            Large agricultural lands for massive cultivation and production.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="about-col">
                        <div class="img">
                            <img src="assets/images/gallery-service (3).jpg" alt="" class="img-fluid radius-image">
                            <div class="icon"><i class="fas fa-bars"></i></div>
                        </div>
                        <h4 class="title"><a href="#">Warehouse</a></h4>
                        <p>
                            Best in warehouse facility for storing goods at natural temperatures.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//w3l-services-->
    <!--/footer-9-->
    <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-3">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-4 sub-one-left pe-lg-5">
                            <h6>About </h6>
                            <p class="footer-phny pe-lg-3">Organic Spices makes it easy to get access to premium quality spices all in one place. Our online store provides convenient shopping with fast delivery so you can get the exact flavor you’re looking for at any time!</p>
                            <div class="columns-2 mt-lg-5 mt-4">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <!-- <li><a href="#linkedin"><span class="fab fa-linkedin-in"></span></a> -->
                                    </li>
                                    <li><a href="#twitter"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fab fa-google-plus-g"></span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 sub-two-right">
                            <h6>Information</h6>
                            <ul>
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="about.html">About Us</a>
                                </li>

                                <li><a href="services.html">Services</a>
                                </li>

                                <!-- <li><a href="#blog">Blog</a> -->
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <!-- <li><a href="">Terms & Conditions</a></li> -->
                            </ul>
                        </div>
                        <div class="bwt-logo" style="width: 400px; height: 100px; border: 1px solid transparent; margin-left: 150px; margin-top: 50px;">
                            <img src="./assets/images/bwt-white.png" alt="" style="width: 350px; height: 100px;">
                        </div>
                        <!-- <div class="col-lg-2 sub-two-right">
                            <h6>Company</h6>
                            <ul>

                                <li><a href="#why">Customer Services</a>
                                </li>
                                <li><a href="#licence">Prompt Delivery
                                    </a>
                                </li>
                                <li><a href="#log">Offers
                                    </a></li>
                                <li><a href="#log">Reliable Equipment
                                    </a></li>
                                <li><a href="#career">Careers</a></li>


                            </ul>
                        </div> -->
                        <!-- <div class="col-lg-4 sub-one-left">
                            <h6>Twitter Feed</h6>
                            <ul>
                                <li class="w3tweet-holder-grids">
                                    <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                    <div class="w3tweet-text">
                                        <a target="_blank" href="#">@Honynilf</a> Hi <a target="_blank" href="#">@Honynilf</a> , can you please submit a ticket at <a target="_blank" href="#">https://v.co/ij123A34J45A</a> and one of our support agent… <a target="_blank" href="#">https://v.co/ij123A34J45A</a> <a class="w3tweet-time" target="_blank" href="#">
                                            1 year ago </a>
                                    </div>
                                </li>
                                <li class="w3tweet-holder-grids">
                                    <div class="w3-twitter-icon"><i class="fab fa-twitter"></i></div>
                                    <div class="w3tweet-text">
                                        <a target="_blank" href="#">@Honynilf</a> Hi <a target="_blank" href="#">@Honynilf</a> , can you please submit a ticket at <a target="_blank" href="#">https://v.co/ij123A34J45A</a> and one of our support agent… <a target="_blank" href="#">https://v.co/ij123A34J45A</a> <a class="w3tweet-time" target="_blank" href="#">
                                            2 year ago </a>
                                    </div>
                                </li>

                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="below-section mt-5">
                    <div class="copyright-footer">
                        <div class="columns text-left">
                            <p>ABC Company
                            </p>
                        </div>
                        <ul class="footer-w3list text-right">
                            <li><a href="">Privacy Policy</a>
                            </li>
                            <li><a href="">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!--//footer-9 -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>




    <!-- ENQUIRY NOW/LANGUAGE CONVERTER
============================================ -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript">
    (function () {
        var gtConstEvalStartTime = new Date();
        /*
      
         Copyright The Closure Library Authors.
         SPDX-License-Identifier: Apache-2.0
        */
        var h = this || self,
            l = /^[\w+/_-]+[=]{0,2}$/,
            m = null;

        function n(a) {
            return (a = a.querySelector && a.querySelector("script[nonce]")) && (a = a.nonce || a.getAttribute("nonce")) && l.test(a) ? a : ""
        }

        function p(a, b) {
            function c() { }
            c.prototype = b.prototype;
            a.i = b.prototype;
            a.prototype = new c;
            a.prototype.constructor = a;
            a.h = function (g, f, k) {
                for (var e = Array(arguments.length - 2), d = 2; d < arguments.length; d++) e[d - 2] = arguments[d];
                return b.prototype[f].apply(g, e)
            }
        }

        function q(a) {
            return a
        };

        function r(a) {
            if (Error.captureStackTrace) Error.captureStackTrace(this, r);
            else {
                var b = Error().stack;
                b && (this.stack = b)
            }
            a && (this.message = String(a))
        }
        p(r, Error);
        r.prototype.name = "CustomError";

        function u(a, b) {
            a = a.split("%s");
            for (var c = "", g = a.length - 1, f = 0; f < g; f++) c += a[f] + (f < b.length ? b[f] : "%s");
            r.call(this, c + a[g])
        }
        p(u, r);
  
        u.prototype.name = "AssertionError";

        function v(a, b) {
            throw new u("Failure" + (a ? ": " + a : ""), Array.prototype.slice.call(arguments, 1));
        };
        var w;

        function x(a, b) {
            this.g = b === y ? a : ""
        }
        x.prototype.toString = function () {
            return this.g + ""
        };
        var y = {};

        function z(a) {
            var b = document.getElementsByTagName("head")[0];
            b || (b = document.body.parentNode.appendChild(document.createElement("head")));
            b.appendChild(a)
        }

        function _loadJs(a) {
            var b = document;
            var c = "SCRIPT";
            "application/xhtml+xml" === b.contentType && (c = c.toLowerCase());
            c = b.createElement(c);
            c.type = "text/javascript";
            c.charset = "UTF-8";
            if (void 0 === w) {
                b = null;
                var g = h.trustedTypes;
                if (g && g.createPolicy) {
                    try {
                        b = g.createPolicy("goog#html", {
                            createHTML: q,
                            createScript: q,
                            createScriptURL: q
                        })
                    } catch (t) {
                        h.console && h.console.error(t.message)
                    }
                    w = b
                } else w = b
            }
            a = (b = w) ? b.createScriptURL(a) : a;
            a = new x(a, y);
            a: {
                try {
                    var f = c && c.ownerDocument,
                        k = f && (f.defaultView || f.parentWindow);
                    k = k || h;
                    if (k.Element && k.Location) {
                        var e = k;
                        break a
                    }
                } catch (t) { }
                e = null
            }
            if (e && "undefined" != typeof e.HTMLScriptElement && (!c || !(c instanceof e.HTMLScriptElement) && (c instanceof e.Location || c instanceof e.Element))) {
                e = typeof c;
                if ("object" == e && null != c || "function" == e) try {
                    var d = c.constructor.displayName || c.constructor.name || Object.prototype.toString.call(c)
                } catch (t) {
                    d = "<object could not be stringified>"
                } else d = void 0 === c ? "undefined" : null === c ? "null" : typeof c;
                v("Argument is not a %s (or a non-Element, non-Location mock); got: %s",
                    "HTMLScriptElement", d)
            }
            a instanceof x && a.constructor === x ? d = a.g : (d = typeof a, v("expected object of type TrustedResourceUrl, got '" + a + "' of type " + ("object" != d ? d : a ? Array.isArray(a) ? "array" : d : "null")), d = "type_error:TrustedResourceUrl");
            c.src = d;
            (d = c.ownerDocument && c.ownerDocument.defaultView) && d != h ? d = n(d.document) : (null === m && (m = n(h.document)), d = m);
            d && c.setAttribute("nonce", d);
            z(c)
        }

        function _loadCss(a) {
            var b = document.createElement("link");
            b.type = "text/css";
            b.rel = "stylesheet";
            b.charset = "UTF-8";
            b.href = a;
            z(b)
        }

        function _isNS(a) {
            a = a.split(".");
            for (var b = window, c = 0; c < a.length; ++c)
                if (!(b = b[a[c]])) return !1;
            return !0
        }

        function _setupNS(a) {
            a = a.split(".");
            for (var b = window, c = 0; c < a.length; ++c) b.hasOwnProperty ? b.hasOwnProperty(a[c]) ? b = b[a[c]] : b = b[a[c]] = {} : b = b[a[c]] || (b[a[c]] = {});
            return b
        }
        window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function () {
            document.readyState = "complete"
        }, !1);
        if (_isNS('google.translate.Element')) {
            return
        } (function () {
            var c = _setupNS('google.translate._const');
            c._cest = gtConstEvalStartTime;
            gtConstEvalStartTime = undefined;
            c._cl = 'en';
            c._cuc = 'googleTranslateElementInit';
            c._cac = '';
            c._cam = '';
            c._ctkk = '449532.3786053938';
            var h = 'translate.googleapis.com';
            var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
            var b = s + h;
            c._pah = h;
            c._pas = s;
            c._pbi = b + '/translate_static/img/te_bk.gif';
            c._pci = b + '/translate_static/img/te_ctrl3.gif';
            c._pli = b + '/translate_static/img/loading.gif';
            c._plla = h + '/translate_a/l';
            c._pmi = b + '/translate_static/img/mini_google.png';
            c._ps = b + '/translate_static/css/translateelement.css';
            c._puh = 'translate.google.com';
            _loadCss(c._ps);
            _loadJs(b + '/translate_static/js/element/main.js');
        })();
    })();
</script>
<!-- End Language Converter -->
<!-- Including Jquery -->
<script src="assets/js/vendor/jquery-min.js"></script>
<script src="assets/js/vendor/js.cookie.js"></script>
<!--Including Javascript-->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<!--Newsletter Popup Cookies-->
<script>
    function newsletter_popup() {
        var cookieSignup = "cookieSignup", date = new Date();
        if ($.cookie(cookieSignup) != 'true' && window.location.href.indexOf("challenge#newsletter-modal") <= -1) {
            setTimeout(function () {
                $.magnificPopup.open({
                    items: {
                        src: '#newsletter-modal'
                    }
                    , type: 'inline', removalDelay: 300, mainClass: 'mfp-zoom-in'
                }
                );
            }
                , 5000);
        }
        $.magnificPopup.instance.close = function () {
            if ($("#dontshow").prop("checked") == true) {
                $.cookie(cookieSignup, 'true', {
                    expires: 1, path: '/'
                }
                );
            }
            $.magnificPopup.proto.close.call(this);
        }
    }
    newsletter_popup();
</script>

</body>

</html>
