<?php

use Fallow\Core\WalkerNav;

wp_nav_menu([
	'menu'            => 'primary',
	'theme_location'  => 'primary',
	'container'       => false,
	'menu_id'         => '',
	'menu_class'      => 'offcanvas_main_menu',
	'depth'           => 4,
	'walker'          => new WalkerNav(),
	'fallback_cb'     => '\Fallow\Core\WalkerNav::fallback',
]);
