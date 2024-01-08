<?php

// header a top-tab
CSF::createSection(FALLOW_OPTION_KEY, array(
    'id'    => 'header_tab', // Set a unique slug-like ID
    'title'   => esc_html__('Header', 'fallow'),
    'icon'     => 'fa fa-home',
));


// Header
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'header_tab', // The slug id of the parent section
    'title'   => esc_html__('Header', 'fallow'),
    'icon'   => 'fa fa-credit-card',
    'fields' => array(


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
        ),

        array(
            'id'      => 'enable_sticky_header',
            'type'    => 'switcher',
            'title'   => esc_html__('Sticky Header', 'fallow'),
            'desc'    => esc_html__('If you want to enable or disable sticky Header you can set ( YES / NO )', 'fallow'),
            'default' => true,

        ),

        array(
            'id'      => 'enable_transparent_header',
            'type'    => 'switcher',
            'title'   => esc_html__('Transparent Header Disable', 'fallow'),
            'desc'    => esc_html__('If you want to enable or disable Transparent Header you can set ( YES / NO )', 'fallow'),
            'default' => false,

        ),

        //cta
        array(
            'id'      => 'enable_cta',
            'type'    => 'switcher',
            'title'   => esc_html__('Enable CTA', 'fallow'),
            'desc'    => esc_html__('If you want to enable or disable button you can set ( YES / NO )', 'fallow'),
            'default' => true,
        ),

        array(
            'id'         => 'cta_text',
            'type'       => 'text',
            'title'      => esc_html__('Cta lebel', 'fallow'),
            'desc'       => esc_html__('Set the Button text.', 'fallow'),
            'default'    => esc_html__('Let’s Talk', 'fallow'),
            'dependency' => array('header_style', '==', 'style1'),
        ),


        array(
            'id'         => 'cta_link',
            'type'       => 'text',
            'title'      => esc_html__('Cta url', 'fallow'),
            'desc'       => esc_html__('Set the support url.', 'fallow'),
            'default'    => '#',
            'dependency' => array('enable_cta', '==', 'true'),
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Button Styling', 'fallow'),
        ),

        array(
            'id'     => 'button_one_text_color',
            'type'   => 'color',
            'title'  => esc_html__('Login Button Color', 'fallow'),
            'output' => 'body .fallow-btn-box .login-btn',
            'output_important' => true,
        ),

        array(
            'id'     => 'button_one_icon_text_color',
            'type'   => 'color',
            'title'  => esc_html__('Login Icon Color', 'fallow'),
            'output' => 'body .fallow-btn-box .login-btn i',
            'output_important' => true,
        ),

        array(
            'id'               => 'button_one_bg_color',
            'type'             => 'color',
            'output_important' => true,
            'title'            => esc_html__('Login Button Background Color', 'fallow'),
            'output'           => 'body .fallow-btn-box .login-btn',
            'output_mode'      => 'background-color'
        ),



        array(
            'id'     => 'button_one_border',
            'type'   => 'border',
            'title'  => esc_html__('Login Button Border', 'fallow'),
            'output' => 'body .fallow-btn-box .login-btn'
        ),

        // 

        array(
            'id'     => 'button_cta_text_color',
            'type'   => 'color',
            'title'  => esc_html__('Cta Button Color', 'fallow'),
            'output' => 'body .fallow-btn-box .main-btn',
            'output_important' => true,
        ),

        array(
            'id'               => 'button_cta_bg_color',
            'type'             => 'color',
            'output_important' => true,
            'title'            => esc_html__('Cta Button Background Color', 'fallow'),
            'output'           => 'body .fallow-btn-box .main-btn',
            'output_mode'      => 'background-color'
        ),

        array(
            'id'     => 'button_cta_border',
            'type'   => 'border',
            'title'  => esc_html__('Cta Button Border', 'fallow'),
            'output' => 'body .fallow-btn-box .main-btn'
        ),


    )
));

// Main menu
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'header_tab', // The slug id of the parent section
    'title'      => esc_html__('Main Menu', 'fallow'),
    'icon'   => 'fa fa-sitemap',
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Menu Box', 'fallow'),
        ),

        array(
            'id'          => 'menu_header_padding',
            'type'        => 'spacing',
            'title'   => esc_html__('Post Padding', 'fallow'),
            'output'      => 'body .fallow-header-area',
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
            'output' => 'header'
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
            'output'      => 'body .fallow-header-area.sticky',
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
            'output'  => 'body .fallow-header-main-menu ul > li > a',


        ),

        array(
            'id'      => 'menu_hover',
            'type'    => 'color',
            'title'   => esc_html__('Menu Hover Color', 'fallow'),
            'desc'    => esc_html__('Set the menu hover color by color picker', 'fallow'),
            'default' => '',

            'output'  => 'body .fallow-header-main-menu ul > li:hover > a',

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
            'output'  => '.sticky .fallow-header-main-menu ul > li > a',

        ),

        array(
            'id'      => 'menu_sticky_hover_color',
            'type'    => 'color',
            'title'   => esc_html__('Menu Sticky Hover Color', 'fallow'),
            'desc'    => esc_html__('Set the menu sticky color by color picker', 'fallow'),
            'default' => '',
            'output'  => '.sticky .fallow-header-main-menu ul > li:hover > a',

        ),

    )
));

