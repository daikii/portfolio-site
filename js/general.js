/*
 * General animations.
 * Author: daikii
 */

// shortcut for jQuery as $ cannot be used
var $j = jQuery.noConflict();

// fade in the body contents when page loaded
$j(document).ready(function()
{
	/*! Fades in whole page on load */
	$j('.entry-content').css('display', 'none');
	$j('.entry-content').fadeIn(500);
}); 