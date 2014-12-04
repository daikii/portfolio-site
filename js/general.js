/*
 * General event handlers and animations.
 * Author: daikii
 */

// shortcut for jQuery as $ cannot be used
var $j = jQuery.noConflict();

// current site URL
var url = window.location.href;

$j(document).ready(function()
{
	// header slide in for the main menu
	if (url === 'http://daikii.com/')
	{
		// elementTransition.js
		$j('div#branding-inner').addClass('pt-page-moveFromTopFade');
		// fade in
		$j('#primary').hide().delay(800).fadeTo(1500, 1, 'swing');
	}
	else
	{
		// fade in the body contents when page loaded. give buffer to prevent jiggling.
		//$j('#primary').css('opacity', '0');
		$j('#primary').hide().delay(400).fadeTo(1500, 1, 'swing');
	}

	// NOTE fade out: loop all href and .attr()?
	// fade out when relocating page - image click
	$j('img.alignnone.size-medium').click(function() 
	{
		$j('#primary').addClass('pt-page-scaleDown');
		//$j('#primary').fadeTo(400, 0, 'swing');
	});

	// fade out when relocating page - header click
	$j('.container a').click(function() 
	{
		$j('#primary').addClass('pt-page-scaleDown');
		//$j('#primary').fadeTo(400, 0, 'swing');
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
