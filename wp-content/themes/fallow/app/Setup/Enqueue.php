<?php

namespace Fallow\Setup;

/**
 * Enqueue.
 */
class Enqueue
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register()
	{
		add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
	}

	public function enqueue_scripts()
	{


		// stylesheets
		// ::::::::::::::::::::::::::::::::::::::::::
		if (!is_admin()) {
			// wp_enqueue_style() $handle, $src, $deps, $version

			// 3rd party css
			wp_enqueue_style('fallow-fonts', fallow_google_fonts_url(['Work Sans:300,400,500,600,700,900']), null, FALLOW_VERSION);
			wp_enqueue_style('fontawesome', FALLOW_CSS . '/font-awesome.min.css', null, FALLOW_VERSION);
			wp_enqueue_style('bootstrap', FALLOW_CSS . '/bootstrap.min.css', null, FALLOW_VERSION);
			wp_enqueue_style('animate', FALLOW_CSS . '/animate.min.css', null, FALLOW_VERSION);
			wp_enqueue_style('slick', FALLOW_CSS . '/slick.min.css', null, FALLOW_VERSION);
			wp_enqueue_style('magnific-popup', FALLOW_CSS . '/magnific-popup.css', null, FALLOW_VERSION);
			// theme css
			wp_enqueue_style('fallow-custom-animate', FALLOW_CSS . '/custom-animation.min.css', null, FALLOW_VERSION);
			wp_enqueue_style('fallow-default', FALLOW_CSS . '/default.min.css', null, time());
			wp_enqueue_style('fallow-style', FALLOW_CSS . '/style' . FALLOW_SCRIPT_VAR . 'css', null, time());
			wp_enqueue_style('fallow-blog', FALLOW_CSS . '/blog' . FALLOW_SCRIPT_VAR . 'css', null, time());
			wp_enqueue_style('fallow-responsive', FALLOW_CSS . '/responsive' . FALLOW_SCRIPT_VAR . 'css', null, time());
		}

		// javascripts
		// :::::::::::::::::::::::::::::::::::::::::::::::
		if (!is_admin()) {

			// 3rd party scripts
			wp_enqueue_script('popper', FALLOW_JS . '/popper.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('bootstrap', FALLOW_JS . '/bootstrap.min.js', array('jquery', 'popper'), FALLOW_VERSION, true);
			wp_enqueue_script('slick', FALLOW_JS . '/slick.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('magnific-popup', FALLOW_JS . '/jquery.magnific-popup.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('tweenmax', FALLOW_JS . '/TweenMax.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('waypoints', FALLOW_JS . '/waypoints.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('goodshare', FALLOW_JS . '/goodshare.min.js', array('jquery'), FALLOW_VERSION, true);
			wp_enqueue_script('wow', FALLOW_JS . '/wow.js', array('jquery'), FALLOW_VERSION, true);

			// theme scripts

			wp_enqueue_script('fallow-main', FALLOW_JS . '/main' . FALLOW_SCRIPT_VAR . 'js', array('jquery', 'bootstrap', 'magnific-popup', 'wow', 'waypoints', 'slick', 'tweenmax'), time(), true);
			// Load WordPress Comment js
			if (is_singular() && comments_open() && get_option('thread_comments')) {
				wp_enqueue_script('comment-reply');
			}
		}
	}
}
