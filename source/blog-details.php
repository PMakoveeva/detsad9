<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 03.07.2017
 * Time: 1:19
 */
?>
<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo isset($css['header'])?$css['header']:''?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Blog Details</h2>
                    <ul>
                        <li><a href="index.html">Home</a><span>/</span></li>
                        <li>Blog Details</li>
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
                <div class="blog-post-details">
                    <div class="blog-details-img">
                        <img alt="" src="images/blog/blog-details-thumb.jpg">
                    </div>
                    <h2>Music Improves Baby Brain</h2>
                    <ul class="author-tag">
                        <li><a href="#"><i aria-hidden="true" class="fa fa-clock-o"></i>Tuesday, Feb 03, 2016</a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-user"></i>Rick Hammer</a></li>
                        <li><a href="#"><i aria-hidden="true" class="fa fa-tags"></i>Creative Photography</a></li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error.
                    </p>
                    <p>
                        Sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                        quia consequuntur magni dolores eos qui ratione voluptatem sequi
                        nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur, adipisci velit, sed quia non numquam eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.
                    </p>
                    <blockquote>
                        “ Thanks so much for the awesome customer service. So many
                        companies, large and small, have a lot to learn from you. Great
                        job! ”
                    </blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Sed ut perspiciatis unde omnis iste natus error.
                    </p>
                    <p>
                        Sit voluptatem accusantium doloremque laudantium, totam rem
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                        quia consequuntur magni dolores eos qui ratione voluptatem sequi
                        nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur, adipisci velit, sed quia non numquam eius
                        modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem.
                    </p>
                </div>
                <div class="comment-section">
                    <h3>10 Comments</h3>
                    <ol>
                        <li>
                            <div class="author-img pull-left">
                                <img alt="" src="images/blog/author1.jpg">
                            </div>
                            <div class="author-details pull-left">
                                <h5><a href="#">Giovanni Falcone</a></h5>
                                <span>July 21, 2016 at 3:35 pm</span>
                                <p>
                                    Recent developments in communication technology—internet,
                                    mobile, instant messaging, presence tracking, etc.—have begun
                                    to change the nature of vacation. Vacation today means absence
                                    from the workplace rather than temporary cession.
                                </p>
                                <a href="#">Reply</a>
                            </div>
                            <div class="clearfix"></div>
                            <ol>
                                <li>
                                    <div class="author-img pull-left">
                                        <img alt="" src="images/blog/author2.jpg">
                                    </div>
                                    <div class="author-details pull-left">
                                        <h5><a href="#">Jerry Hughes</a></h5>
                                        <span>July 21, 2016 at 3:35 pm</span>
                                        <p>
                                            Vacation today means absence from the
                                            workplace rather than temporary cession of
                                            work. It is now the norm in North America
                                            and Great Britain to carry on working or
                                            remain on call while on vacation rather than
                                            abandon work altogether.
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                    <h3>Leave a comment</h3>
                    <form action="#" method="post" class="comment-form">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email ID">
                        <input type="tel" name="phone" placeholder="Phone Number">
                        <textarea placeholder="Your Comments"></textarea>
                        <button type="submit" class="primary-btn"><span>Submit Your Comments</span></button>
                    </form>
                </div>
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
                            <h6><a href="blog-details.html">Lorem ipsum lor sit jamet</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post2.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.html">Consectetur adipisicing elit, sed do.</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post3.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.html">Do eiusmod tempor incididunt ut labore et</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post4.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.html">Sed do eiusmod tempor.</a></h6>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="widget-posts">
                        <div class="widget-img pull-left">
                            <img alt="" src="images/blog/wid-post5.jpg">
                        </div>
                        <div class="wid-post-title pull-left">
                            <h6><a href="blog-details.html">Lorem ipsum lor sit jamet</a></h6>
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
