<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ampere
 */

get_header();

$blog_column = is_active_sidebar('blog-sidebar') ? 8 : 12;
?>


<section class="tp-postbox-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-xxl-<?php print esc_attr($blog_column); ?> col-xl-<?php print esc_attr($blog_column); ?> col-lg-<?php print esc_attr($blog_column); ?> blog-post-items blog-padding">
				<div class="tp-postbox-wrapper">
					<?php
					if (have_posts()) :
						if (is_home() && !is_front_page()) :
					?>
							<header>
								<h1 class="page-title postbox__title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php
						endif; ?>
						<?php
						/* Start the Loop */
						while (have_posts()) : the_post(); ?>
							<?php
							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part('template-parts/content', get_post_format()); ?>
						<?php
						endwhile;
						?>
						<div class="tp-postbox-pagination">
							<?php ampere_pagination('<i class="fa-regular fa-arrow-left"></i>', '<i class="fa-regular fa-arrow-right"></i>', '', ['class' => '']); ?>
						</div>
					<?php
					else :
						get_template_part('template-parts/content', 'none');
					endif;
					?>


				</div>
			</div>

			<?php if (is_active_sidebar('blog-sidebar')) : ?>
				<div class="col-xxl-4 col-xl-4 col-lg-4">
					<div class="tp-sidebar-wrapper">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
</section>







<!-- not dynamic code-->


<!--main slider-->
<section class="main-slider">
	<div class="main-slider-carousel owl-carousel owl-theme">
		<div class="slide" style="background-image:url(images/banner-1.jpg)">
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
		<div class="slide" style="background-image:url(images/banner-2.jpg)">
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
		<div class="slide" style="background-image:url(images/banner-3.jpg)">
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
<!-- About Us area -->
<section id="about-us" class="about-wrapper">
	<div class="container">
		<div class="section_heading">
			<h2>About <span>Us</span></h2>
			<div class="separator">
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="home-about-inner">
					<h2>15 Years of Experience in this Business.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eatrl commodo consequat. Duis aute irure dolor in.</p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="single-about-service">
						<div class="about-services-icon"> <i class="bi bi-bulb"></i></div>
						<div class="about-service-content">
							<h3>Electrical Services</h3>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="single-about-service">
						<div class="about-services-icon"> <i class="bi bi-alarm-clock"></i></div>
						<div class="about-service-content">
							<h3>24/7 Services</h3>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
					<div class="single-about-service">
						<div class="about-services-icon"> <i class="bi bi-bulb"></i></div>
						<div class="about-service-content">
							<h3>Electrical Lighting</h3>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our counters -->
<div class="counter-wrapper">
	<div id="counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="work-statistics text-center"> <i class="icon icon-clock stat-icon" aria-hidden="true"></i>
						<h3 class="Count">5325</h3>
						<span class="fun-line"></span>
						<p>Hours of Work</p>
					</div>
					<!-- end work-statistics  -->
				</div>
				<!-- end col-md-3  -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="work-statistics text-center"> <i class="icon icon-profile-male stat-icon" aria-hidden="true"></i>
						<h3 class="Count">160</h3>
						<span class="fun-line"></span>
						<p>Satisfied Clients</p>
					</div>
					<!-- end work-statistics  -->
				</div>
				<!-- end col-md-3  -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="work-statistics text-center"> <i class="icon icon-lightbulb stat-icon" aria-hidden="true"></i>
						<h3 class="Count">8530</h3>
						<span class="fun-line"></span>
						<p>Projects Completed</p>
					</div>
					<!-- end work-statistics  -->
				</div>
				<!-- end col-md-3  -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="work-statistics text-center"> <i class="icon icon-trophy stat-icon" aria-hidden="true"></i>
						<h3 class="Count">49</h3>
						<span class="fun-line"></span>
						<p>Awards Won</p>
					</div>
					<!-- end work-statistics  -->
				</div>
				<!-- end col-md-3  -->
			</div>
			<!-- end row  -->
		</div>
		<!-- end container-fluid  -->
	</div>
	<!-- end counter  -->
</div>
<!-- Our Services Wrapper -->
<section class="services-wrapper">
	<div class="container">
		<div class="section_heading">
			<h2>Our <span>Services</span></h2>
			<div class="separator">
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="fa fa-home"></i></div>
					<h3>Residential Services</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="bi bi-spark"></i></div>
					<h3>Commercial Services</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="bi bi-table-lamp"></i></div>
					<h3>Industrial Service</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="bi bi-worker-cap"></i></div>
					<h3>Electrical Repair</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="bi bi-video-cam"></i></div>
					<h3>Electrical Security</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
				<div class="single-service-content">
					<div class="single-services-icon"><i class="bi bi-bulb"></i></div>
					<h3>Electrical Support</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
					<a href="contact-us.html" data-text="Learn More" class="theme-button-one bttn color-one"><span>Learn More</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Services Wrapper End -->
<!-- CTA Wrapper Start -->
<section class="cta-wrapper">
	<div class="container">
		<div class="col col-lg-12">
			<div class="cta-text">
				<h3>Do you need any requirement for electrical repair or maintenance?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eatrl commodo consequat. Duis aute irure dolor in.</p>
				<span class="line"></span>
				<ul>
					<li>Contact Us</li>
					<li><i class="fa fa-headphones"></i> 0123456789</li>
					<li><i class="fa fa-envelope"></i> demo@example.com</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- CTA Wrapper End -->
<!-- Our Team Wrapper Start -->
<section class="our-team-wrapper">
	<div class="container">
		<div class="section_heading">
			<h2>Our <span>Team</span></h2>
			<div class="separator">
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member">
					<div class="team-thumb"> <img src="images/our-team1.jpg" alt="" class="img-fluid">
						<div class="team-social">
							<ul class="global-list">
								<li><a href="#" tabindex="-1"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="team-info">
						<h2>Jenifar Tulip</h2>
						<span>Field Supervisor</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member">
					<div class="team-thumb"> <img src="images/our-team2.jpg" alt="" class="img-fluid">
						<div class="team-social">
							<ul class="global-list">
								<li><a href="#" tabindex="-1"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="team-info">
						<h2>Jenifar Tulip</h2>
						<span>Field Supervisor</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member">
					<div class="team-thumb"> <img src="images/our-team3.jpg" alt="" class="img-fluid">
						<div class="team-social">
							<ul class="global-list">
								<li><a href="#" tabindex="-1"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="team-info">
						<h2>Jenifar Tulip</h2>
						<span>Field Supervisor</span>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member">
					<div class="team-thumb"> <img src="images/our-team4.jpg" alt="" class="img-fluid">
						<div class="team-social">
							<ul class="global-list">
								<li><a href="#" tabindex="-1"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" tabindex="-1"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="team-info">
						<h2>Jenifar Tulip</h2>
						<span>Field Supervisor</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Our Team Wrapper End -->
<!-- Latest Projects Start -->
<section class="gallery-wrapper home">
	<div class="gallery-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img1.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img1.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img2.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img2.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<span>Title</span>
								<h2>Description</h2>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img3.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img3.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img4.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img4.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img5.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img5.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img6.jpg" alt="" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img6.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img7.jpg" alt="Image" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img7.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 no-padding">
					<div class="sb-photo"> <img src="images/gallery-img8.jpg" alt="Image" class="img-fluid">
						<div class="photo-overlay">
							<div class="overlay-content">
								<div class="zoom-icon"> <a href="images/gallery-img8.jpg"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a> </div>
								<h2>Title</h2>
								<span>Description</span>
							</div>
							<!-- /.overlay-content -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Latest Projects End -->







<?php
get_footer();
