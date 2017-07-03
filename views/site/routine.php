<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 28.06.2017
 * Time: 1:16
 */

?>

<!-- Breadcrumb  -->
<section class="breadcrumb-section <?php echo isset($css['header'])?$css['header']:''?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 text-center">
                <div class="breadcrumb-content">
                    <h2>Class Routines</h2>
                    <ul>
                        <li><a href="index.php">Home</a><span>/</span></li>
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
