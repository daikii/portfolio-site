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
	$j('#primary').css('display', 'none');
	$j('#primary').fadeIn(1500);

/*
	// fade out when relocating page
	$j('img.alignnone.size-medium').click(function() 
	{
		$j('#primary').fadeTo(800, 0.3);
	});
*/

	// Animate.css fade-in-down
	//$j('img.alignnone.size-medium').addClass('animated fadeInDown');

	// image fade when cursor hovered
	$j('img.alignnone.size-medium').hover(
		function()
		{
			$j(this).fadeTo(300, 0.5);
		},
		function()
		{
			$j(this).fadeTo(300, 1);
		}
	);
}); 
