<?php

/**
 * Breadcrumbs for ampere theme.
 *
 * @package     ampere
 * @author      Theme_Pure
 * @copyright   Copyright (c) 2022, Theme_Pure
 * @link        https://www.weblearnbd.net
 * @since       ampere 1.0.0
 */



function ampere_breadcrumb_func()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'ampere'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'ampere'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'ampere'));
    } elseif (is_single() && 'courses' == get_post_type()) {
        $title = esc_html__('Course Details', 'ampere');
    } elseif (is_search()) {
        $title = esc_html__('Search Results for : ', 'ampere') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'ampere');
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }



    $_id = get_the_ID();

    if (is_single() && 'product' == get_post_type()) {
        $_id = $post->ID;
    } elseif (function_exists("is_shop") and is_shop()) {
        $_id = wc_get_page_id('shop');
    } elseif (is_home() && get_option('page_for_posts')) {
        $_id = get_option('page_for_posts');
    }

    $is_breadcrumb = function_exists('tpmeta_field') ? tpmeta_field('ampere_check_bredcrumb') : 'on';

    $con1 = $is_breadcrumb && ($is_breadcrumb == 'on') && $breadcrumb_show == 1;

    $con_main = is_404() ? is_404() : $con1;

    if ($con_main) {
        $bg_img_from_page = function_exists('tpmeta_image_field') ? tpmeta_image_field('ampere_breadcrumb_bg') : '';

        $hide_bg_img = function_exists('tpmeta_field') ? tpmeta_field('ampere_check_bredcrumb_img') : 'on';
        // get_theme_mod
        $bg_img = get_theme_mod('breadcrumb_image');
        $breadcrumb_padding = get_theme_mod('breadcrumb_padding');
        $breadcrumb_bg_color = get_theme_mod('breadcrumb_bg_color', '#16243E');
        $breadcrumb_shape_switch = get_theme_mod('breadcrumb_shape_switch', 'on');
        if ($hide_bg_img == 'off') {
            $bg_main_img = '';
        } else {
            $bg_main_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $bg_img;
        }

?>



        <!-- Breadcrumb Wrapper -->
        <div class="breadcrumb-wrapper">
            <div class="images-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-heading">
                            <?php echo ampere_kses($title);
                            var_dump($title);

                            ?>
                            <span class="line"></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="page-breadcrumb-inner">
                            <div class="page-breadcrumb">

                                <?php if (function_exists('bcn_display')) : ?>
                                    <div class="breadcrumb-list">
                                        <?php bcn_display(); ?>
                                    </div>
                                <?php endif; ?>



                                <!-- <div class="breadcrumb-list">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- about breadcrumb area start -->
        <section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix" data-bg-color="<?php echo esc_attr($breadcrumb_bg_color); ?>">
            <div class="breadcrumb__bg" data-background="<?php print esc_attr($bg_main_img); ?>"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumb__content">
                            <h3 class="breadcrumb__title"><?php echo ampere_kses($title); ?></h3>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="breadcrumb__content">
                            <?php if (function_exists('bcn_display')) : ?>
                                <div class="breadcrumb__list text-center text-sm-end">
                                    <?php bcn_display(); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about breadcrumb area end -->

<?php
    }
}

add_action('ampere_before_main_content', 'ampere_breadcrumb_func');
