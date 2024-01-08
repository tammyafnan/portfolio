<?php

namespace Fallow\Core;

/**
 * Sidebar.
 */
class Footer
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action('widgets_init', array($this, 'widgets_init'));
    }

    /*
    *    Define the sidebar
    */
    public function widgets_init()
    {

        register_sidebar(
            array(
                'name'          => esc_html__('Footer One', 'fallow'),
                'id'            => 'footer-one',
                'description'   => esc_html__('Footer one Widget.', 'fallow'),
                'before_widget' => '<div id="%1$s" class="widget footer-1-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Two', 'fallow'),
                'id'            => 'footer-two',
                'description'   => esc_html__('Footer  widget.', 'fallow'),
                'before_widget' => '<div id="%1$s" class="widget footer-2-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Three', 'fallow'),
                'id'            => 'footer-three',
                'description'   => esc_html__('Footer widget.', 'fallow'),
                'before_widget' => '<div id="%1$s" class="widget footer-3-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__('Footer Four', 'fallow'),
                'id'            => 'footer-four',
                'description'   => esc_html__('Footer Last Column widget.', 'fallow'),
                'before_widget' => '<div id="%1$s" class="widget footer-4-widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
