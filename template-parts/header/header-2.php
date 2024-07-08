<?php
// Header Style 2 will be done later
/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ampere
 */

// info
$header_topbar_switch = get_theme_mod('header_topbar_switch', false);

// Email id 
$header_top_email = get_theme_mod('header_email', __('ampere@support.com', 'ampere'));

// Phone Number
$header_top_phone = get_theme_mod('header_phone', __('+8801310-069824', 'ampere'));

// Header Address Text
$header_top_address_text = get_theme_mod('header_address', __('734 H, Bryan Burlington, NC 27215', 'ampere'));

// Header charity Text
$header_top_charity_text = get_theme_mod('header_top_charity_text', __('Connect with our charity', 'ampere'));

// Header Address Link
$header_top_address_link = get_theme_mod('header_address_link', __('#', 'ampere'));

// Button Text
$header_top_button_switch = get_theme_mod('header_top_button_switch', false);
$header_top_button_text = get_theme_mod('header_button_text', __('Donate Now', 'ampere'));

// Button Text
$header_top_button_link = get_theme_mod('header_button_link', __('#', 'ampere'));

$header_language_switch = get_theme_mod('header_language_switch', __('false', 'ampere'));
$phone_number_url = preg_replace("/[^0-9]/", "", $header_top_phone);

// header right
$ampere_header_right = get_theme_mod('header_right_switch', false);
$ampere_menu_col = $ampere_header_right ? 'col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xl-10 col-lg-8 d-none d-lg-block';
$ampere_menu_end = $ampere_header_right ? '' : 'd-flex justify-content-end';

//    col-xl-7 d-none d-xl-block

// header search btn 
$header_search_switch = get_theme_mod('header_search_switch', true);

// header auth btn 
$header_auth_switch = get_theme_mod('header_auth_switch', true);
$header_auth_link = get_theme_mod('header_auth_link', "#");

?>




<!-- header area start -->

<header class="header-section">
    <div class="header-bottomarea">
        <div class="container">
            <div class="header-bottom">
                <!-- Header Logo -->
                <?php ampere_header_logo(); ?>
                <!--// Header Logo -->
                <!-- Main Navigation -->
                <nav class="in-navigation">
                    <?php ampere_header_menu();
                    ?>
                </nav>
                <!--// Main Navigation -->
                <!-- Header Search -->
                <?php if (!empty($header_search_switch)) : ?>
                    <div class="header-search">
                        <button class="header-searchtrigger"><i class="fa fa-search"></i></button>
                        <form class="header-searchbox" method="get" action="<?php print esc_url(home_url('/')); ?>">
                            <input placeholder="<?php print esc_attr__('Search...', 'ampere'); ?>" name="s" value="<?php print esc_attr(get_search_query()) ?>" type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                    </div>
                <?php endif; ?>
                <!--// Header Search -->
            </div>
        </div>
    </div>
    <div class="mobile-menu-wrapper clearfix">
        <div class="container">
            <div class="mobile-menu"></div>
        </div>
    </div>
</header>


<!--main slider-->
<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">
        <div class="slide" style="background-image:url(<?php print(get_template_directory_uri()); ?>/assets/img/banner-1.jpg)">
            <div class="container">
                <ul class="social-links d-none d-xl-block">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                </ul>
                <div class="content">
                    <h1>Welcome To<span>Ampere</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nibh euismod Praesent interdum.</p>
                    <div class="tp-btn"> <a href="contact-us.html" data-text="Contact Us" class="theme-button-one bttn color-one"><span>Contact Us</span></a> </div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(<?php print(get_template_directory_uri()); ?>/assets/img/banner-2.jpg)">
            <div class="container">
                <ul class="social-links d-none d-xl-block">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                </ul>
                <div class="content">
                    <h1>Welcome To<span>Ampere</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nibh euismod Praesent interdum.</p>
                    <div class="tp-btn"> <a href="contact-us.html" data-text="Contact Us" class="theme-button-one bttn color-one"><span>Contact Us</span></a> </div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:url(<?php print(get_template_directory_uri()); ?>/assets/img/banner-3.jpg)">
            <div class="container">
                <ul class="social-links d-none d-xl-block">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-linkedin" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                </ul>
                <div class="content">
                    <h1>Welcome To<span>Ampere</span></h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nibh euismod Praesent interdum.</p>
                    <div class="tp-btn"> <a href="contact-us.html" data-text="Contact Us" class="theme-button-one bttn color-one"><span>Contact Us</span></a> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main slider end -->

