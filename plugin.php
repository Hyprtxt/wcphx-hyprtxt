<?php
/*
Plugin Name: WCPhx Hyprtxt
Plugin URI: http://hyprtxt.com/
Description: This is not a plugin, it's just a start.
Author: Taylor Young
Version: 1.1.2
Author URI: http://hyprtxt.com/
*/

// Version Bump

add_shortcode( 'boilerplate', function ( $atts ) {
	$html = '';
	return 'Boilerplate Shortcode';
});

// Add a body class
add_filter( 'body_class', function ( $classes ) {
	if ( is_front_page() ) :
		$classes[] = 'hyprtxt';
		return $classes;
	else :
		return $classes;
	endif;
});

require_once( plugin_dir_path( __FILE__ ) . '/includes/CPT.php' );
