<?php

namespace Fallow\Core\Hook;

/**
 * demo import.
 */
class Demo
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {

        add_filter('fw:ext:backups-demo:demos', [$this, 'backups_demos']);
    }

    function backups_demos($demos)
    {

        $demo_content_installer     = 'https://tf.quomodosoft.com/fallow/demo-content';


        $demos_array             = array(
            'demo_1'             => array(
                'title'             => esc_html__('MultiPage Product Designer', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_1.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'demo_2'             => array(
                'title'             => esc_html__('MultiPage Graphic Designer', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_2.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'demo_3'             => array(
                'title'             => esc_html__('MultiPage Developer Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_3.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'demo_4'             => array(
                'title'             => esc_html__('MultiPage Teacher Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_4.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'demo_5'             => array(
                'title'             => esc_html__('MultiPage Photograher Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_5.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'demo_6'             => array(
                'title'             => esc_html__('MultiPage Lawyer Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_6.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),
            // Single portfolio demo 

            'single_demo_1'             => array(
                'title'             => esc_html__('Onepage Product Designer', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_1.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'single_demo_2'             => array(
                'title'             => esc_html__('Onepage Graphic Designer', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_2.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'single_demo_3'             => array(
                'title'             => esc_html__('Onepage Developer Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_3.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'single_demo_4'             => array(
                'title'             => esc_html__('Onepage Teacher Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_4.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'single_demo_5'             => array(
                'title'             => esc_html__('Onepage Photograher Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_5.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),

            'single_demo_6'             => array(
                'title'             => esc_html__('Onepage Lawyer Portfolio', 'fallow'),
                'screenshot'     => esc_url($demo_content_installer) . '/default/screenshot_6.png',
                'preview_link'     => esc_url('https://themeforest.net/user/quomodotheme/portfolio'),
            ),



        );


        $download_url             = esc_url($demo_content_installer) . '/download.php';

        foreach ($demos_array as $id => $data) {
            $demo         = new \FW_Ext_Backups_Demo($id, 'piecemeal', array(
                'url'         => $download_url,
                'file_id'     => $id,
            ));
            $demo->set_title($data['title']);
            $demo->set_screenshot($data['screenshot']);
            $demo->set_preview_link($data['preview_link']);
            $demos[$demo->get_id()] = $demo;
            unset($demo);
        }

        return $demos;
    }
}
