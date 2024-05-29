<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ampere
 */



?>


<!-- Footer Wrapper Start -->
<footer class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 col-xl-5">
                <aside class="widget no-padding">
                    <h3 class="widget-title one"><img alt="" src="images/footer-logo.png"></h3>
                    <div class="about-widget">
                        <p>Quisque nec nunc libero fringilla mollis. Nulla quis orci luctus augue. Vestibulum dapibus, mauris nec malesuada fames ac fringilla mollis turpis velit.</p>
                        <div class="social-icon"> <a class="fb" href="#"><i class="fa fa-facebook"></i></a> <a class="tw" href="#"><i class="fa fa-twitter"></i></a> <a class="gp" href="#"><i class="fa fa-google-plus"></i></a> <a class="dr" href="#"><i class="fa fa-dribbble"></i></a> <a class="be" href="#"><i class="fa fa-behance"></i></a> </div>
                    </div>
                </aside>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-2">
                <aside class="widget nav-widget">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-2">
                <aside class="widget nav-widget">
                    <h3 class="widget-title">Our Services</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-sm-6 col-lg-3 col-xl-3 bottom-form">
                <aside class="widget nav-widget">
                    <h3 class="widget-title">Get a Free Quote</h3>
                    <form action="#">
                        <div class="form-group">
                            <input name="name" placeholder="Name" type="text">
                        </div>
                        <div class="form-group">
                            <input name="subject" placeholder="Subject" type="text">
                        </div>
                        <div class="form-group">
                            <input name="message" placeholder="Message" type="text">
                        </div>
                        <button type="submit" class="btn">Send</button>
                    </form>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Wrapper End -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>© Copyright <span id="year"></span> Ampere Bootstrap Template by <span class="color">SBTechnosoft</span>.</p>
            </div>
        </div>
    </div>
</div>



<?php


do_action('ampere_footer_style');

wp_footer(); ?>
</body>

</html>