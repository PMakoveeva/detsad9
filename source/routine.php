<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 1:16
 */
date_default_timezone_set('Asia/Yekaterinburg');

$hour=date('G');

$hour = (isset($_GET['hour']))?$_GET['hour']:$hour;

if($hour>=23 || $hour<5 && $hour>=0){
    $css['colour_line_top']='night_line_top';
    $css['bg_footer']='bg_footer_night';
    $css['header']='header_clouds_night';
    $css['main_th_table']='main_th_night';
    $css['th_table']='th_night';
}
if($hour>5 && $hour<13){
    $css['colour_line_top']='morning_line_top';
    $css['bg_footer']='bg_footer_morning';
    $css['header']='header_clouds_mo';
    $css['main_th_table']='main_th_morning';
    $css['th_table']='th_morning';
}
if($hour>=13 && $hour<17){
    $css['colour_line_top']='day_line_top';
    $css['bg_footer']='bg_footer_day';
    $css['header']='header_clouds_day';
    $css['main_th_table']='main_th_day';
    $css['th_table']='th_day';
}
if($hour>=17 && $hour<23){
    $css['colour_line_top']='evening_line_top';
    $css['bg_footer']='bg_footer_evening';
    $css['header']='header_clouds_evening';
    $css['main_th_table']='main_th_evening';
    $css['th_table']='th_evening';
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
                            <a href="index.html">Home</a>
                            <ul>
                                <li><a href="index2.html">Home 2</a></li>
                                <li><a href="index3.html">Home 3</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About us</a></li>
                        <li class="menu-has-child">
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="event.html">Event</a>
                                    <ul>
                                        <li><a href="event-details.html">Event Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="routine.html">Routine</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
<section class="breadcrumb-section <?php echo isset($css['header'])?$css['header']:''?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Class Routines</h2>
                    <ul>
                        <li><a href="index.html">Home</a><span>/</span></li>
                        <li>Class Routines</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.breadcrumb-section  -->

<!-- Classes Section -->
<section class="routine-about-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="routine-img">
                    <img alt="" src="images/routine/thumb.jpg">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 text-left">
                <div class="who-we-details">
                    <h2 class="title-2">Class  For Kids</h2>
                    <p class="subtitle color">Instead of listing my favorite</p>
                    <article class="who-we-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur.
                        </p>
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                            unde omnis iste natus error sit voluptatem accusantium doloremque.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.who-we-section -->

<!-- Promo Section -->
<section class="promo-section">
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

<!-- Class Schedule Section -->
<section class="schedule-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="routine-details">
                    <h2 class="title">Courses Schedule</h2>
                    <p class="subtitle">Starting with the new school year in our kindergarten</p>
                    <table class="schedule-table">
                        <thead>
                        <tr>
                            <th class="main_th <?php echo isset($css['main_th_table'])?$css['main_th_table']:''?>">Schedule</th>
                            <th <?php echo isset($css['th_table'])?$css['main_th_table']:''?>>SUN</th>
                            <th <?php echo isset($css['th_table'])?$css['th_table']:''?>>MON</th>
                            <th <?php echo isset($css['th_table'])?$css['th_table']:''?>>TUE</th>
                            <th <?php echo isset($css['th_table'])?$css['th_table']:''?>>WED</th>
                            <th <?php echo isset($css['th_table'])?$css['th_table']:''?>>THU</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>9:00 - 10:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>10:00 - 11:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>11:00 - 12:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>12:00 - 13:00</td>
                            <td></td>
                            <td></td>
                            <td>Break Time</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13:00 - 14:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>14:00 - 15:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>15:00 - 16:00</td>
                            <td>English</td>
                            <td>Mathematics</td>
                            <td>Economics</td>
                            <td>Geography</td>
                            <td>History</td>
                        </tr>
                        </tbody>
                    </table>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi dui,
                        aliquam vel sodales a, dignissim eget mauris. Sed sit amet turpis
                        quis felis ullamcorper vestibulum sit amet sed tellus. Sed ornare
                        eleifend lorem ac faucibus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.schedule-section -->

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
<script src="js/main.js"></script>
</body>
</html>

