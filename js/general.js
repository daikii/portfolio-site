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
	// give buffer to prevent jiggling
	//$j('#primary').css('opacity', '0');
	$j('#primary').hide().delay(300).fadeTo(1500, 1, 'swing');

	// NOTE fade out: loop all href and .attr()?
	// fade out when relocating page - images
	$j('img.alignnone.size-medium').click(function() 
	{
		$j('#primary').fadeTo(400, 0, 'swing');
	});

	// fade out when relocating page - header
	$j('.container a').click(function() 
	{
		$j('#primary').fadeTo(400, 0, 'swing');
	});

/*
	// page transition using elementTransition.css
	$j('#primary').addClass('et-wrapper et-rotate'); 
	$j('#primary').addClass('pt-page-scaleUp');

	// fade-in-down using Animate.css 
	$j('img.alignnone.size-medium').addClass('animated fadeInDown');
*/

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
