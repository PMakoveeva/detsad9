
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Полина-->
<!-- * Date: 27.06.2017-->
<!-- * Time: 11:33-->
<!-- */-->

<?php
    date_default_timezone_set('Asia/Yekaterinburg');

    $hour=date('G');

    $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

    if($hour>=23 || $hour<5 && $hour>=0){
        $css['bg_slider']='bg_slider_night';
        $css['parallax']='parallax_night';
        $css['bg_footer']='bg_footer_night';


    }
     if($hour>5 && $hour<13){
         $css['bg_slider']='bg_slider_morning';
         $css['parallax']='parallax_morning';
         $css['bg_footer']='bg_footer_morning';

    }
     if($hour>=13 && $hour<17){
         $css['bg_slider']='bg_slider_day';
         $css['parallax']='parallax_day';
         $css['bg_footer']='bg_footer_day';
    }
     if($hour>=17 && $hour<23){
         $css['bg_slider']='bg_slider_evening';
         $css['parallax']='parallax_evening';
         $css['bg_footer']='bg_footer_evening';

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
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
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
        <header class="header-area">
            <!-- Header Top Area -->
            <section class="header-top-main">
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
                                    <ul class="lang-dropdown">
                                        <li>
                                            Arabic (AR)
                                        </li>
                                        <li>
                                            French (FR)
                                        </li>
                                        <li>
                                            English (UK)
                                        </li>
                                    </ul>
                                </div>
                                <div class="login-or-signup pull-left">
                                    <a href="#" data-target="#loginModal" data-toggle="modal"><i class="icon-user"></i><span>Login/sign up</span></a>
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
<!--                                    <ul>-->
<!--                                        <li><a href="index2.html">Home 2</a></li>-->
<!--                                        <li><a href="index3.html">Home 3</a></li>-->
<!--                                    </ul>-->
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

        <!-- Slider Area -->
        <div id="owl-init">
            <section class="slider-area <?php echo isset($css['bg_slider'])?$css['bg_slider']:''?>">
                <div class="slider-wrap <?php echo isset($css['parallax'])?$css['parallax']:''?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 text-left">
                                <div class="slider-content">
                                    <h2 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="300ms">A new approach to</h2>
                                    <h3 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="350ms">Kindergarten</h3>
                                    <h3 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="400ms">Education</h3>
                                    <a class="primary-btn wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="450ms" href="#"><span>Admission Now</span></a>
                                    <div class="slider-img">
                                        <!--<img alt="" class="slide-circle" src="images/home1/slide-circle.png">-->
                                        <!--<img alt="" class="slide-cloud" src="images/home1/slide-rain-cloud.png">-->
                                        <!--<img alt="" class="slide-sun" src="images/home1/slide-sun.png">-->
                                        <!-- <img alt="" class="slide-girl wow fadeInRight" data-wow-duration="700ms" data-wow-delay="300ms" src="images/home1/slide-girl.png">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            <section class="slider-area <?php echo isset($css['bg_slider'])?$css['bg_slider']:''?>">
                <div class="slider-wrap <?php echo isset($css['parallax'])?$css['parallax']:''?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 text-left">
                                <div class="slider-content">
<!--                                    --><?php //$i=123; echo "Polina $i"?>
<!--                                    --><?php //$i=150; echo 'Polina $i'?>

                                    <h2 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="300ms">Really haven't</h2>
                                    <h3 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="350ms">Learned</h3>
                                    <h3 class="wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="400ms">Anything.</h3>
                                    <a class="primary-btn wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="450ms" href="#"><span>Admission Now</span></a>
                                    <div class="slider-img">
                                        <!--<img alt="" class="slide-circle" src="images/home1/slide-circle.png">-->
                                        <!--<img alt="" class="slide-cloud" src="images/home1/slide-rain-cloud.png">-->
                                        <!--<img alt="" class="slide-sun" src="images/home1/slide-sun.png">-->
                                        <!--<img alt="" class="slide-girl wow zoomIn" data-wow-duration="700ms" data-wow-delay="300ms" src="images/home1/boys.png">-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
        <!-- /.slider-area -->

        <!-- Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <h2 class="title">Welcome to Kidzy</h2>
                        <p class="subtitle">Starting with the new school year in our kindergarten</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="welcome-img">
                            <img alt="" src="images/home1/about1.jpg">
                            <div class="welcome-content">
                                <div class="svg-overlay">
                                    <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" preserveAspectRatio="none"><path d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"></path></svg>
                                </div>
                                <i class="icon-reader"></i>
                                <h4>Active Learning</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="welcome-img two">
                            <img alt="" src="images/home1/about2.jpg">
                            <div class="welcome-content">
                                <div class="svg-overlay">
                                    <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" preserveAspectRatio="none"><path d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"></path></svg>
                                </div>
                                <i class="icon-music-class"></i>
                                <h4>Music Lessons</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="welcome-img three">
                            <img alt="" src="images/home1/about3.jpg">
                            <div class="welcome-content">
                                <div class="svg-overlay">
                                    <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" preserveAspectRatio="none"><path d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"></path></svg>
                                </div>
                                <i class="icon-teacher"></i>
                                <h4>Professional Teachers</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="welcome-img four">
                            <img alt="" src="images/home1/about4.jpg">
                            <div class="welcome-content">
                                <div class="svg-overlay">
                                    <svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 250" enable-background="new 0 0 500 250" xml:space="preserve" preserveAspectRatio="none"><path d="M250,246.5c-97.85,0-186.344-40.044-250-104.633V250h500V141.867C436.344,206.456,347.85,246.5,250,246.5z"></path></svg>
                                </div>
                                <i class="icon-parents"></i>
                                <h4>Parents Day</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.welcome-section -->

        <!-- Promo Section -->
        <section class="promo-section" style="background: url(img/home1/kindergarten.png) no-repeat scroll center center / cover;
                                        padding: 100px 0 0;" >
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-xs-12">
                        <div class="promo-content">
                            <div class="promo-img">
                                <img src="images/home1/logo2.png" alt="">
                            </div>
                            <h4>Kindergarten School</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip.
                            </p>
                            <a href="#" class="primary-btn"><span>Enroll Your Child</span></a>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-7">
                        <div class="enroll-img">
                            <img alt="" src="images/home1/enroll-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.promo-section -->

        <!-- Classes Section -->
        <section class="classes-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <h2 class="title-2">Our Classes</h2>
                        <p class="subtitle-2">
                            Professional team that aims to respect your child’s feelings, to
                            give them responsibility, <br>independence and freedom to make choices.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-class">
                            <div class="class-img">
                                <img alt="" src="images/home1/class1.jpg">
                                <div class="class-hover">
                                    <a href="images/home1/class1.jpg" class="popup"><i class="icon-link"></i></a>
                                </div>
                            </div>
                            <div class="class-details">
                                <h3><a href="class.html">Happy Kiddo</a></h3>
                                <p>Admission Close</p>
                                <div class="clearfix">
                                    <div class="class-meta pull-left">
                                        <span>Years Old</span>
                                        <p>2-3</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Class Size</span>
                                        <p>24</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Tution Fee</span>
                                        <p>$129</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-class">
                            <div class="class-img">
                                <img alt="" src="images/home1/class2.jpg">
                                <div class="class-hover">
                                    <a href="images/home1/class2.jpg" class="popup"><i class="icon-link"></i></a>
                                </div>
                            </div>
                            <div class="class-details">
                                <h3><a href="class.html">Junior Lambs</a></h3>
                                <p>Admission Open</p>
                                <div class="clearfix">
                                    <div class="class-meta pull-left">
                                        <span>Years Old</span>
                                        <p>3-5</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Class Size</span>
                                        <p>20</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Tution Fee</span>
                                        <p>$140</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="single-class">
                            <div class="class-img">
                                <img alt="" src="images/home1/class3.jpg">
                                <div class="class-hover">
                                    <a href="images/home1/class3.jpg" class="popup"><i class="icon-link"></i></a>
                                </div>
                            </div>
                            <div class="class-details">
                                <h3><a href="class.html">Master Mind</a></h3>
                                <p>Admission Close</p>
                                <div class="clearfix">
                                    <div class="class-meta pull-left">
                                        <span>Years Old</span>
                                        <p>4-6</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Class Size</span>
                                        <p>15</p>
                                    </div>
                                    <div class="class-meta pull-left">
                                        <span>Tution Fee</span>
                                        <p>$150</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.classes-section -->

        <!-- Facilities Section -->
        <section class="facility-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="title-with-icon text-center">
                            <img alt="" src="images/home1/facility.png">
                            <h2 class="title-2">School Fecilities</h2>
                            <p class="subtitle-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna <br>aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation ullamco.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-facility">
                            <i class="icon-trophy"></i>
                            <h4>Pre-School Sports</h4>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-facility two">
                            <i class="icon-food"></i>
                            <h4>Healthy Meals</h4>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-facility three">
                            <i class="icon-play"></i>
                            <h4>Multimedia Class</h4>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-facility four">
                            <i class="icon-color"></i>
                            <h4>Music And Art Class</h4>
                            <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.facility-section -->

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <h2 class="title-2">Meet Our Staffs</h2>
                        <p class="subtitle-2">
                            Professional team that aims to respect your child’s feelings, to give
                            them responsibility, <br>independence and freedom to make choices.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-team">
                            <div class="team-img">
                                <img alt="" src="images/home1/staff1.jpg">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="teacher-details.html">Ricardo Spencer</a></h3>
                            <p>Assistant Teacher</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-team">
                            <div class="team-img">
                                <img alt="" src="images/home1/staff2.jpg">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="teacher-details.html">Fanny Greer</a></h3>
                            <p>Assistant Teacher</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-team">
                            <div class="team-img">
                                <img alt="" src="images/home1/staff3.jpg">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="teacher-details.html">Albert Cole</a></h3>
                            <p>Assistant Teacher</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="single-team">
                            <div class="team-img">
                                <img alt="" src="images/home1/staff4.jpg">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="gplus"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <h3><a href="teacher-details.html">Rhoda Byrd</a></h3>
                            <p>Assistant Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.team-section -->

        <!-- Testimonial Section -->
        <section class="testimonial-section" style=" padding: 112px 0 147px;
                    background: url(img/home1/fairyTales.png) no-repeat scroll center center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonial-carousel" data-slide-to="1"></li>
                                <li data-target="#testimonial-carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="testimonials text-center">
                                        <div class="testimonial-img">
                                            <img alt="" src="images/home1/testi-person.jpg">
                                        </div>
                                        <div class="testimonial-details">
                                            <i class="icon-testimonial"></i>
                                            <h4>Jaklin Nowkin</h4>
                                            <span>Parents</span>
                                            <p>
                                                “ Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud.”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials text-center">
                                        <div class="testimonial-img">
                                            <img alt="" src="images/home1/testi-person.jpg">
                                        </div>
                                        <div class="testimonial-details">
                                            <i class="icon-testimonial"></i>
                                            <h4>Jaklin Nowkin</h4>
                                            <span>Parents</span>
                                            <p>
                                                “ Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud.”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonials text-center">
                                        <div class="testimonial-img">
                                            <img alt="" src="images/home1/testi-person.jpg">
                                        </div>
                                        <div class="testimonial-details">
                                            <i class="icon-testimonial"></i>
                                            <h4>Jaklin Nowkin</h4>
                                            <span>Parents</span>
                                            <p>
                                                “ Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam, quis nostrud.”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.testimonial-section -->

        <!-- Latest News Section -->
        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <h2 class="title-2">Latest News</h2>
                        <p class="subtitle-2">
                            Professional team that aims to respect your child’s feelings,
                            to give them responsibility, <br>independence and freedom to make
                            choices.
                        </p>
                    </div>
                </div>
                <div class="row news-wrapper">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-left">
                        <div class="single-news">
                            <div class="news-img">
                                <img alt="" src="images/home1/news1.jpg">
                                <a href="#">15<span>mar</span></a>
                            </div>
                            <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h5>
                            <p><a href="#">Fannie Perkins</a><span> / </span><a href="#">Music</a><span> / </span><a href="#">9 Comments</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-left">
                        <div class="single-news">
                            <div class="news-img">
                                <img alt="" src="images/home1/news2.jpg">
                                <a href="#">13<span>mar</span></a>
                            </div>
                            <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h5>
                            <p><a href="#">Fannie Perkins</a><span> / </span><a href="#">Music</a><span> / </span><a href="#">9 Comments</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-left">
                        <div class="single-news">
                            <div class="news-img">
                                <img alt="" src="images/home1/news3.jpg">
                                <a href="#">11<span>mar</span></a>
                            </div>
                            <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h5>
                            <p><a href="#">Fannie Perkins</a><span> / </span><a href="#">Music</a><span> / </span><a href="#">9 Comments</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-left">
                        <div class="single-news">
                            <div class="news-img">
                                <img alt="" src="images/home1/news4.jpg">
                                <a href="#">09<span>mar</span></a>
                            </div>
                            <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h5>
                            <p><a href="#">Fannie Perkins</a><span> / </span><a href="#">Music</a><span> / </span><a href="#">9 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.news-section -->

        <!-- Call to Action -->
        <section class="callto-action-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="callto-content">
                            <h2>Enrollment is now going on, please contact us.</h2>
                            <a href="#" class="primary-btn pull-right"><span>Enroll Now</span></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.callto-action-section -->

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

        <!-- Login Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" id="loginModal">
            <div class="modal-dialog" role="document">
                <!-- Modal content-->
                <div class="modal-content custom-box-shadow">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="modal-body">
                        <h2 class="title" id="loginModalLabel">Already Registered</h2>
                        <form id="login-form" method="post" action="#">
                            <fieldset class="userdata">
                                <input type="text" required="required" class="input-username" name="username" placeholder="Username">
                                <input type="password" required="required" class="input-password" name="password" placeholder="Password">
                                <div class="clearfix"></div>
                                <div class="button-wrap">
                                    <button type="submit">Log in</button>
                                </div>
                                <p class="forget-name-link pull-left">
                                    Forgot <a href="#">Username</a> or <a href="#">Password</a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <!--/Modal body-->
                    <div class="modal-footer">
                        New Here?<a href="#">Create an account</a>
                    </div>
                    <!--/Modal footer-->
                </div> <!-- Modal content-->
            </div>
            <!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Include All JavaScript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mixIt.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
