<?php
/**
 * Prajkta Foundation theme bootstrap.
 *
 * @package prajkta
 */

defined( 'ABSPATH' ) || exit;

define( 'PF_VERSION', '1.0.0' );
define( 'PF_DIR', get_template_directory() );
define( 'PF_URI', get_template_directory_uri() );

require PF_DIR . '/inc/helpers.php';
require PF_DIR . '/inc/icons.php';
require PF_DIR . '/inc/menus.php';
require PF_DIR . '/inc/acf.php';
require PF_DIR . '/inc/setup-pages.php';

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 60, 'width' => 180, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary menu', 'prajkta' ),
	) );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'pf-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Source+Sans+3:ital,wght@0,400;0,600;1,400&display=swap', array(), null );
	wp_enqueue_style( 'pf-main', PF_URI . '/assets/css/main.css', array(), PF_VERSION );
	wp_enqueue_script( 'pf-main', PF_URI . '/assets/js/main.js', array(), PF_VERSION, array( 'strategy' => 'defer', 'in_footer' => true ) );
	wp_localize_script( 'pf-main', 'PF', array( 'thankYouUrl' => pf_url( 'thank-you' ) ) );
} );

add_filter( 'wp_resource_hints', function ( $urls, $relation ) {
	if ( 'preconnect' === $relation ) {
		$urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
	}
	return $urls;
}, 10, 2 );
