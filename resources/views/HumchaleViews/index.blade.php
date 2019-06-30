<noscript>
    <meta http-equiv="refresh" content="0; URL=/error">
</noscript>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>HUMCHALE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Vagabond Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery.com/jquery-1.5.min.js"></script>
    <script src="http://cdn.wideskyhosting.com/js/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- grid hover -->
    <link href="css/hover.css" type="text/css" rel="stylesheet" media="all">
    <!-- Testimonials-Css -->
    <link href="css/mislider.css" rel="stylesheet" type="text/css"/>
    <link href="css/mislider-custom.css" rel="stylesheet" type="text/css"/>
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
<!-- banner -->
<div class="banner">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary pt-3">
            <h1>
                <a class="navbar-brand 	text-white" href="index.blade.php">
                    <div style="transform: translateY(-6px);display: block;position: relative;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
                        <div class="logo"><a href="/" style="color:#f1f1f1">HUMCHALE</a></div>
                    </div>
                </a>
            </h1>
            <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center" id="menu1">
                    <li class="nav-item active  mr-3 mt-lg-0 mt-3" id="liHome">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>




                    <li class="nav-item  mr-3 mt-lg-0 mt-3" id="lilogin">
                        <a class="nav-link" href="" data-backdrop="static" data-toggle="modal" data-target="#Login">
                            Login
                        </a>
                    </li>

                    <li class="nav-item  mr-3 mt-lg-0 mt-3" id="liRegister">
                        <a class="nav-link" href="" data-backdrop="static" data-toggle="modal" data-target="#Register">
                            Register
                        </a>
                    </li>


                    {{--<li class="nav-item  mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="services">Services</a>
                    </li>--}}
                    {{-- <li class="nav-item dropdown mr-3 mt-lg-0 mt-3">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                             aria-expanded="false">
                             Dropdown
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="typo.blade.php">Typography</a>
                             <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="gallery.blade.php">Gallery</a>
                         </div>
                     </li>--}}


                    <li class="nav-item mr-3 mt-lg-0 mt-3">
                        <a class="nav-link" href="/contact">Contactus</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- //header -->
    <div class="container">
        <!-- banner-text -->
        <div class="banner-text">
            <div class="slider-info">
                <h3>ENJOY YOUR DREAM VACATION</h3>
            </div>
        </div>
        <div class="banner-top pb-5">
            <div class="row slider-bottom">
                <div class="col-md-3 slider-bottom-lft">
                    <h4>SEARCH NOW</h4>
                    <p class="text-white mt-2">This is a longer card with supporting</p>
                </div>
                <div class="col-md-9 n-right-w3ls">
                    <div class="row">
                        <div class="col-md-4 form-group news-rt">
                            <input class="form-control" type="text" name="source" placeholder="Source" required="">
                        </div>
                        <div class="col-md-4 form-group news-lt">
                            <input class="form-control" type="email" name="destination" placeholder="Destination"
                                   required="">
                        </div>
                        <div class="col-md-4 form-group news-last">
                            <div class="sbm-it">
                                <div class="form-group">
                                    <input class="form-control submit text-uppercase" type="submit" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //banner-text -->
<section class="about-w3ls py-5">
    <div class="container pt-xl-5 pb-lg-3">
        <div class="row">
            <div class="col-lg-7">
                <img src="images/2.jpg" alt="" class="img-section4 img-fluid">
            </div>
            <div class="col-lg-5 section-4">
                <div class="agil_mor">
                    <h2 class="heading-agileinfo">What <span> We Do</span></h2>
                    <p class="vam">Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus
                        et malesuada fames ac turpis egestas.Sed lorem enim, </p>
                    <a href="about.html" class="mt-3">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-w3ls py-5">
    <div class="container pt-xl-5 pb-lg-3">
        <div class="row">
            <div class="col-lg-5 section-5">
                <div class="agil_mor">
                    <h3 class="heading-agileinfo">We <span> Offer</span></h3>
                    <p class="vam">Vivamus sed porttitor felis. Pellentesque habitant morbi tristique senectus et netus
                        et malesuada fames ac turpis egestas.Sed lorem enim, </p>
                    <a href="about.html" class="mt-3">Read More</a>
                </div>
            </div>
            <div class="col-lg-7">
                <img src="images/1.jpg" alt="" class="img-section4 img-fluid">
            </div>

        </div>
    </div>
</section>
<!-- stats -->
<section class="agile_stats py-sm-5">
    <div class="container">
        <div class="py-lg-5 w3-abbottom">
            <div class="row py-5">
                <div class="counter col-lg-3 col-6">
                    <i class="far fa-smile"></i>
                    <div class="timer count-title count-number mt-2 text-white" data-to="5100" data-speed="1500"></div>
                    <p class="count-text text-capitalize text-white">HAPPY CLIENTS</p>
                </div>

                <div class="counter col-lg-3 col-6">
                    <i class="fas fa-fighter-jet"></i>
                    <div class="timer count-title count-number mt-2 text-white" data-to="971" data-speed="1500"></div>
                    <p class="count-text text-capitalize text-white">AMAZING TOURS</p>
                </div>
                <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                    <i class="fas fa-users"></i>
                    <div class="timer count-title count-number mt-2 text-white" data-to="21" data-speed="1500"></div>
                    <p class="count-text text-capitalize text-white">PROFESSIONAL AGENTS</p>
                </div>
                <div class="counter col-lg-3 col-6 mt-lg-0 mt-4">
                    <i class="fas fa-comments"></i>
                    <div class="timer count-title count-number mt-2 text-white" data-to="27" data-speed="1500"></div>
                    <p class="count-text text-capitalize text-white">QUESTIONS ANSWERED </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!-- services -->
