<?php

function addStyleSheets():void {
	wp_enqueue_style('style', get_template_directory_uri() . '/dist/app.css', [], 2, 'all');
}

add_action('wp_enqueue_scripts', 'addStyleSheets');

register_nav_menus(
	array(
		'main-menu' => 'primary',
	)
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );