<?php


// Post Page
CSF::createSection(FALLOW_OPTION_KEY, array(
  'icon'   => 'fa fa-book',
  'title' => esc_html__('Post & Page', 'fallow'),
  'fields' => array(

    array(
      'type'    => 'subheading',
      'content' => esc_html__('Post Setting', 'fallow'),
    ),

    array(
      'id'      => 'single_post_thumnnail',
      'type'    => 'switcher',
      'title'   => esc_html__('Enable Post Thumbnail', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable post Thumbnail Image you can set ( YES / NO )', 'fallow'),
      'default' => true,
    ),
    array(
      'id'      => 'single_post_tags',
      'type'    => 'switcher',
      'title'   => esc_html__('Enable Post tags', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable post tags you can set ( YES / NO )', 'fallow'),
      'default' => true,
    ),


    array(
      'id'      => 'blog_single_author_box',
      'type'    => 'switcher',
      'title'   => esc_html__('Blog Author About', 'fallow'),
      'default' => false
    ),


  ),
));

CSF::createSection(FALLOW_OPTION_KEY, array(
  'icon'   => 'fa fa-book',
  'title' => esc_html__('404', 'fallow'),
  'fields' => array(

    array(
      'type'    => 'subheading',
      'content' => esc_html__('404 Error Page Setting', 'fallow'),
    ),

    array(
      'id'      => 'disable_header_footer',
      'type'    => 'switcher',
      'title'   => esc_html__('Disable Header Footer', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable header footer you can set ( YES / NO )', 'fallow'),
      'default' => false,
    ),

    array(
      'id'      => 'enable_404_transparent_header',
      'type'    => 'switcher',
      'title'   => esc_html__('Enable 404 Transparent header', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable home page header you can set ( YES / NO )', 'fallow'),
      'default' => false,
    ),

    array(
      'id'         => 'error_title',
      'type'       => 'text',
      'title'      => esc_html__('404 Error Page Text', 'fallow'),
      'desc'       => esc_html__('Set your 404 error title.', 'fallow'),
      'default'    => esc_html__('The page can’t be found.', 'fallow')
    ),

    array(
      'id'     => 'error__text_color',
      'type'   => 'color',
      'title'  => esc_html__('404 Error Page Text Color', 'fallow'),

      'output' => '
                .fallow-error-content span
             '

    ),

    array(
      'id'     => 'error_title_text_color',
      'type'   => 'color',
      'title'  => esc_html__('404 Error Title Color', 'fallow'),
      'default' => '#04091E',
      'output' => '
               body .fallow-error-area .fallow-error-content h3
             '

    ),

    array(
      'id'         => 'error_text',
      'type'       => 'text',
      'title'      => esc_html__('404 Error Page description', 'fallow'),
      'desc'       => esc_html__('Set your 404 error description.', 'fallow'),
      'default'    => esc_html__("The page you're looking for isn't available. Try with another page or use the go home button below", 'fallow')
    ),

    array(
      'id'     => 'error_descv_text_color',
      'type'   => 'color',
      'title'  => esc_html__('404 Error Desc Color', 'fallow'),
      'default' => '#747681',
      'output' => '
                .fallow-error-content p
             '
    ),

    array(
      'id'      => 'enable_404_return_home_button',
      'type'    => 'switcher',
      'title'   => esc_html__('Enable 404 Home Button', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable home page button you can set ( YES / NO )', 'fallow'),
      'default' => true,
    ),

    array(
      'id'     => 'error_button_text_color',
      'type'   => 'color',
      'title'  => esc_html__('404 Error Button Color', 'fallow'),
      'default' => '',
      'output' => '
                .fallow-error-content a
             '
    ),

    array(
      'id'     => 'error_button_border_color',
      'type'   => 'border',
      'title'  => esc_html__('404 Error Button Border', 'fallow'),
      'output' => '.fallow-error-content a'
    ),

    array(
      'id'                              => 'error_404_button_image',
      'type'                            => 'background',
      'title'                           => esc_html__('Button Background', 'fallow'),
      'background_gradient'             => true,
      'background_origin'               => true,
      'background_clip'                 => true,
      'background_blend_mode'           => true,
      'output'                => '.fallow-error-content a',
    ),


    array(
      'id'      => 'error_404_image',
      'type'    => 'upload',
      'title'   => esc_html__('Upload 404 Image', 'fallow'),
      'desc'    => esc_html__('Upload 404 image width 706px and height 431px.', 'fallow'),
      'default' => '',

    ),

    array(
      'id'                              => 'error_404_body_image',
      'type'                            => 'background',
      'title'                           => esc_html__('Body Background', 'fallow'),
      'background_gradient'             => true,
      'background_origin'               => true,
      'background_clip'                 => true,
      'background_blend_mode'           => true,
      'output'                => '.error404',
    ),


    array(
      'id'      => 'error_enable_main_container',
      'type'    => 'switcher',
      'title'   => esc_html__('Blog Container', 'fallow'),
      'desc'    => esc_html__('If you want to enable or disable 404 page footer you can set ( YES / NO )', 'fallow'),
      'default' => true,
    ),

  ),
));
