<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 03.07.2017
 * Time: 1:17
 */
?>

<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo isset($css['header'])?$css['header']:''?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="index.php">Home</a><span>/</span></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.breadcrumb-section  -->

<!-- Blog Post Section -->
<section class="blog-post-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-lg-9 col-xs-12">
                <div class="single-post">
                    <div class="post-thumb pull-left">
                        <img alt="" src="images/blog/thumb1.jpg">
                    </div>
                    <div class="post-details pull-left">
                        <h3><a href="blog-details.php">Music Improves Baby Brain</a></h3>
                        <ul class="date">
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Tuesday, Feb 03, 2016</a></li>
                        </ul>
                        <ul class="author-tag">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Rick Hammer</a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Creative Photography</a></li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-post">
                    <div class="post-thumb pull-left">
                        <img alt="" src="images/blog/thumb2.jpg">
                    </div>
                    <div class="post-details pull-left">
                        <h3><a href="blog-details.php">Caring for a Pet: Diabetic Kids</a></h3>
                        <ul class="date">
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Tuesday, Feb 03, 2016</a></li>
                        </ul>
                        <ul class="author-tag">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Rick Hammer</a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Creative Photography</a></li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-post">
                    <div class="post-thumb pull-left">
                        <img alt="" src="images/blog/thumb3.jpg">
                    </div>
                    <div class="post-details pull-left">
                        <h3><a href="blog-details.php">Uncovers Ancient Ashkenaz</a></h3>
                        <ul class="date">
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Tuesday, Feb 03, 2016</a></li>
                        </ul>
                        <ul class="author-tag">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Rick Hammer</a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Creative Photography</a></li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-post">
                    <div class="post-thumb pull-left">
                        <img alt="" src="images/blog/thumb4.jpg">
                    </div>
                    <div class="post-details pull-left">
                        <h3><a href="blog-details.php">Harsh Parenting Can Harm Child's Health</a></h3>
                        <ul class="date">
                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Tuesday, Feb 03, 2016</a></li>
                        </ul>
                        <ul class="author-tag">
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Rick Hammer</a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>Creative Photography</a></li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <ul class="paginations post-pagi">
                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
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
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-lg-3 col-xs-12">
                <aside class="widget">
                    <h4 class="widget-title">Categories</h4>
                    <ul>
                        <li><a href="#"><span class="cat-name">Lifestyle</span><span class="cat-count">18</span></a></li>
                        <li><a href="#"><span class="cat-name">Design</span><span class="cat-count">11</span></a></li>
                        <li><a href="#"><span class="cat-name">Corporate</span><span class="cat-count">29</span></a></li>
                        <li><a href="#"><span class="cat-name">Illustration</span><span class="cat-count">03</span></a></li>
                        <li><a href="#"><span class="cat-name">Branding</span><span class="cat-count">41</span></a></li>
                        <li><a href="#"><span class="cat-name">Merketing</span><span class="cat-count">27</span></a></li>
                        <li><a href="#"><span class="cat-name">Print Design</span><span class="cat-count">83</span></a></li>
                        <li><a href="#"><span class="cat-name">Development</span><span class="cat-count">29</span></a></li>
                        <li><a href="#"><span class="cat-name">CMS</span><span class="cat-count">11</span></a></li>
                    </ul>
                </aside>
                <aside class="widget">
                    <h4 class="widget-title">Popular Post</h4>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post1.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.php">Lorem ipsum lor sit jamet</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post2.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.php">Consectetur adipisicing elit, sed do.</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post3.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.php">Do eiusmod tempor incididunt ut labore et</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post4.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.php">Sed do eiusmod tempor.</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post5.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.php">Lorem ipsum lor sit jamet</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </aside>
                <aside class="widget">
                    <h4 class="widget-title">Tag Cloude</h4>
                    <div class="tag-cloud">
                        <a href="#">Art</a>
                        <a href="#">Creative</a>
                        <a href="#">Comic</a>
                        <a href="#">Education</a>
                        <a href="#">Study</a>
                        <a href="#">Math</a>
                        <a href="#">School</a>
                        <a href="#">English</a>
                        <div class="clearfix"></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>