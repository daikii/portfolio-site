<?php

/**
 * Custome function and definitions. Based on Mixfolio.
 * Author: daikii
 */

/* Google Font stylesheet */
function load_fonts() {
	wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Codystar|Gilda+Display|Mate+SC|Libre+Baskerville|Cinzel');
	wp_enqueue_style('et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');

/* custom favicon */
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');