<div class="more-services py-lg-5">
    <div class="container py-5">
        <div class="title-section pb-sm-5 pb-3">
            <h3 class="heading-agileinfo text-center pb-4">Best <span> Offers</span></h3>
        </div>
        <div class="row grid">
            <div class="col-lg-3 col-6">
                <figure class="effect-layla">
                    <img src="images/p1.jpg" alt="img" class="img-fluid"/>
                    <figcaption>
                        <h4>TURKEY</h4>
                        <p>6 days</p>

                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-6">
                <figure class="effect-layla">
                    <img src="images/p2.jpg" alt="img" class="img-fluid"/>
                    <figcaption>
                        <h4>UNITED KINGDOM</h4>
                        <p>15 days</p>

                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-3 col-6">
                <figure class="effect-layla">
                    <img src="images/p3.jpg" alt="img" class="img-fluid"/>
                    <figcaption>
                        <h4>SPAIN</h4>
                        <p>8 days</p>

                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-6">
                <figure class="effect-layla">
                    <img src="images/p4.jpg" alt="img" class="img-fluid"/>
                    <figcaption>
                        <h4>EUROPE</h4>
                        <p>10 days</p>

                    </figcaption>
                </figure>
            </div>
        </div>

    </div>
</div>
<!-- //services -->
<!-- testimonials -->
<div class="testimonials py-lg-5">
    <div class="container py-5">
        <div class="title-section pb-sm-5 pb-3">
            <h3 class="heading-agileinfo text-center text-white pb-4">What Our <span> People Says</span></h3>
        </div>
        <div class="mis-stage">
            <!-- The element to select and apply miSlider to - the class is optional -->
            <ol class="mis-slider">
                <!-- The slider element - the class is optional -->
                <li class="mis-slide">
                    <!-- A slide element - the class is optional -->
                    <a href="#" class="mis-container">
                        <!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
                        <figure>
                            <!-- Slide content - whatever you want -->
                            <img src="images/te1.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Carl Lii

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="#" class="mis-container">
                        <figure>
                            <img src="images/te2.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Michael Paul

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="link" class="mis-container">
                        <figure>
                            <img src="images/te3.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Henry Doe

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="#" class="mis-container">
                        <figure>
                            <img src="images/te4.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Laura James

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="#" class="mis-container">
                        <figure>
                            <img src="images/te5.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Thomas Carl

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="#" class="mis-container">
                        <figure>
                            <img src="images/te6.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Rosy Crisp

                            </figcaption>
                        </figure>
                    </a>
                </li>
                <li class="mis-slide">
                    <a href="#" class="mis-container">
                        <figure>
                            <img src="images/te2.jpg" alt=" " class="img-fluid"/>
                            <figcaption>Michael Paul

                            </figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- //testimonials -->

<!-- video and events -->
{{--<div class="video-choose-agile py-lg-5">
    <div class="container py-5">
        <div class="title-section pb-sm-5 pb-3">
            <h3 class="heading-agileinfo text-center pb-4">Latest  <span>News</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-5 events">
                <div class="events-w3ls">
                    <div class="d-flex">
                        <div class="col-sm-2 col-3 events-up p-2 text-center">
                            <h5 class="text-white font-weight-bold">18
                                <span class="border-top font-weight-light pt-2 mt-2">Sep</span>
                            </h5>
                        </div>
                        <div class="col-sm-10 col-9 events-right">
                            <h4 class="text-dark">Curabitur mattis orci </h4>
                            <ul class="list-unstyled">
                                <li class="my-2">
                                    <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                                <li>
                                    <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex my-4">
                    <div class="col-sm-2 col-3 events-up p-2 text-center">
                        <h5 class="text-white font-weight-bold">22
                            <span class="border-top font-weight-light pt-2 mt-2">Sep</span>
                        </h5>
                    </div>
                    <div class="col-sm-10 col-9 events-right">
                        <h4 class="text-dark">Curabitur mattis orci </h4>
                        <ul class="list-unstyled">
                            <li class="my-2">
                                <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                            <li>
                                <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-sm-2 col-3 events-up p-2 text-center">
                        <h5 class="text-white font-weight-bold">25
                            <span class="border-top font-weight-light pt-2 mt-2">Sep</span>
                        </h5>
                    </div>
                    <div class="col-sm-10 col-9 events-right">
                        <h4 class="text-dark">Curabitur mattis orci </h4>
                        <ul class="list-unstyled">
                            <li class="my-2">
                                <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                            <li>
                                <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex mt-4">
                    <div class="col-sm-2 col-3 events-up p-2 text-center">
                        <h5 class="text-white font-weight-bold">28
                            <span class="border-top font-weight-light pt-2 mt-2">Sep</span>
                        </h5>
                    </div>
                    <div class="col-sm-10 col-9 events-right">
                        <h4 class="text-dark">Curabitur mattis orci </h4>
                        <ul class="list-unstyled">
                            <li class="my-2">
                                <i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
                            <li>
                                <i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 video">
                <img src="images/g1.jpg" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</div>--}}
