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

add_theme_support('post-thumbnails');
add_post_type_support( 'projects', 'thumbnail' ); 

function create_posttype() {
	register_post_type( 'projects',
	  array(
		'labels' => array(
		  'name' => __( 'projects' ),
		  'singular_name' => __( 'project' )
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'projects'),
	  )
	);
  }
  add_action( 'init', 'create_posttype' );