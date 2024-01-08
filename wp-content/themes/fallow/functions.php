<?php
/*----------------------------------------------------
LOAD COMPOSER PSR - 4
-----------------------------------------------------*/
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) :
    require_once dirname(__FILE__) . '/vendor/autoload.php';
endif;

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME VERSION
-----------------------------------------------------*/
define('FALLOW_DEV_MODE', false);
if (FALLOW_DEV_MODE) {
    define('FALLOW_VERSION', time());
    define('FALLOW_SCRIPT_VAR', '.');
} else {
    define('FALLOW_VERSION', '1.4');
    define('FALLOW_SCRIPT_VAR', '.min.');
}


/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS URL
-----------------------------------------------------*/
define('FALLOW_THEME_URI', get_template_directory_uri());
define('FALLOW_IMG', FALLOW_THEME_URI . '/assets/images');
define('FALLOW_CSS', FALLOW_THEME_URI . '/assets/css');
define('FALLOW_JS', FALLOW_THEME_URI . '/assets/js');

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/
define('FALLOW_THEME_DIR', get_template_directory());
define('FALLOW_IMG_DIR', FALLOW_THEME_DIR . '/assets/images');
define('FALLOW_CSS_DIR', FALLOW_THEME_DIR . '/assets/css');
define('FALLOW_JS_DIR', FALLOW_THEME_DIR . '/assets/js');

// option prefix
define('FALLOW_OPTION_KEY', 'fallow_settings');
/*----------------------------------------------------
SET UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN
-----------------------------------------------------*/

// hooks for unyson framework
// ----------------------------------------------------------------------------------------
function fallow_framework_customizations_dir_rel_path($rel_path)
{

    return '/app/Core/Hook';
}
add_filter('fw_framework_customizations_dir_rel_path', 'fallow_framework_customizations_dir_rel_path');

if (!isset($content_width)) {
    $content_width = 800;
}
if (class_exists('Fallow\\Init')) :
    Fallow\Init::register_services();
endif;

/*----------------------------------------------------
UTILITY
-----------------------------------------------------*/
require_once FALLOW_THEME_DIR . '/app/Utility/global.php';
require_once FALLOW_THEME_DIR . '/app/Utility/Helpers.php';
require_once FALLOW_THEME_DIR . '/app/Utility/template-tags.php';

/*----------------------------------------------------
option init
-----------------------------------------------------*/
require_once FALLOW_THEME_DIR . '/app/Option/Init.php';
require_once FALLOW_THEME_DIR . '/woocommerce/woo-setup.php';

/*----------------------------------------------------
Remove core plugin after theme deactivated
-----------------------------------------------------*/

add_action('switch_theme', 'remove_plugin');

function remove_plugin()
{
    $essential_plugin = 'fallow-essential/fallow-essential.php';
    $core_plugin = 'fallow-core/index.php';

    if (in_array($essential_plugin, apply_filters('active_plugins', get_option('active_plugins'))) && in_array($core_plugin, apply_filters('active_plugins', get_option('active_plugins')))) {
        deactivate_plugins([$essential_plugin, $core_plugin]);
    }
}

/*----------------------------------------------------
Set permalink to post after theme activated
-----------------------------------------------------*/

add_action('after_setup_theme', 'reset_permalinks');
function reset_permalinks()
{
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
}
