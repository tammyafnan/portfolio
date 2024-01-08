<?php

CSF::createSection(FALLOW_OPTION_KEY, array(
    'icon'   => 'fa fa-book',
    'title'  => esc_html__('General', 'fallow'),
    'fields' => array(

        array(
            'id'         => 'general_blog_title',
            'type'       => 'text',
            'title'      => esc_html__('Blog Title', 'fallow'),
            'desc'       => esc_html__('Set global blog title', 'fallow'),

        ),

        array(
            'id'         => 'general_breadcrumb_limit',
            'type'       => 'number',
            'title'      => esc_html__('Breadcrumb limit', 'fallow'),
            'desc'       => esc_html__('Set the breadcrump text limit', 'fallow'),
            'default'    => '50',
        ),

        array(
            'id'      => 'general_breadcrumb_post_title_show',
            'type'    => 'switcher',
            'title'   => esc_html__('Breadcrumb Post Title ?', 'fallow'),
            'default' => false
        ),

        array(
            'id'      => 'general_breadcrumb_page_title_show',
            'type'    => 'switcher',
            'title'   => esc_html__('Breadcrumb Page Title ?', 'fallow'),
            'default' => false
        ),

    )
));


CSF::createSection(FALLOW_OPTION_KEY, array(
    'icon'   => 'fa fa-cart',
    'title'  => esc_html__('Shop', 'fallow'),
    'fields' => array(

        array(
            'id'         => 'shop_product_columns',
            'type'       => 'text',
            'title'      => esc_html__('Product Columns', 'fallow'),


        ),

        array(
            'id'      => 'shop_product_sidebar_enable',
            'type'    => 'switcher',
            'title'   => esc_html__('Shop Sidebar?', 'fallow'),
            'default' => false
        ),

        array(
            'id'          => 'shop_sidebar',
            'type'        => 'select',
            'title'       => esc_html__('Sidebar', 'fallow'),
            'placeholder' => 'Select an option',
            'options'     => array(
                'no' => esc_html__('No sidebar', 'fallow'),
                'left' => esc_html__('Left Sidebar', 'fallow'),
                'right' => esc_html__('Right Sidebar', 'fallow'),
            ),
            'default'     => '3'
        ),



    )
));
