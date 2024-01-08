<?php

// footer a top-tab
CSF::createSection(FALLOW_OPTION_KEY, array(
    'id'    => 'footer_tab',                         // Set a unique slug-like ID
    'title' => esc_html__('Footer', 'fallow'),
    'icon'  => 'fa fa-cog',
));

// Footer
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'footer_tab', // The slug id of the parent section
    'title'  => esc_html__('Footer Color & Background', 'fallow'),
    'icon'   => 'fa fa-paint-brush',
    'fields' => array(
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Footer Settings', 'fallow'),
        ),



        array(
            'id'      => 'footer_style',
            'type'    => 'image_select',
            'title'   => esc_html__('Footer Style', 'fallow'),
            'desc'    => esc_html__('Select the Footer style which you want to show on your website.', 'fallow'),
            'options' => array(
                'style1'       => FALLOW_IMG . '/dash/footer_style1.jpg',
            ),
            'default' => 'style1',
        ),


        array(
            'id'      => 'footer_bg',
            'type'    => 'background',
            'title'   => esc_html__('Footer Background ', 'fallow'),
            'desc'    => esc_html__('Upload a new background image to set the footer background.', 'fallow'),
            'default' => array(
                'image'      => '',
                'repeat'     => 'no-repeat',
                'position'   => 'center center',
                'attachment' => 'scroll',
                'size'       => 'cover',
                'color'      => '#182044',
            ),
            'output' => '.footer-area',
            'dependency' => array('footer_style', '==', 'style1'),
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
                'color'      => '#182044',
            ),
            'output' => '.footer-area',

        ),


        array(
            'id'          => 'news_footer_sidebars_margin',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer Margin', 'fallow'),
            'output'      => '.footer-area',
            'output_mode' => 'margin', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),

        array(
            'id'          => 'news_footer_sidebars_padding',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer Padding', 'fallow'),
            'output'      => '.footer-area',
            'output_mode' => 'padding', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Widget Title', 'fallow'),
        ),
        array(
            'id'          => 'news_footer_widget_title_sidebars_margin',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer Widget Title Margin', 'fallow'),
            'output'      => '.footer-area .widget .widget-title',
            'output_mode' => 'margin', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),

        array(
            'id'          => 'news_footer_widget_title_sidebars_padding',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer Widget Title Padding', 'fallow'),
            'output'      => '.footer-area .widget .widget-title',
            'output_mode' => 'padding', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Widget Content', 'fallow'),
        ),
        array(
            'id'          => 'news_footer_widget_sidebars_padding',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer widget Padding', 'fallow'),
            'output'      => '.footer-area .widget',
            'output_mode' => 'padding', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),

        array(
            'id'          => 'news_footer_widget_sidebars_margin',
            'type'        => 'spacing',
            'title'   => esc_html__('Footer widget Margin', 'fallow'),
            'output'      => '.footer-area .widget',
            'output_mode' => 'margin', // or margin, relative
            'default'     => array(
                'unit'      => 'px',
            ),
        ),

        array(
            'id'     => 'footer_border_color',
            'type'   => 'border',
            'title'  => esc_html__('Border', 'fallow'),
            'output' => '.footer-area .widget',

        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Footer Text & Link Color', 'fallow'),
        ),
        array(
            'id'      => 'footer_widget_title_color',
            'type'    => 'color',
            'title'   => esc_html__('Widget Title Color', 'fallow'),
            'desc'    => esc_html__('Set footer widget title color form here.', 'fallow'),
            'output' => '.footer-area .widget .widget-title'
        ),

        array(
            'id'     => 'footer_widghet_title_border_color',
            'type'   => 'border',
            'title'  => esc_html__('Widget Title Border', 'fallow'),
            'output' => '.footer-area .widget .widget-title',

        ),
        array(
            'id'      => 'footer_widget_content_color',
            'type'    => 'color',
            'title'   => esc_html__('Widget content Color', 'fallow'),
            'desc'    => esc_html__('Set footer widget content color form here.', 'fallow'),
            'output' => '.footer-area .widget, .footer-area .comment-author-link a.url, .footer-area .recentcomments,.footer-area .tagcloud a, .footer-area .widget_archive ul li a, .footer-area .widget_categories ul li a, .footer-area .widget_meta ul li a,footer .widget ul li,select option,.footer-area .widget_pages ul li a,.footer-area .widget_rss li .rss-date,.footer-area .widget_rss li cite,.footer-area .widget_nav_menu ul li a '
        ),


        array(
            'id'      => 'footer_link_color',
            'type'    => 'color',
            'title'   => esc_html__('Footer links color', 'fallow'),
            'desc'    => esc_html__('Set the footer area link color', 'fallow'),
            'output' => '.quomodo-body-innner-content .footer-area .single-blog-post a ,.quomodo-body-innner-content .footer-area .tagcloud a,.quomodo-body-innner-content .footer-area .widget a,.quomodo-body-innner-content .footer-area .widget ul li a.url, .quomodo-body-innner-content .footer-area .widget ul li a.rsswidget'
        ),

        array(
            'id'      => 'footer_link_hover',
            'type'    => 'color',
            'title'   => esc_html__('Footer links Hover color', 'fallow'),
            'desc'    => esc_html__('Set the footer area link hover color', 'fallow'),
            'output'  => '.quomodo-body-innner-content .footer-area .single-blog-post a:hover,.quomodo-body-innner-content .footer-area .tagcloud a:hover, .quomodo-body-innner-content .footer-area .widget a:hover, .quomodo-body-innner-content .footer-area .widget ul li a.url:hover,.quomodo-body-innner-content .footer-area .widget ul li a.rsswidget:hover'
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Copyright & Back Button', 'fallow'),
        ),

        array(
            'id'      => 'copyright_padding_top',
            'type'    => 'slider',
            'title'   => esc_html__('Copyright Padding top', 'fallow'),
            'min'     => 0,
            'max'     => 300,
            'step'    => 1,
            'unit'    => 'px',

        ),

        array(
            'id'      => 'copyright_padding_bottom',
            'type'    => 'slider',
            'title'   => esc_html__('Copyright Padding Bottom', 'fallow'),
            'min'     => 0,
            'max'     => 300,
            'step'    => 1,
            'unit'    => 'px',
        ),

        array(
            'id'      => 'copyright_margin_top',
            'type'    => 'slider',
            'title'   => esc_html__('Copyright margin top', 'fallow'),
            'min'     => 0,
            'max'     => 300,
            'step'    => 1,
            'unit'    => 'px',

        ),

        array(
            'id'      => 'footer_copyright_color',
            'type'    => 'color',
            'title'   => esc_html__('Copyright Text Color', 'fallow'),
            'desc'    => esc_html__('Set footer copyright text color form here.', 'fallow'),
            'output'  => '.footer-area .copyright-text p'
        ),

        array(
            'id'      => 'footer_copyright_link_color',
            'type'    => 'color',
            'title'   => esc_html__('Copyright Link Color', 'fallow'),
            'desc'    => esc_html__('Set footer copyright link color form here.', 'fallow'),
            'output'  => '.footer-area .copyright-text p a'
        ),

        array(

            'id'                    => 'copyright_background_color',
            'type'                  => 'background',
            'title'                 => esc_html__('Copyright Background', 'fallow'),
            'background_gradient'   => true,
            'background_origin'     => true,
            'background_clip'       => true,
            'background_blend_mode' => true,
            'default'               => array(
                'background-color'              => '',
                'background-gradient-color'     => '',
                'background-gradient-direction' => 'to bottom',
                'background-size'               => 'cover',
                'background-position'           => 'center center',
                'background-repeat'             => 'repeat',
            ),
            'output' => '.footer-area .copyright-text p'
        ),

        array(
            'id'     => 'footer_copyright_border',
            'type'   => 'border',
            'title'   => esc_html__('Copyright Border', 'fallow'),
            'output'  => '.footer-area .copyright-text'
        ),

        // back button
        array(
            'id'      => 'footer_back_top_button',
            'type'    => 'switcher',
            'title'   => esc_html__('Enable Back to Button', 'fallow'),
            'default' => true
        ),
        array(
            'id'     => 'footer_copyright_back_button',
            'type'   => 'border',
            'title'  => esc_html__('Back Button Border', 'fallow'),
            'output' => '.back-to-top'
        ),
        array(
            'id'      => 'footer_copyright_back_button_color',
            'type'    => 'color',
            'title'   => esc_html__('Back Button Color', 'fallow'),
            'desc'    => esc_html__('Set footer Back Button icon color form here.', 'fallow'),
            'output' => 'body .back-to-top a',
            'output_mode' => 'background-color'
        ),
        array(
            'id'      => 'footer_copyright_icon_color',
            'type'    => 'color',
            'title'   => esc_html__('Back Button Icon Color', 'fallow'),
            'desc'    => esc_html__('Set footer Back Button icon color form here.', 'fallow'),
            'output' => '.back-to-top a i'
        ),

    ),

));

