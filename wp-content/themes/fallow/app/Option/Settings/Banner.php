<?php
// Blog
// footer a top-tab
CSF::createSection(FALLOW_OPTION_KEY, array(
    'id'    => 'banner_tab', // Set a unique slug-like ID
    'title'  => esc_html__('Banner', 'fallow'),
    'icon'     => 'fa fa-cog',
));
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'banner_tab', // The slug id of the parent section
    'icon'   => 'fa fa-book',
    'title'  => esc_html__('Content Settings', 'fallow'),
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Blog Banner', 'fallow'),
        ),

        array(
            'id'      => 'blog_banner_show',
            'type'    => 'switcher',
            'title'   => esc_html__('Blog Banner Show', 'fallow'),
            'default' => true
        ),


        array(
            'id'      => 'blog_show_breadcrumb',
            'type'    => 'switcher',
            'title'   => esc_html__('Blog Breadcrumb', 'fallow'),
            'default' => true
        ),

        array(
            'id'      => 'banner_blog_title',
            'type'    => 'text',
            'title'   => esc_html__('Blog title', 'fallow'),

        ),

        array(

            'id'      => 'banner_blog_image',
            'type'    => 'background',
            'title'   => esc_html__('Upload Background', 'fallow'),
            'desc'    => esc_html__('Upload main Image width 1200px and height 400px.', 'fallow'),
            'output' => '.fallow-page-title-area'
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Blog Post / Details', 'fallow'),
        ),

        array(
            'id'      => 'blog_single_banner_show',
            'type'    => 'switcher',
            'title'   => esc_html__('Banner Show', 'fallow'),
            'default' => true
        ),


        array(
            'id'      => 'blog_single_show_breadcrumb',
            'type'    => 'switcher',
            'title'   => esc_html__('Post Breadcrumb', 'fallow'),
            'default' => true
        ),

        array(

            'id'      => 'banner_single_blog_image',
            'type'    => 'background',
            'title'   => esc_html__('Upload Background', 'fallow'),
            'desc'    => esc_html__('Upload main Image width 1200px and height 400px.', 'fallow'),
            'output' => '.single-post .fallow-page-title-area'
        ),



        array(
            'type'    => 'subheading',
            'content' => esc_html__('Page Banner', 'fallow'),
        ),

        array(

            'id'      => 'page_banner_show',
            'type'    => 'switcher',
            'title'   => esc_html__('Page Banner Show ', 'fallow'),
            'default' => true
        ),

        array(
            'id'      => 'page_show_breadcrumb',
            'type'    => 'switcher',
            'title'   => esc_html__('Page Breadcrumb', 'fallow'),
            'default' => true
        ),

        array(

            'id'      => 'banner_page_title',
            'type'    => 'text',
            'title'   => esc_html__('Page Title', 'fallow'),
            'default' => ''
        ),

        array(

            'id'      => 'banner_page_image',
            'type'    => 'background',
            'title'   => esc_html__('Upload Background', 'fallow'),
            'desc'    => esc_html__('Upload main Image width 1200px and height 400px.', 'fallow'),
            'output' => '.page .fallow-page-title-area'
        ),



    )
));
CSF::createSection(FALLOW_OPTION_KEY, array(
    'parent' => 'banner_tab', // The slug id of the parent section
    'icon'   => 'fa fa-book',
    'title'  => esc_html__('Style', 'fallow'),
    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Blog Banner', 'fallow'),
        ),

        array(
            'id'    => 'banner_blog_title_color',
            'type'  => 'color',
            'title' => esc_html__('Title Color', 'fallow'),
            'output' => '.fallow-page-title-item .title, .fallow-page-title-item span'
        ),

        array(
            'id'     => 'banner_blog_breadcrumb_color',
            'type'   => 'color',
            'title'  => esc_html__('Breadcrumb Color', 'fallow'),
            'output' => '.fallow-page-title-item nav ol li, .fallow-page-title-item nav ol li a',
            'output_important' => true
        ),

        array(
            'id'     => 'banner_blog_breadcrumb_icon_color',
            'type'   => 'color',
            'title'  => esc_html__('Breadcrumb Icon Color', 'fallow'),
            'output' => '.fallow-page-title-item nav ol li i',
            'output_important' => true
        ),


        array(
            'type'    => 'subheading',
            'content' => esc_html__('Blog Post', 'fallow'),
        ),

        array(
            'id'    => 'banner_post_title_color',
            'type'  => 'color',
            'title' => esc_html__('Title Color', 'fallow'),
            'output' => '.single-post .fallow-page-title-item .title, .single-post .fallow-page-title-item span'
        ),

        array(
            'id'     => 'banner_post_meta__color',
            'type'   => 'color',
            'title'  => esc_html__('Meta Color', 'fallow'),
            'output' => '.single .fallow-page-title-area .bp-meta a'
        ),

        array(
            'id'     => 'banner_post_meta_icon_color',
            'type'   => 'color',
            'title'  => esc_html__('Meta Color Icon', 'fallow'),
            'output' => '.single .fallow-page-title-area .bp-meta a i'
        ),

        array(
            'id'     => 'banner_post_breadcrumb_color',
            'type'   => 'color',
            'title'  => esc_html__('Breadcrumb ', 'fallow'),
            'output' => '.single .fallow-page-title-item nav ol li a,.single .fallow-page-title-item nav ol li'
        ),

        array(
            'id'    => 'banner_post_breadcrumb_hover_color',
            'type'  => 'color',
            'title' => esc_html__('Breadcrumb Hover', 'fallow'),
            'output' => '.single .fallow-page-title-item nav ol li:hover a'
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__('Page Banner', 'fallow'),
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
            'output' => '.page .fallow-page-title-item nav ol li, .page .fallow-page-title-item nav ol li a',
            'output_important' => true
        ),

        array(
            'id'               => 'banner_page_breadcrumb_hover_color',
            'type'             => 'color',
            'title'            => esc_html__('Breadcrumb Hover Color', 'fallow'),
            'output'           => '.page .fallow-page-title-item nav ol li:hover a',
            'output_important' => true
        ),


    )
));