<!-- Features Section Start -->
<div class="features-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 no-padding">
                <div class="single-feature-service">
                    <div class="services-icon"><i class="bi bi-bulb"></i></div>
                    <div class="service-content">
                        <h3>Electrical Services</h3>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="single-feature-service two">
                    <div class="services-icon"><i class="bi bi-worker-cap"></i></div>
                    <div class="service-content">
                        <h3>Electrical Repair</h3>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 no-padding">
                <div class="single-feature-service three">
                    <div class="services-icon"><i class="bi bi-spark"></i></div>
                    <div class="service-content">
                        <h3>Electrical Security</h3>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Section End -->
<!-- Banner Wrapper End -->

<!-- Pricing Wrapper Start -->
<section class="pricing-wrapper">
    <div class="container">
        <div class="section_heading">
            <h2>Our <span>Pricing</span></h2>
            <div class="separator">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_sec">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 price_card">
                        <div class="plan-title">
                            <h4>Personal</h4>
                            <div class="separator">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="price_amount"> From<strong>$9</strong>/mo </div>
                        <div class="features">
                            <ul>
                                <li>One Feature</li>
                                <li class="deactive">Another Feature</li>
                                <li class="deactive">More Feature</li>
                                <li class="deactive">Extra Feature</li>
                            </ul>
                        </div>
                        <div class="purchase"> <a class="purchase_now" href="javascript:void(0)" title="Purchase Now">Purchase Now</a> </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 price_card ultimate">
                        <div class="plan-title">
                            <h4>Ultimate</h4>
                            <div class="separator">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="price_amount"> From<strong>$199</strong>/mo </div>
                        <div class="features">
                            <ul>
                                <li>One Feature</li>
                                <li>Another Feature</li>
                                <li>More Feature</li>
                                <li>Extra Feature</li>
                            </ul>
                        </div>
                        <div class="purchase"> <a class="purchase_now" href="javascript:void(0)" title="Purchase Now">Purchase Now</a> </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 price_card">
                        <div class="plan-title">
                            <h4>Business</h4>
                            <div class="separator">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="price_amount"> From<strong>$99</strong>/mo </div>
                        <div class="features">
                            <ul>
                                <li>One Feature</li>
                                <li>Another Feature</li>
                                <li>More Feature</li>
                                <li class="deactive">Extra Feature</li>
                            </ul>
                        </div>
                        <div class="purchase"> <a class="purchase_now" href="javascript:void(0)" title="Purchase Now">Purchase Now</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Wrapper End -->



<header id="header-sticky" class="tp-header-area-2 p-relative tp-header-height d-none">
    <div class="tp-header-space-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-6">
                    <div class="tp-header-logo-2 p-relative">
                        <?php // ampere_header_logo(); 
                        ?>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-xl-block">
                    <div class="tp-main-menu home-2 d-none d-xl-block">
                        <nav class="tp-main-menu-content">
                            <?php ampere_header_menu(); ?>
                        </nav>
                    </div>
                </div>
                <?php if (!empty($ampere_header_right)) : ?>
                    <div class="col-xl-3 col-6">
                        <div class="tp-header-main-right-2 d-flex align-items-center justify-content-xl-end">
                            <div class="tp-header-contact-2 d-flex align-items-center">
                                <?php if (!empty($header_search_switch)) : ?>
                                    <div class="tp-header-contact-search search-open-btn d-none d-xxl-block">
                                        <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($header_top_phone)) : ?>
                                    <div class="tp-header-contact-inner d-none d-xl-flex align-items-center">
                                        <div class="tp-header-contact-icon">
                                            <span><i class="fa-solid fa-phone"></i></span>
                                        </div>
                                        <div class="tp-header-contact-content">
                                            <p><?php echo esc_html__("Requesting A Call:", "ampere") ?></p>
                                            <span><a href="tel:<?php echo ampere_kses($phone_number_url); ?>"><?php echo esc_html($header_top_phone); ?></a></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="tp-header-main-right-hamburger-btn d-xl-none offcanvas-open-btn text-end">
                                <button class="hamburger-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>


<!-- header area end -->
<?php get_template_part('template-parts/header/header-side-info'); ?>