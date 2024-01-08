<?php


// pre-loader
CSF::createSection(FALLOW_OPTION_KEY, array(

	'title'   => esc_html__('Preloader', 'fallow'),
	'icon'   => 'fa fa-spinner',
	'fields' => array(
		array(
			'type'    => 'subheading',
			'content' => esc_html__('Preloader Type', 'fallow'),
		),
		array(
			'id'      => 'enable_preloader',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Preloader', 'fallow'),
			'desc'    => esc_html__('If you want to enable or disable preloader you can set ( YES / NO )', 'fallow'),
			'default' => false,
		),

		array(
			'id'      => 'enable_close_preloader',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Close Button', 'fallow'),
			'desc'    => esc_html__('If you want to enable or disable preloader you can set ( YES / NO )', 'fallow'),
			'default' => true,
		),

		array(
			'id'     => 'preloader_close_text',
			'type'   => 'text',
			'title'  => esc_html__('Close Text', 'fallow'),
			'default' => esc_html__('Close', 'fallow'),
			'dependency' => array('enable_close_preloader', '==', true),
		),

		array(
			'type'    => 'subheading',
			'content' => esc_html__('Preloader Background & Color', 'fallow'),
		),

		array(
			'id'      => 'preloader_bg',
			'type'    => 'background',
			'title'   => esc_html__('Preloader Background', 'fallow'),
			'output'  => '.loader-wrap .preloader',
			'desc'    => esc_html__('Upload a new background image or select color to set the preloader background.', 'fallow'),
		),

		array(
			'id'      => 'preloader_overlay_bg',
			'type'    => 'background',
			'title'   => esc_html__('Preloader Background Overlay', 'fallow'),
			'output'  => 'body .loader-wrap .layer .overlay',

		),

		array(
			'id'      => 'preloader_bg_icon',
			'type'    => 'background',
			'title'   => esc_html__('Preloader Close Icon', 'fallow'),
			'output'  => 'body .preloader .preloader-close',
			'dependency' => array('enable_close_preloader', '==', true),

		),

		array(
			'id'     => 'preloader_text_colors',
			'type'   => 'color',
			'title'  => esc_html__('Close Color', 'fallow'),
			'output' => 'body .preloader .preloader-close',
			'dependency' => array('enable_close_preloader', '==', true),
		),


	),
));
