<?php

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ampere
 */


//footer bg image & color
$ampere_footer_bg_url_from_page = function_exists('tpmeta_image_field') ? tpmeta_image_field('ampere_footer_bg_image') : '';

$ampere_footer_bg_color_from_page = function_exists('tpmeta_field') ? tpmeta_field('ampere_footer_bg_color') : '';

$footer_bg_img = get_theme_mod('footer_bg_image');
$footer_bg_color = get_theme_mod('footer_bg_color');

// bg image
$bg_img = !empty($ampere_footer_bg_url_from_page['url']) ? $ampere_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty($ampere_footer_bg_color_from_page) ? $ampere_footer_bg_color_from_page : $footer_bg_color;

// footer area links  switch
$footer_area_links_switch = get_theme_mod('footer_area_links_switch', false);
// footer area links 
$footer_area_links = get_theme_mod('footer_area_links', __('#', 'ampere'));

$footer_social_switch = get_theme_mod('footer_social_switch', false);

// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod('footer_widget_number', 4);



for ($num = 1; $num <= $footer_widgets + 1; $num++) {
    if (is_active_sidebar('footer-' . $num)) {
        $footer_columns++;
    }
}


switch ($footer_columns) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-xl-3 col-lg-4 col-md-6 col-sm-6';
        $footer_class[2] = 'col-xl-3 col-lg-2 col-md-6 col-sm-6';
        $footer_class[3] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        $footer_class[4] = 'col-xl-3 col-lg-3 col-md-6 col-sm-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
}

?>


<!-- Footer Wrapper Start -->
<footer>
    <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')) : ?>
        <div class="footer-top" style="background: <?php echo $bg_color; ?> url(<?php echo $bg_img; ?>);">
            <div class="container">
                <div class="row">
                    <?php
                    if ($footer_columns < 5) {
                        print '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">';
                        dynamic_sidebar('footer-1');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">';
                        dynamic_sidebar('footer-2');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar('footer-3');
                        print '</div>';

                        print '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">';
                        dynamic_sidebar('footer-4');
                        print '</div>';
                    } else {
                        for ($num = 1; $num <= $footer_columns; $num++) {
                            if (!is_active_sidebar('footer-' . $num)) {
                                continue;
                            }
                            print '<div class="' . esc_attr($footer_class[$num]) . '">';
                            dynamic_sidebar('footer-' . $num);
                            print '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    <?php endif; ?>
    <!-- Footer Wrapper End -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><?php print ampere_copyright_text(); ?></p>
                </div>
            </div>
        </div>
    </div>

</footer>