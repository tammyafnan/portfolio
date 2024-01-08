<?php

// social
CSF::createSection(FALLOW_OPTION_KEY, array(
    'title'  => esc_html__('Social', 'fallow'),
    'icon'   => 'fa fa-share-alt',
    'fields' => array(
        array(
            'id'      => 'enable_blog_social',
            'type'    => 'switcher',
            'title'   => esc_html__('Enable Blog Social Share', 'fallow'),
            'desc'    => esc_html__('Set the Blog social share hide or not.', 'fallow'),
            'default' => false,
        ),

        array(
            'id'           => 'social_share',
            'type'         => 'group',
            'title'        => esc_html__('Add Social Bookmark', 'fallow'),
            'button_title' => esc_html__('Add New Bookmark', 'fallow'),
            'desc'         => esc_html__('Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'fallow'),
            'fields'       => array(

                array(
                    'id'      => 'bookmark_icon',
                    'type'    => 'icon',
                    'title'   => esc_html__('Social Icon', 'fallow'),
                    'desc'    => esc_html__('Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'fallow'),
                    'default' => 'fa fa-facebook'
                ),


                array(
                    'id'          => 'social_type',
                    'type'        => 'select',
                    'title'       => 'Select',
                    'placeholder' => esc_html__('Select an type', 'fallow'),
                    'options'     => fallow_social_share_list(),

                ),
            ),
        ),

        array(
            'id'      => 'enable_blog_social_link',
            'type'    => 'switcher',
            'title'   => esc_html__('Enable Blog Social Link', 'fallow'),
            'desc'    => esc_html__('Set the Blog social Link hide or not.', 'fallow'),
            'default' => false,
        ),

        array(
            'id'           => 'social_link',
            'type'         => 'group',
            'title'        => esc_html__('Add Social Link', 'fallow'),
            'button_title' => esc_html__('Add New Bookmark', 'fallow'),
            'dependency' => array('enable_blog_social_link', '==', true),
            'desc'         => esc_html__('Set the social bookmark icon and link here. Esay to use it just click the add icon button and search your social icon and set the url for the profile .', 'fallow'),
            'fields'       => array(

                array(
                    'id'      => 'bookmark_icon',
                    'type'    => 'icon',
                    'title'   => esc_html__('Social Icon', 'fallow'),
                    'desc'    => esc_html__('Set the social profile icon like ( facebook, twitter, linkedin, youtube ect. )', 'fallow'),
                    'default' => 'fa fa-facebook'
                ),

                array(
                    'id'      => 'bookmark_url',
                    'type'    => 'text',
                    'title'   => esc_html__('Profile Url', 'fallow'),
                    'desc'    => esc_html__('Type the social profile url lik http://facebook.com/yourpage. also you can add (facebook, twitter, linkedin, youtube etc.)', 'fallow'),
                    'default' => 'http://facebook.com/quomodosoft'
                ),

            ),
        ),


        array(
            'id'         => 'social_color',
            'type'       => 'color',
            'title'      => esc_html__('Footer Social Color', 'fallow'),
            'desc'       => esc_html__('Set the footer social bookmark color from here.', 'fallow'),
            'output'     => '.ab-social a'

        ),

        array(
            'id'         => 'social_hover_color',
            'type'       => 'color',
            'title'      => esc_html__('Footer Social Hover Color', 'fallow'),
            'desc'       => esc_html__('Set the footer social bookmark hover color from here.', 'fallow'),
            'output'     => '.ab-social a:hover'

        ),

    ),

));
