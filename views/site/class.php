<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 03.07.2017
 * Time: 1:04
 */
?>

<!-- Breadcrumb  -->
<section class="breadcrumb-section<?php echo isset($css['header'])?$css['header']:''?>">
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
<section class="classes-section-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="class-sort-btn-section">
                    <ul class="sort-btn pull-left">
                        <li class="active filter" data-filter="mix"><a href="#">All</a></li>
                        <li class="filter" data-filter="kinder" id="kinder"><a href="#">Kindergarten</a></li>
                        <li class="filter" data-filter="play" id="play"><a href="#">Play Group</a></li>
                        <li class="filter" data-filter="primary" id="primary"><a href="#">Pre- Primary</a></li>
                        <li class="filter" data-filter="story" id="story"><a href="#">Story</a></li>
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
            <div id="mixer">
                <div class="col-sm-4 col-xs-12 mix kinder play">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class1.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class1.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix primary story">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class2.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class2.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix kinder primary">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class3.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class3.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix story kinder">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class4.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class4.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix kinder play">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class5.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class5.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix primary story">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class6.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class6.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix kinder primary">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class7.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class7.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix play story">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class8.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class8.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="col-sm-4 col-xs-12 mix kinder play">
                    <div class="single-class">
                        <div class="class-img">
                            <img alt="" src="images/class1/class9.jpg">
                            <div class="class-hover">
                                <a href="images/class1/class9.jpg" class="popup"><i class="icon-link"></i></a>
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
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <ul class="paginations">
                    <li><a href="#"><i class="icon-prev"></i></a></li>
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
                    <li><a href="#"><i class="icon-next"></i></a></li>
                </ul>
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
            <div class="col-sm-3 col-xs-12 text-center">
                <div class="single-facility">
                    <i class="icon-trophy"></i>
                    <h4>Pre-School Sports</h4>
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 text-center">
                <div class="single-facility two">
                    <i class="icon-food"></i>
                    <h4>Healthy Meals</h4>
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 text-center">
                <div class="single-facility three">
                    <i class="icon-lay"></i>
                    <h4>Multimedia Class</h4>
                    <p>Lorem ipsum dolor sit amet,consectetur adipisicing.</p>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 text-center">
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
