<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 1:47
 */

?>

<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo \app\controllers\SiteController::getCssStyle()['header'];?>">
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
