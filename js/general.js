/*
 * General event handlers and animations.
 * Author: daikii
 */

// shortcut for jQuery as $ cannot be used
var $j = jQuery.noConflict();

// current site URL
var url = window.location.href;

// for minimizing header when scrolled
var doc = document.documentElement; // grab element
var mark = 0; // marking for header minimize

$j(document).ready(function()
{
	// header slide in for the main menu
	if (url === 'http://daikii.com/')
	{
		// elementTransition.js
		$j('#branding-inner').addClass('pt-page-moveFromTopFade');
		// fade-in
		$j('#primary').hide().delay(800).fadeTo(1500, 1, 'swing');
	}
	else
	{
		// fade in the body contents when page loaded. give buffer to prevent unstability.
		$j('#primary').hide().delay(400).fadeTo(1500, 1, 'swing');
	}

	// NOTE fade out: loop all href and .attr()?
	// fade out when relocating page - image click
	$j('img.alignnone.size-medium').click(function() 
	{
		$j('#primary').addClass('pt-page-scaleDown');
	});

	// fade out when relocating page - header click
	$j('.container a').click(function() 
	{
		$j('#primary').addClass('pt-page-scaleDown');
	});

	// minimize header when scrolled
	$j(window).scroll(function()
	{
		// amount scrolled
		var top = window.pageYOffset || doc.scrollTop;

		if (mark === 0 && top > 100)
		{
			$j('#site-title.row').animate({marginTop:'0px'});
			$j('#branding').css('opacity', '0.8');
			mark = 1;
		}
		else if (mark === 1 && top < 85)
		{
			$j('#site-title.row').animate({marginTop:'120px'});
			$j('#branding').css('opacity', '1');
			mark = 0;
		}
	});

/*
	// fade in
	$j('#primary').css('opacity', '0');
	$j('#primary').hide().delay(400).fadeTo(1500, 1, 'swing');

	// fade out
	$j('#primary').fadeTo(400, 0, 'swing');

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
