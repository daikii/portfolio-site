/*
 * General event handlers and animations.
 * Author: daikii
 */

// shortcut for jQuery as $ cannot be used
var $j = jQuery.noConflict();

// front page effects
$j(document).ready(function()
{
	// fade in the body contents when page loaded
	$j('.entry-content').css('display', 'none');
	$j('.entry-content').fadeIn(1500);

	// image fade when cursor hovered
	$j('img.alignnone.size-medium').hover(
		function()
		{
			$j(this).fadeTo(500, 0.3);
		},
		function() 
		{
			$j(this).fadeTo(500, 1);
		}
	);
}); 
