<?php
/**
 * Functions and definitions
 *
 * Sets up the theme using core rock-star-core and provides some helper functions using rock-star-custon-functions.
 * Others are attached to action and
 * filter hooks in WordPress to change core functionality
 *
 * @package Catch Themes
 * @subpackage Rock Star
 * @since Rock Star 0.3
 */

//define theme version
if ( !defined( 'ROCK_STAR_THEME_VERSION' ) ) {
	$theme_data = wp_get_theme();

	define ( 'ROCK_STAR_THEME_VERSION', $theme_data->get( 'Version' ) );
}


function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '3.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );


wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');

require trailingslashit( get_template_directory() ) . 'inc/core.php';