//
// Mobile menu
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'header_tab', // The slug id of the parent section
    'title'  => 'Offcanvas',
    'icon'   => 'fa fa-mobile',
    'fields' => array(

        array(
            'id'           => 'offcanvas_footer_content',
            'type'         => 'group',
            'title'        => esc_html__('Footer Content', 'fallow'),
            'button_title' => esc_html__('Add New Item', 'fallow'),

            'desc'         => esc_html__('Set the footer content. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'fallow'),
            'fields'       => array(

                array(
                    'id'      => 'icon',
                    'type'    => 'icon',
                    'title'   => esc_html__('Icon', 'fallow'),
                    'desc'    => esc_html__('Set the  profile icon like ( location email phone ect. )', 'fallow'),
                    'default' => 'fal fa-envelope'
                ),

                array(
                    'id'          => 'link_type',
                    'type'        => 'select',
                    'title'       => 'Select',
                    'placeholder' => 'Link Type',
                    'options'     => array(
                        'phone' => 'Phone',
                        'email' => 'Email',
                        'url'   => 'Url',
                        ''      => 'Unknown',
                    ),
                    'default'     => 'url'
                ),

                array(
                    'id'      => 'link',
                    'type'    => 'text',
                    'title'   => esc_html__('Link ?', 'fallow'),
                ),

                array(
                    'id'      => 'content',
                    'type'    => 'textarea',
                    'title'   => esc_html__('Content', 'fallow'),

                ),

            ),
        ),

        array(
            'id'      => 'mobile_menu_color',
            'type'    => 'color',
            'title'   => esc_html__('Menu Color', 'fallow'),
            'desc'    => esc_html__('Set the menu color by color picker', 'fallow'),
            'output' => '.offcanvas_main_menu li a'

        ),
        array(
            'id'      => 'mobile_menu_hover',
            'type'    => 'color',
            'title'   => esc_html__('Menu Hover Color', 'fallow'),
            'desc'    => esc_html__('Set the menu item active &hover color by color picker', 'fallow'),
            'output' => '.offcanvas_main_menu li:hover > a'


        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Mobile Menu Hamberger Color & Background', 'fallow'),
        ),

        array(
            'id'      => 'mobile_menu_hamberger_bgcolor',
            'type'    => 'color',
            'title'   => esc_html__('Menu Hambarger Background', 'fallow'),
            'desc'    => esc_html__('Set the menu hamberger background color by color picker', 'fallow'),
            'output' => '.fallow-btn-box .toggle-btn i',
            'output_mode' => 'background-color'


        ),

        array(
            'id'      => 'mobile_menu_hamberger_color',
            'type'    => 'color',
            'title'   => esc_html__('Menu Hambarger Color', 'fallow'),
            'desc'    => esc_html__('Set the menu hamberger color by color picker', 'fallow'),
            'output' => '.fallow-btn-box .toggle-btn i',
        ),

        array(
            'id'      => 'mobile_sticky_menu_hamberger_color',
            'type'    => 'color',
            'title'   => esc_html__('Sticky Menu Hambarger Color', 'fallow'),
            'desc'    => esc_html__('Set the menu hamberger color by color picker', 'fallow'),
            'output' => '.sticky .fallow-btn-box .toggle-btn i',
        ),


    )
));


// Logo section
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'header_tab', // The slug id of the parent section
    'title'  => 'Logos',
    'icon'   => 'fa fa-file-image-o',
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Main Image Logo', 'fallow'),
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
            'id'      => 'offcanvas_logo',
            'type'    => 'upload',
            'title'   => esc_html__('Upload offcanvas Logo', 'fallow'),
            'desc'    => esc_html__('Upload sticky offcanvas width 180px and height 65px.', 'fallow'),
            'default' => '',
            'help'    => esc_html__('Note: Please use offcanvas image max width: 250px and max height 100px.', 'fallow'),
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Text Logo Color', 'fallow'),
        ),

        array(
            'id'      => 'logo_color',
            'type'    => 'color',
            'title'   => esc_html__('Text Logo Color', 'fallow'),
            'desc'    => esc_html__('Set the text logo color by color picker.', 'fallow'),
            'output' => '.fallow-logo-box a',
            'output_important' => true,
        ),

    )
));