<!-- //video and events -->
<!--footer-->
<footer>
    <div class="container py-md-4 mt-md-3">
        <div class="row footer-top-w3layouts-agile py-5">
            <div class="col-md-4 footer-grid">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                    <p>Traveling is one of the best ways to open your mind and heart to the world around us. As a
                        result, I’ve experienced the full range of emotions during my travels.</p>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <div class="footer-title">
                    <h3>Contact Us</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>Adajan Surat</p>
                    <div class="phone">
                        <h4>Phone :</h4>
                        <p>Phone : +91 9033344995</p>
                        <p>Email : <a href="mailto:info@humchale.com">info@humchale.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <div class="footer-title">
                    <h3>Recent Posts</h3>
                </div>
                <div class="footer-list">
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g1.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g2.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g3.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g4.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g5.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g6.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g7.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g9.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <img src="images/g8.jpg" class="img-fluid" alt=" ">
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!---->
<div class="copyright py-3">
    <div class="container">
        <div class="copyrighttop">
            <ul>
                <li>
                    <h4>Follow us on:</h4>
                </li>
                <li>
                    <a class="facebook" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="facebook" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a class="facebook" href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li>
                    <a class="facebook" href="#">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="copyrightbottom">
            <p>© 2019 HUMCHALE. All Rights Reserved | Design by
                <a href="www.humchaletravelservices.com/">HUMCHALE</a>
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->


<!-- Modal -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="inner-sec-w3layouts-agileinfo">
                    <div class="contact_grid_right">
                        <form action="#" method="post" autocomplete="off">
                            <div class="contact_left_grid">

                                <input type="email" name="email" id="login_email"placeholder="Email" required="">
                                <input type="password" id="login_password" name="password" size="10" placeholder="Password" required=""><br><br>

                                <input type="button" id="btnLogin" value="Login">

                                <input type="reset" value="Clear">
                                <div class="clearfix"> </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- //Modal -->

<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registration</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="cross">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact_grid_right">

                    <form action="" method="post" autocomplete="off" id="first_form">
                        <div class="contact_left_grid">
                            <input type="text" name="register_fullname" id="register_fullname"  class="form_text" placeholder="Full Name" required=""><br>
                            <span class="error_form" id="fullname_error_message"></span>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="number" name="register_pincode" id="register_pincode" placeholder="Pincode" required=""><br>
                                    <span class="error_form" id="pincode_error_message"></span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="register_mobileno" id="register_mobileno" placeholder="Mobile Number" required=""><br>
                                    <span class="error_form" id="mobileno_error_message"></span>
                                </div>
                            </div>


                            <input type="email" name="register_email" id="register_email" placeholder="Email" required=""><br>
                            <span class="error_form" id="email_error_message"></span>


                            <input type="password" name="register_password" id="register_password" placeholder="Password" required=""><br>
                            <span class="error_form" id="password_error_message"></span>


                            <input type="text" name="register_aadharcard" id="register_aadharcard" placeholder="Aadharcard Number" required=""><br>
                            <span class="error_form" id="aadhar_error_message"></span>



                            <div class="row">
                                <div class="col-md-2">
                                    <label for="radio-one" style="margin-top: 10px;">Gender</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="radio" name="register_gender" value="Male" id="register_radio-one" class="form-radio" checked><label for="radio-one">Male</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" name="register_gender" value="Female" id="register_radio-one" class="form-radio" ><label for="radio-one">Female</label>
                                </div>
                            </div>


                            <textarea name="register_Message" id="register_Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address...';}" required="">Address...</textarea>
                            <span class="error_form" id="address_error_message"></span>


                            <input type="text" name="register_otp"   id="register_otp" placeholder="Enter Your OTP" style="margin-top: -6px;display: none"><br>
                            {{--<div id="textboxDiv" style="margin-top: -2em;"></div>--}}<br><br>
                            <input type="button" value="OTP" id="register">
                            <input type="reset" value="Clear" id="remove">
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>



            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
            {{--<input type="submit" value="Submit">--}}
            {{--<input type="reset" value="Clear">--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- //Modal -->




<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- testimonial-plugin -->
<script src="js/mislider.js"></script>
<script>
    jQuery(function ($) {
        var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            stageHeight: 320,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 150,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1,
        });
    });
</script>
<!-- //testimonial-plugin -->
<script src="js/counter.js"></script>
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="js/Ajax/login.js"></script>
<script src="js/Custom_JS/indexCustom.js"></script>
<script src="js/Custom_JS/registration.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>

<script>

    $("document").ready(function () {
        $("form").validate()
    })

</script>









<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>

</html>