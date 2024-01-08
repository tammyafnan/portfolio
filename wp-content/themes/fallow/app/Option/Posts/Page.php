<?php


$header_footer_url = admin_url('edit.php?post_type=qheader-footer');
// Control core classes for avoid errors
if (class_exists('CSF')) {

  //
  // Set a unique slug-like ID
  $post_prefix = 'fallow_page_options';

  //
  // Create a metabox for post
  CSF::createMetabox($post_prefix, array(
    'title'  => esc_html__('Settings', 'fallow'),
    'post_type' => 'page',
  ));

  // Generel section
  CSF::createSection($post_prefix, array(
    'title'  => esc_html__('Generel', 'fallow'),
    'fields' => array(

      array(
        'id'      => 'enable_rtl',
        'type'    => 'switcher',
        'title'   => esc_html__('RTL', 'fallow'),
        'desc'    => esc_html__('If you want to enable or Disable RTL you can set ( YES / NO )', 'fallow'),
        'default' => false,
      ),


      array(
        'id'    => 'rtl_language',
        'type'  => 'text',
        'title'  =>  esc_html__('Language Code', 'fallow'),
        'desc'  =>  __('Provide language code from <a href="https://cartflows.com/docs/complete-list-of-wordpress-locale-codes/" target="_blank"> Google </a>', 'fallow'),
      ),


    )

  ));

  // Banner section
  CSF::createSection($post_prefix, array(
    'title'  => esc_html__('Banner', 'fallow'),
    'fields' => array(

      array(

        'id'      => 'banner_page_title',
        'type'    => 'text',
        'title'   => esc_html__('Page Banner', 'fallow'),

      ),

      array(

        'id'      => 'banner_single_blog_image',
        'type'    => 'background',
        'title'   => esc_html__('Upload Background', 'fallow'),
        'desc'    => esc_html__('Upload main Image width 1200px and height 400px.', 'fallow'),
        'output' => '.page .fallow-page-title-area',
        'output_important' => true

      ),

      array(
        'id'     => 'banner_page_title_color',
        'type'   => 'color',
        'title'  => esc_html__('Page Title Color', 'fallow'),
        'output' => '.page .fallow-page-title-item .title'
      ),

      array(

        'id'     => 'banner_page_breadcrumb_color',
        'type'   => 'color',
        'title'  => esc_html__('Page Breadcrumb Color', 'fallow'),
        'output' => '.page .fallow-page-title-item nav ol li',
        'output_important' => true
      ),

      array(

        'id'     => 'banner_page_breadcrumb_link_color',
        'type'   => 'color',
        'title'  => esc_html__('Page Breadcrumb Link Color', 'fallow'),
        'output' => '.page .fallow-page-title-item nav ol li a',
        'output_important' => true
      ),


    )
  ));

  //
  // Header section
  CSF::createSection($post_prefix, array(
    'title'  => 'Header',
    'fields' => array(

      array(
        'id'      => 'header_style_override',
        'type'    => 'switcher',
        'title'   => esc_html__('Override Header', 'fallow'),
        'desc'    => esc_html__('If you want to override header style you can set ( YES / NO )', 'fallow'),
        'default' => false,
      ),

      array(
        'id'      => 'header_style',
        'type'    => 'image_select',
        'title'   => esc_html__('Header Style', 'fallow'),
        'desc'    => esc_html__('Select the header style which you want to show on your website.', 'fallow'),
        'options' => array(
          'style1'       => FALLOW_IMG . '/dash/header_style1.png',
          // 'style2'       => FALLOW_IMG . '/dash/header_style1.png',

        ),
        'default' => 'style1',
        'dependency' => array('header_style_override', '==', 'true'),
      ),


      array(
        'id'      => 'enable_button_override',
        'type'    => 'switcher',
        'title'   => esc_html__('Enable cta button', 'fallow'),
        'desc'    => esc_html__('If you want to override Button option you can set ( YES / NO )', 'fallow'),
        'default' => false,
      ),

      array(
        'type'    => 'subheading',
        'content' => esc_html__('Button Styling', 'fallow'),
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'     => 'button_one_text_color',
        'type'   => 'color',
        'title'  => esc_html__('Login Button Color', 'fallow'),
        'output' => '.page .fallow-btn-box .login-btn',
        'output_important' => true,
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'     => 'button_one_icon_text_color',
        'type'   => 'color',
        'title'  => esc_html__('Login Icon Color', 'fallow'),
        'output' => '.page .fallow-btn-box .login-btn i',
        'output_important' => true,
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'               => 'button_one_bg_color',
        'type'             => 'color',
        'output_important' => true,
        'title'            => esc_html__('Login Button Background Color', 'fallow'),
        'output'           => '.page .fallow-btn-box .login-btn',
        'output_mode'      => 'background-color',
        'dependency' => array('enable_button_override', '==', TRUE),
      ),



      array(
        'id'     => 'button_one_border',
        'type'   => 'border',
        'title'  => esc_html__('Login Button Border', 'fallow'),
        'output' => '.page .fallow-btn-box .login-btn',
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'     => 'button_cta_text_color',
        'type'   => 'color',
        'title'  => esc_html__('Cta Button Color', 'fallow'),
        'output' => '.page .fallow-btn-box .main-btn',
        'output_important' => true,
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'               => 'button_cta_bg_color',
        'type'             => 'color',
        'output_important' => true,
        'title'            => esc_html__('Cta Button Background Color', 'fallow'),
        'output'           => '.page .fallow-btn-box .main-btn',
        'output_mode'      => 'background-color',
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'     => 'button_cta_border',
        'type'   => 'border',
        'title'  => esc_html__('Cta Button Border', 'fallow'),
        'output' => 'body .fallow-btn-box .main-btn',
        'dependency' => array('enable_button_override', '==', TRUE),
      ),

      array(
        'id'      => 'logo',
        'type'    => 'upload',
        'title'   => esc_html__('Upload Main Logo', 'fallow'),
        'desc'    => esc_html__('Upload main logo width 180px and height 65px.', 'fallow'),
        'default' => '',
        'help'    => esc_html__('Note: Please use logo image max width: 250px and max height 100px.', 'fallow'),
      ),

      array(
        'id'      => 'sticky_logo',
        'type'    => 'upload',
        'title'   => esc_html__('Upload Sticky Logo', 'fallow'),
        'desc'    => esc_html__('Upload sticky logo width 180px and height 65px.', 'fallow'),
        'default' => '',
        'help'    => esc_html__('Note: Please use logo image max width: 250px and max height 100px.', 'fallow'),
      ),

      array(
        'type'    => 'subheading',
        'content' => esc_html__('Menu Box', 'fallow'),
      ),

      array(
        'id'          => 'menu_header_padding',
        'type'        => 'spacing',
        'title'   => esc_html__('Post Padding', 'fallow'),
        'output'      => '.page .fallow-header-area',
        'output_mode' => 'padding', // or margin, relative
        'default'     => array(
          'unit'      => 'px',
        ),
      ),

      array(
        'type'    => 'subheading',
        'content' => esc_html__('Menu Background', 'fallow'),
      ),

      array(
        'id'      => 'menu_bg',
        'type'    => 'background',
        'title'   => esc_html__('Menu Background', 'fallow'),
        'desc'    => esc_html__('Set the menu background form here.', 'fallow'),
        'default' => array(
          'image'      => '',
          'repeat'     => 'repeat',
          'position'   => 'center center',
          'attachment' => 'scroll',
          'size'       => '',
          'color'      => '',
        ),
        'output_important' => true,
        'output' => '.page header'
      ),

      array(
        'id'      => 'sticky_bg',
        'type'    => 'background',
        'title'   => esc_html__('Menu Sticky Background', 'fallow'),
        'desc'    => esc_html__('Set the menu sticky background form here.', 'fallow'),
        'default' => array(
          'image'      => '',
          'repeat'     => 'repeat',
          'position'   => 'center center',
          'attachment' => 'scroll',
          'size'       => '',
          'color'      => '',
        ),
        'output_important' => true,
        'output'      => '.page .fallow-header-area.sticky',
      ),

      array(
        'type'    => 'subheading',
        'content' => esc_html__('Menu Color', 'fallow'),
      ),

      array(
        'id'      => 'menu_color',
        'type'    => 'color',
        'title'   => esc_html__('Menu Color', 'fallow'),
        'desc'    => esc_html__('Set the menu color by color picker', 'fallow'),
        'default' => '',
        'output'  => '.page .fallow-header-main-menu ul > li > a',


      ),

      array(
        'id'      => 'menu_hover',
        'type'    => 'color',
        'title'   => esc_html__('Menu Hover Color', 'fallow'),
        'desc'    => esc_html__('Set the menu hover color by color picker', 'fallow'),
        'default' => '',

        'output'  => '.page .fallow-header-main-menu ul > li:hover > a',

      ),

      array(
        'type'    => 'subheading',
        'content' => esc_html__('Menu Sticky Color', 'fallow'),
      ),

      array(
        'id'      => 'menu_sticky__color',
        'type'    => 'color',
        'title'   => esc_html__('Menu Sticky Color', 'fallow'),
        'desc'    => esc_html__('Set the menu sticky color by color picker', 'fallow'),
        'default' => '',
        'output'  => '.page .sticky .fallow-header-main-menu ul > li > a',

      ),

      array(
        'id'      => 'menu_sticky_hover_color',
        'type'    => 'color',
        'title'   => esc_html__('Menu Sticky Hover Color', 'fallow'),
        'desc'    => esc_html__('Set the menu sticky color by color picker', 'fallow'),
        'default' => '',
        'output'  => '.page .sticky .fallow-header-main-menu ul > li:hover > a',

      ),

    )
  ));



  // newslatter
  CSF::createSection($post_prefix, array(
    'title'  => esc_html__('Footer', 'fallow'),
    'fields' => array(

      array(
        'id'      => 'newslatter_enable',
        'type'    => 'switcher',
        'title'   => esc_html__('Enable Newslatter', 'fallow'),
        'desc'    => esc_html__('If you want to override Newslatter Settings  you can set ( YES / NO )', 'fallow'),
        'default' => true,
      ),


      array(
        'id'      => 'override_footer',
        'type'    => 'switcher',
        'title'   => esc_html__('Override Footer style', 'fallow'),
        'desc'    => esc_html__('If you want to override Footer  Settings  you can set ( YES / NO )', 'fallow'),
        'default' => false,
      ),



      array(
        'id'      => 'footer_copyright__bg',
        'type'    => 'background',
        'title'   => esc_html__('Footer Background ', 'fallow'),
        'desc'    => esc_html__('Upload a new background image to set the footer background.', 'fallow'),
        'default' => array(
          'image'      => '',
          'repeat'     => 'no-repeat',
          'position'   => 'center center',
          'attachment' => 'scroll',
          'size'       => 'cover',
          'color'      => '',
        ),
        'output' => '.page .footer-area',

      ),

      array(
        'id'          => 'footer_sidebars_padding',
        'type'        => 'spacing',
        'title'   => esc_html__('Footer Padding', 'fallow'),
        'output'      => '.page .footer-area',
        'output_mode' => 'padding', // or margin, relative
        'default'     => array(
          'unit'      => 'px',
        ),
      ),

      array(
        'id'          => 'footer_sidebars_margin',
        'type'        => 'spacing',
        'title'   => esc_html__('Footer Margin', 'fallow'),
        'output'      => '.page .footer-area',
        'output_mode' => 'margin', // or margin, relative
        'default'     => array(
          'unit'      => 'px',
        ),
      ),

      array(
        'id'        => 'footer_topbar_layout',
        'type'      => 'image_select',
        'title'   => esc_html__('Footer Topbar Layout', 'fallow'),
        'options'   => array(

          'layout-1' => FALLOW_IMG . '/admin/footer/topbar.png',
          'layout-2' => FALLOW_IMG . '/admin/footer/topbar-mailchimp.png',


        ),
        'default'   => 'layout-1'
      ),

      array(
        'id'    => 'topbar_2_background_image',
        'type'  => 'background',
        'title' => esc_html__('Topbar Background', 'fallow'),
        'output' => '.page .footer-area .cta-wrapper,.page .footer-area .cta-mailchimp'
      ),

      array(
        'id'      => 'footer_topbar_title_color',
        'type'    => 'color',
        'title'   => esc_html__('Heading Color', 'fallow'),
        'desc'    => esc_html__('Set footer Top bar title color form here.', 'fallow'),
        'output' => '.page .footer-area .cta-wrapper h3, .page .footer-area .cta-mailchimp h3'
      ),

      array(
        'id'      => 'footer_topbar_button_color',
        'type'    => 'color',
        'title'   => esc_html__('Button Color', 'fallow'),
        'desc'    => esc_html__('Set footer Top bar content color form here.', 'fallow'),
        'output' => '.page .footer-area .cta-wrapper .btn',
        'dependency' => array('footer_topbar_layout', '==', 'layout-1'),
      ),


    )
  ));
  /*-----------------------------------
          CUSTOM CSS SECTION
      ------------------------------------*/
  CSF::createSection(
    $post_prefix,
    array(
      'title'  => esc_html__('Custom CSS', 'fallow'),
      'parent' => 'Page_Meta_Tab',
      'fields' => array(
        array(
          'type'    => 'subheading',
          'content' => esc_html__('Page Custom Css', 'fallow'),
        ),
        array(
          'id'       => 'page_cs_css',
          'type'     => 'code_editor',
          'desc'     => esc_html__('Write custom css here with css selector. this css will be applied in this page.', 'fallow'),
          'settings' => array(
            'mode'        => 'css',
            'theme'       => 'dracula',
            'tabSize'     => 4,
            'smartIndent' => true,
            'autocorrect' => true,
          ),
        ),
      )
    )
  );
}
