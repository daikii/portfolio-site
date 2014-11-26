<?php

/**
 * Custome function and definitions. Based on Mixfolio.
 * Author: daikii
 */

function load_fonts() {
	wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Codystar|Gilda+Display|Mate+SC|Libre+Baskerville|Cinzel');
	wp_enqueue_style('et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');
