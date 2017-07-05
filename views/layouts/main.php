<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 13:54
 */

use yii\widgets\Menu;
use yii\helpers\Html;
use app\controllers\SiteController;
$css = SiteController::getCssStyle();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kidzy</title>
    <base href="<?= Yii::$app->homeUrl ?>">
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
    <style>
        .owl-carousel.owl-theme {
            <?php
            $hour=date('G');

            $hour = (isset($_GET['hour']))?$_GET['hour']:$hour;


            if($hour>=23 || $hour<5 && $hour>=0){
                ?> background: #013394;<?php
            }
            if($hour>5 && $hour<13){
                ?> background: #82cdf4; <?php
            }
            if($hour>=13 && $hour<17){
                ?> background: #82cdf4; <?php
            }
            if($hour>=17 && $hour<23){
                ?> background: #8a82f4<?php ;
            }?>
        }
    </style>
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
                        <a href="<?=\yii\helpers\Url::to(['site/index'])?>"><img alt="Kidzy" src="images/home1/logo.png"></a>
                    </div>
                    <?=
                    Menu::widget([
                        'items' => [
                            ['label' => 'Home', 'url' => ['site/index']],
                            ['label' => 'About-us', 'url' => ['site/about-us']],
                            ['label' => 'Pages', 'url' => ['#'],
                                'items'=>[
                                    ['label'=>'Event','url'=>['site/event'],
                                        'items'=>[
                                            ['label'=>'Event details','url'=>['site/event-details']],
                                        ],
                                    ],
                                    ['label'=>'Routine','url'=>['site/routine']],
                                    ['label'=>'Contact','url'=>['site/contact']],
                                ],

                                'options'=>['class'=>'menu-has-child'],
                            ],
                            ['label' => 'Features', 'url' =>['site/shortcode']],
                            ['label' => 'Class', 'url' => ['site/class'],
                                'items'=>[
                                    ['label'=>'Class details','url'=>['site/class-details']],
                                ],
                                'options'=>['class'=>'menu-has-child'],
                            ],
                            ['label' => 'Blog', 'url' => ['site/blog'],
                                'items'=>[
                                    ['label'=>'Blog details','url'=>['site/blog-details']],
                                ],
                                'options'=>['class'=>'menu-has-child'],
                            ],
                            ['label' => 'Teacher', 'url' => ['site/teacher'],
                                'items'=>[
                                    ['label'=>'Teacher details','url'=>['site/teacher-details']],
                                ],
                                'options'=>['class'=>'menu-has-child'],
                            ],
                            [
                                    'label'=>'<i class="fa fa-search"></i>',
                                'url'=>['#'],

                                'options'=>['id'=>'search-pop']],

                        ],
                        'options' => ['class' => 'main-menu pull-right'],
                        'encodeLabels'=>false,
                    ]);?>


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

<?= $content ?>

<!-- Footer Section -->
<footer class="footer-section <?php echo \app\controllers\SiteController::getCssStyle('bg_footer');?>">
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
                        <input type="text" required="required" class="input-username" name="username"
                               placeholder="Username">
                        <input type="password" required="required" class="input-password" name="password"
                               placeholder="Password">
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


