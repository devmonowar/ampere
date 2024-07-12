<?php

/**
 * ampere_scripts description
 * @return [type] [description]
 */
function ampere_scripts()
{

    /**
     * all css files
     */

    wp_enqueue_style('ampere-fonts', ampere_fonts_url(), array(), '1.0.0');
    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', AMPERE_THEME_CSS_DIR . 'bootstrap.rtl.min.css', array());
    } else {
        wp_enqueue_style('bootstrap-3.3.7', AMPERE_THEME_CSS_DIR . 'bootstrap-3.3.7.min.css', array());
        wp_enqueue_style('bootstrap', AMPERE_THEME_CSS_DIR . 'bootstrap.min.css', array());
        // html template e bootstrap 2ta use korche eta thik korar jonno ami time dite cacchi na
    }
    wp_enqueue_style('animate', AMPERE_THEME_CSS_DIR . 'animate.css', []);
    wp_enqueue_style('swiper-bundle', AMPERE_THEME_CSS_DIR . 'bicon.min.css', []);
    wp_enqueue_style('et-line', AMPERE_THEME_CSS_DIR . 'et-line.css', []);
    wp_enqueue_style('magnific-popup', AMPERE_THEME_CSS_DIR . 'magnific-popup.css', []);
    wp_enqueue_style('font-awesome', AMPERE_THEME_CSS_DIR . 'font-awesome.min.css', []);
    wp_enqueue_style('mainmenu', AMPERE_THEME_CSS_DIR . 'mainmenu.css', []);
    wp_enqueue_style('owl', AMPERE_THEME_CSS_DIR . 'owl.css', []);
    // wp_enqueue_style('ampere-core', AMPERE_THEME_CSS_DIR . 'ampere-core.css', [], time());
    wp_enqueue_style('ampere-unit', AMPERE_THEME_CSS_DIR . 'ampere-unit.css', [], time());
    wp_enqueue_style('ampere-new-custom', AMPERE_THEME_CSS_DIR . 'ampere-new-custom.css', []);
    wp_enqueue_style('ampere-style', get_stylesheet_uri());


    // all js
    wp_enqueue_script('waypoints', AMPERE_THEME_JS_DIR . 'waypoints.js', ['jquery'], false, true);
    wp_enqueue_script('bootstrap-bundle', AMPERE_THEME_JS_DIR . 'bootstrap-bundle.js', ['jquery'], '', true);

    wp_enqueue_script('magnific-popup', AMPERE_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], '', true);
    wp_enqueue_script('mainmenu', AMPERE_THEME_JS_DIR . 'jquery-mainmenu.js', ['jquery'], false, true);
    wp_enqueue_script('plugin', AMPERE_THEME_JS_DIR . 'plugin.js', ['jquery'], false, true);
    wp_enqueue_script('plugins', AMPERE_THEME_JS_DIR . 'plugins.js', ['jquery'], false, true);
    wp_enqueue_script('popper', AMPERE_THEME_JS_DIR . 'popper.min.js', ['jquery'], false, true);
    wp_enqueue_script('wow', AMPERE_THEME_JS_DIR . 'wow.js', ['jquery'], false, true);

    wp_enqueue_script('ampere-main', AMPERE_THEME_JS_DIR . 'main.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'ampere_scripts');


/*
Register Fonts
 */
function ampere_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'ampere')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Poppins:wght@300;400;500;600;700;&family=Kumbh+Sans:wght@400;500;600;700;800&display=swap');
    }
    return $font_url;
}
