<?php

// tp metabox 
add_filter('tp_meta_boxes', 'themepure_metabox');

function themepure_metabox($meta_boxes)
{

	$prefix     = 'ampere';

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_page_meta_box',
		'title'    => esc_html__('TP Page Info', 'ampere'),
		'post_type' => 'page',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Show Breadcrumb?', 'ampere'),
				'id'      => "{$prefix}_check_bredcrumb",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),
			array(
				'label'    => esc_html__('Show Breadcrumb Image?', 'ampere'),
				'id'      => "{$prefix}_check_bredcrumb_img",
				'type'    => 'switch',
				'default' => 'on',
				'conditional' => array()
			),

			array(
				'label'    => esc_html__('Enable Secondary Logo', 'ampere'),
				'id'      => "{$prefix}_en_secondary_logo",
				'type'    => 'switch',
				'default' => 'off',
				'conditional' => array()
			),

			array(

				'label'    => esc_html__('Breadcrumb Background', 'ampere'),
				'id'      => "{$prefix}_breadcrumb_bg",
				'type'    => 'image',
				'default' => '',
				'conditional' => array(
					"{$prefix}_check_bredcrumb_img", "==", "on"
				)
			),

			array(

				'label'    => esc_html__('Footer BG', 'ampere'),
				'id'      => "{$prefix}_footer_bg_image",
				'type'    => 'image',
				'default' => '',
				'conditional' => array()
			),


			array(
				'label' => 'Colorpicker',
				'id'   	=> "{$prefix}_footer_bg_color",
				'type' 	=> 'colorpicker',
				'placeholder' => '',
				'default' 	  => '',
				'conditional' => array()
			),




			// multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__('Header', 'ampere'),
				'id'      => "{$prefix}_header_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__('Default', 'ampere'),
					'custom' => esc_html__('Custom', 'ampere'),
				),
				'default' => 'default',
				'conditional' => array()
			),

			// select field dropdown 
			array(

				'label'           => esc_html__('Select Header Style', 'ampere'),
				'id'              => "{$prefix}_header_style",
				'type'            => 'select',
				'options'         => array(
					'header_1' => esc_html__('Header 1', 'ampere'),
					'header_2' => esc_html__('Header 2', 'ampere'),
					'header_3' => esc_html__('Header 3', 'ampere'),
					'header_1_onepage' => esc_html__('Header 01 OnePage', 'ampere'),
					'header_2_onepage' => esc_html__('Header 02 OnePage', 'ampere'),
					'header_3_onepage' => esc_html__('Header 03 OnePage', 'ampere'),
				),
				'placeholder'     => esc_html__('Select a header', 'ampere'),
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "custom"
				),
				'default' => 'header_1',
				'parent' => "{$prefix}_header_tabs",
				'context'  => 'normal'
			),

			// select field dropdown
			array(

				'label'           => esc_html__('Select Header Template', 'ampere'),
				'id'              => "{$prefix}_header_templates",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__('Select a template', 'ampere'),
				'post_type'       => 'tp-header',
				'conditional' => array(
					"{$prefix}_header_tabs", "==", "elementor"
				),
				'default' => '',
			),


			// multiple buttons group field like multiple radio buttons
			array(
				'label'   => esc_html__('Footer', 'ampere'),
				'id'      => "{$prefix}_footer_tabs",
				'desc'    => '',
				'type'    => 'tabs',
				'choices' => array(
					'default' => esc_html__('Default', 'ampere'),
					'custom' => esc_html__('Custom', 'ampere'),
				),
				'default' => 'default',
				'conditional' => array()
			),

			// select field dropdown
			array(

				'label'           => esc_html__('Select Footer Style', 'ampere'),
				'id'              => "{$prefix}_footer_style",
				'type'            => 'select',
				'options'         => array(
					'footer_1' => esc_html__('Footer 1', 'ampere'),
					'footer_2' => esc_html__('Footer 2', 'ampere'),
					'footer_3' => esc_html__('Footer 3', 'ampere'),
				),
				'placeholder'     => esc_html__('Select a footer', 'ampere'),
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "custom"
				),
				'default' => 'footer_1',
				'parent' => "{$prefix}_footer_tabs"
			),

			// select field dropdown
			array(

				'label'           => esc_html__('Select Footer Template', 'ampere'),
				'id'              => "{$prefix}_footer_template",
				'type'            => 'select_posts',
				'placeholder'     => esc_html__('Select a template', 'ampere'),
				'post_type'       => 'tp-footer',
				'conditional' => array(
					"{$prefix}_footer_tabs", "==", "elementor"
				),
				'default' => '',
			),
		),
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_gallery_meta',
		'title'    => esc_html__('TP Gallery Post', 'ampere'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Gallery', ''),
				'id'      => "{$prefix}_post_gallery",
				'type'    => 'gallery',
				'default' => '',
				'conditional' => array(),
			),
		),
		'post_format' => 'gallery'
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_video_meta',
		'title'    => esc_html__('TP Video Post', 'ampere'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Video', 'ampere'),
				'id'      => "{$prefix}_post_video",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__('Place your video url.', 'ampere'),
			),
		),
		'post_format' => 'video'
	);

	$meta_boxes[] = array(
		'metabox_id'       => $prefix . '_post_audio_meta',
		'title'    => esc_html__('TP Audio Post', 'ampere'),
		'post_type' => 'post',
		'context'  => 'normal',
		'priority' => 'core',
		'fields'   => array(
			array(
				'label'    => esc_html__('Audio', 'ampere'),
				'id'      => "{$prefix}_post_audio",
				'type'    => 'text',
				'default' => '',
				'conditional' => array(),
				'placeholder'     => esc_html__('Place your audio url..', 'ampere'),
			),
		),
		'post_format' => 'audio'
	);
	return $meta_boxes;
}