// copyright
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'footer_tab', // The slug id of the parent section
    'title'  => esc_html__('Footer Copyright && Buttons', 'fallow'),
    'icon'   => 'fa fa-copyright',
    'fields' => array(

        array(
            'id'           => 'footer_multi_buttons',
            'type'         => 'group',
            'title'        => esc_html__('Footer Button', 'fallow'),
            'button_title' => esc_html__('Add New Item', 'fallow'),

            'fields'       => array(

                array(
                    'id'      => 'icon',
                    'type'    => 'icon',
                    'title'   => esc_html__('Icon ', 'fallow'),
                    'desc'    => esc_html__('Set the icon ', 'fallow'),
                    'default' => 'fal fa-envelope'
                ),

                array(
                    'id'      => 'link',
                    'type'    => 'text',
                    'title'   => esc_html__('Link', 'fallow'),
                ),

                array(
                    'id'      => 'content',
                    'type'    => 'text',
                    'title'   => esc_html__('Label', 'fallow'),

                ),

            ),
        ),

        array(
            'id'       => 'copyright_text',
            'type'     => 'wp_editor',
            'title'    => esc_html__('Footer Copyright', 'fallow'),
            'desc'     => esc_html__('Set the footer copyright text', 'fallow'),
            'settings' => array(
                'textarea_rows' => 10,
                'tinymce'       => true,
                'media_buttons' => false,
            ),
            'default' => 'Copryright &copy; QuomodoTheme All Right Reserved.',
        ),

    ),

));
