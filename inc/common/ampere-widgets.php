<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ampere_widgets_init()
{

    $footer_style_2_switch = get_theme_mod('footer_layout_2_switch', false);
    $footer_style_3_switch = get_theme_mod('footer_layout_2_switch', false);

    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'ampere'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="tp-sidebar-widget mb-40 %2$s"><div class="tp-sidebar-widget-content">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="tp-sidebar-widget-title">',
        'after_title'   => '</h3>',
    ]);

    /**
     * blog sidebar
     */
    if (class_exists("TP_Core")) :
        register_sidebar([
            'name'          => esc_html__('Services Sidebar', 'ampere'),
            'id'            => 'tp-services-sidebar',
            'before_widget' => '<div id="%1$s" class="tp-service-widget-item tp-service-widget-tab mb-40 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="tp-service-widget-title">',
            'after_title'   => '</h3>',
        ]);
    endif;


    $footer_widgets = get_theme_mod('footer_widget_number', 4);

    // footer default
    for ($num = 1; $num <= $footer_widgets; $num++) {
        register_sidebar([
            'name'          => sprintf(esc_html__('Footer %1$s', 'ampere'), $num),
            'id'            => 'footer-' . $num,
            'description'   => sprintf(esc_html__('Footer Column %1$s', 'ampere'), $num),
            'before_widget' => '<div id="%1$s" class="widget footer-widget tp-footer-' . $num . ' %2$s"> <div class="tp-footer-widget-content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ]);
    }
    // footer 2
    if ($footer_style_2_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name'          => sprintf(esc_html__('Footer Style 2 : %1$s', 'ampere'), $num),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf(esc_html__('Footer Style 2 : %1$s', 'ampere'), $num),
                'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-' . $num . ' %2$s"> <div class="tp-footer-widget-content">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h3 class="tp-footer-widget-title">',
                'after_title'   => '</h3>',
            ]);
        }
    }

    // footer 3
    if ($footer_style_3_switch) {
        for ($num = 1; $num <= $footer_widgets; $num++) {

            register_sidebar([
                'name'          => sprintf(esc_html__('Footer Style 3 : %1$s', 'ampere'), $num),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf(esc_html__('Footer Style 3 : %1$s', 'ampere'), $num),
                'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-' . $num . ' %2$s"> <div class="tp-footer-widget-content">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h3 class="tp-footer-widget-title">',
                'after_title'   => '</h3>',
            ]);
        }
    }
}
add_action('widgets_init', 'ampere_widgets_init');
