<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 03.07.2017
 * Time: 1:10
 */?>
<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo \app\controllers\SiteController::getCssStyle()['header'];?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Our Classes</h2>
                    <ul>
                        <li><a href="index.php">Home</a><span>/</span></li>
                        <li>Classes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.breadcrumb-section  -->

<!-- Classes Section -->
<section class="classes-section-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="class-sort-btn-section">
                    <ul class="sort-btn pull-left">
                        <li><a href="class.php#kinder">Kindergarten</a></li>
                        <li><a href="class.php#play">Play Group</a></li>
                        <li><a href="class.php#primary">Pre- Primary</a></li>
                        <li><a href="class.php#story">Story</a></li>
                    </ul>
                    <form method="post" action="#" class="class-search pull-right">
                        <input type="search" name="search" placeholder="Search classes">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="class-detail-img">
                    <img alt="" src="images/class1/class-details.jpg">
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="class-information">
                    <h3>Happy Kiddo</h3>
                    <h5>Admission Close</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
                <div class="class-meta-data">
                    <div class="class-single-meta pull-left">
                        <p>Years Old</p>
                        <h4>2-3</h4>
                    </div>
                    <div class="class-single-meta pull-left">
                        <p>Class Size</p>
                        <h4>24</h4>
                    </div>
                    <div class="class-single-meta pull-left">
                        <p>Tution Fee</p>
                        <h4>$129</h4>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.classes-section-2 -->

<!-- Subject and teacher Section -->
<section class="subject-and-teacher-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="subject-details">
                    <div class="sub-heading"><h4>Subject List<span>( 5 Subject )</span></h4><p>Class Schedule</p></div>
                    <ul class="subject-list">
                        <li>
                            <a href="#">1. Art & Music</a>
                            <span>3 Class/ Week</span>
                        </li>
                        <li>
                            <a href="#">2. Language Class</a>
                            <span>5 Class/ Week</span>
                        </li>
                        <li>
                            <a href="#">3. Mathematics</a>
                            <span>2 Class/ Week</span>
                        </li>
                        <li>
                            <a href="#">4. Economics</a>
                            <span>3 Class/ Week</span>
                        </li>
                        <li>
                            <a href="#">5. Physics</a>
                            <span>5 Class/ Week</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="sub-heading"><h4>Course Teacher<span>( 4 Teachers )</span></h4></div>
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
                    <h3>Ricardo Spencer</h3>
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
                    <h3>Fanny Greer</h3>
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
                    <h3>Albert Cole</h3>
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
                    <h3>Rhoda Byrd</h3>
                    <p>Assistant Teacher</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.subject-and-teacher-details -->
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
<!-- Related Course Section -->
<section class="related-course-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <h2 class="title">Related Courses</h2>
                <p class="subtitle">Starting with the new school year in our kindergarten</p>
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
                        <h3><a href="class.php">Happy Kiddo</a></h3>
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
                        <h3><a href="class.php">Junior Lambs</a></h3>
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
                        <h3><a href="class.php">Master Mind</a></h3>
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
