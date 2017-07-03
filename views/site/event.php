<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 0:57
 */
   ?>
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
                                        <li><a href="404.php">404</a></li>
                                        <li><a href="coming-soon.php">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="shortcode.php">Features</a></li>
                                <li class="menu-has-child">
                                    <a href="class.php">Classes</a>
                                    <ul>
                                        <li><a href="class-details.php">Classes Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-child">
                                    <a href="blog.php">Blog</a>
                                    <ul>
                                        <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-has-child">
                                    <a href="teacher.php">Teacher</a>
                                    <ul>
                                        <li><a href="teacher-details.php">Teacher Details</a></li>
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
                            <h2>Events</h2>
                            <ul>
                                <li><a href="index.php">Home</a><span>/</span></li>
                                <li>Events</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.breadcrumb-section  -->

        <!-- Event Section -->
        <section class="event-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb1.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb1.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Herbert Hoover Conference House San Diego, CA</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb3.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb3.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#" class="bg2">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Herbert Hoover Conference House San Diego, CA</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb5.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb5.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#" class="bg3">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Herbert Hoover Conference House San Diego, CA</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb2.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb2.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#" class="bg4">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Robert School San Diego, North house, DC 12000</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb4.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb4.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#" class="bg5">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Robert School San Diego, North house, DC 12000</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                        <div class="single-event">
                            <div class="event-img">
                                <img src="images/event/thumb6.jpg" alt="">
                                <div class="class-hover">
                                    <a class="popup" href="images/event/thumb6.jpg"><i class="icon-link"></i></a>
                                </div>
                                <a href="#" class="bg6">15<span>mar</span></a>
                            </div>
                            <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></h3>
                            <a href="#">Mar 15, 2016, 2:00 - 4:00 pm</a>
                            <a href="#">Robert School San Diego, North house, DC 12000</a>
                            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
    eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="paginations post-pagi">
                            <li><a href="#"><i aria-hidden="true" class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.event-section -->

