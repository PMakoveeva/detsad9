<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 1:47
 */
date_default_timezone_set('Asia/Yekaterinburg');

$hour=date('G');

$hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

if($hour>=23 || $hour<5 && $hour>=0){
    $css['colour_line_top']='night_line_top';
    $css['bg_footer']='bg_footer_night';
    $css['header']='header_clouds_night';
}
if($hour>5 && $hour<13){
    $css['colour_line_top']='morning_line_top';
    $css['bg_footer']='bg_footer_morning';
    $css['header']='header_clouds_mo';
}
if($hour>=13 && $hour<17){
    $css['colour_line_top']='day_line_top';
    $css['bg_footer']='bg_footer_day';
    $css['header']='header_clouds_day';
}
if($hour>=17 && $hour<23){
    $css['colour_line_top']='evening_line_top';
    $css['bg_footer']='bg_footer_evening';
    $css['header']='header_clouds_evening';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kidzy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Themeum">

    <!-- Include All Css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if lt IE 9]>
    <script src="js/html5shive.js"></script>
    <![endif]-->

</head>
<body>
<!-- Header Area -->
<header class="header-area inner-page">
    <!-- Header Top Area -->
    <section class="header-top <?php echo isset($css['colour_line_top'])?$css['colour_line_top']:''?>">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="header-elements pull-right">
                        <ul class="social-icon pull-left">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <div class="language pull-left">
                            <a href="#">
                                <i class="icon-translator"></i>
                                <span>English</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                        <div class="login-or-signup pull-left">
                            <a href="#"><i class="icon-user"></i><span>Login/sign up</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.header-top -->
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="logo pull-left">
                        <a href="index.php"><img alt="Kidzy" src="images/home1/logo.png"></a>
                    </div>
                    <ul class="main-menu pull-right">
                        <li class="menu-has-child">
                            <a href="index.php">Home</a>
<!--                            <ul>-->
<!--                                <li><a href="index2.html">Home 2</a></li>-->
<!--                                <li><a href="index3.html">Home 3</a></li>-->
<!--                            </ul>-->
                        </li>
                        <li><a href="about-us.php">About us</a></li>
                        <li class="menu-has-child">
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="event.php">Event</a>
                                    <ul>
                                        <li><a href="event-details.php">Event Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="routine.php">Routine</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="shortcode.html">Features</a></li>
                        <li class="menu-has-child">
                            <a href="class.html">Classes</a>
                            <ul>
                                <li><a href="class-details.html">Classes Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-child">
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-child">
                            <a href="teacher.html">Teacher</a>
                            <ul>
                                <li><a href="teacher-details.html">Teacher Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" id="search-pop"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                    <div class="mobile-menu hidden-lg hidden-md hidden-sm">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-area">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Enter your Search Text Here....">
            </form>
            <a href="#" class="search-close"><i class="fa fa-times"></i></a>
        </div>
    </nav>
</header>
<!-- /.header-area -->

<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo isset($css['header'])?$css['header']:''?>">">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="index.php">Home</a><span>/</span></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.breadcrumb-section  -->

<!-- Map Section -->
<section id="map">

</section>

<!-- Address Section -->
<section class="address-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                <div class="single-address">
                    <i class="icon-class"></i>
                    <h3>Class Sessions</h3>
                    <address>
                        <p>Sat - Fri (8 am – 2 pm)</p>
                        <p>Sun - Mon (8 am – 11 am)</p>
                    </address>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                <div class="single-address two">
                    <i class="icon-map"></i>
                    <h3>Kidzy Address</h3>
                    <address>
                        <p>123 White Amphitheatre Kinway,</p>
                        <p>Mountain, CA 12345, USA</p>
                    </address>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                <div class="single-address three">
                    <i class="icon-clock"></i>
                    <h3>Office Hours</h3>
                    <address>
                        <p>Monday – Friday</p>
                        <p>8.00 am – 5.00 pm</p>
                    </address>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                <div class="single-address four">
                    <i class="icon-call"></i>
                    <h3>Phone & E-mail</h3>
                    <address>
                        <p>+123 456 78910</p>
                        <p>enroll@kidzy.com</p>
                    </address>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.address-section -->

<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <h2 class="title">Leave A Comment</h2>
                <p class="subtitle">Need any help, send us your comments</p>
            </div>
        </div>
        <form class="contact-form" action="#" method="post">
            <div class="row">
                <div class="col-sm-6 col-xs-12 inputs-group">
                    <input name="name" type="text" placeholder="Enter name">
                    <input name="email" type="email" placeholder="Enter email">
                    <input name="website" type="text" placeholder="Enter Website">
                </div>
                <div class="col-sm-6 col-xs-12 textareas">
                    <textarea name="textarea" placeholder="Enter Your Message"></textarea>
                    <button class="primary-btn pull-right" type="submit"><span>Submit Your Text</span></button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- /.contact-form-section -->

<!-- Footer Section -->
<footer class="footer-section <?php echo isset($css['bg_footer'])?$css['bg_footer']:''?>">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 text-left">
                <div class="about-widget">
                    <div class="footer-logo">
                        <a href="index.php"><img alt="" src="images/home1/footer-logo.png"></a>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore.
                    </p>
                    <span>&copy; 2016 Kidzy School</span>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                <div class="footer-widget">
                    <h3>Qucik Link</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 text-left">
                <div class="footer-widget">
                    <h3>Classes</h3>
                    <ul>
                        <li><a href="#">Happy Kiddo</a></li>
                        <li><a href="#">Junior Lambs</a></li>
                        <li><a href="#">Master Mind</a></li>
                        <li><a href="#">Rabbit House</a></li>
                        <li><a href="#">Terrific Tigers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="#" method="post" class="subscribe-form">
                        <input type="email" name="email" placeholder="Your email Id">
                        <button class="primary-btn pull-right"><span>Submit</span></button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /.footer-section -->

<!-- Include All JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mixIt.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/gmaps.js"></script>
<script src="js/main.js"></script>
</body>
</html>

