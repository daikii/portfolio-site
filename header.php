<?php global $mixfolio_options;

/**
 * Custome header file. Child of Mixfolio theme.
 * Author: daikii
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Mixfolio
 */

?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body lang="en" <?php body_class(); ?>>
	<div id="page" class="hfeed">
		<header id="branding" role="banner" data-dropdown="dropdown">
			<div id="branding-inner">
				<div class="container">
					<div class="row" id="menu">
						<h1>
							<a href="<?php echo home_url( '/' ).'/about/'; ?>">
								About
							</a>
						</h1>
					</div>
					<div class="row" id="site-title">
						<hgroup>
							<h1>
								<a href="<?php echo home_url( '/' ); ?>">
									<?php bloginfo( 'name' );?>
								</a>
							</h1><!-- #site-title -->
						</hgroup>
					</div>
				</div><!-- .container -->
			</div><!-- #branding-inner -->
		</header><!-- #branding -->

		<div class="main-outer">
			<div id="main" class="row">
				<div class="twelve columns">
					<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ) : ?>
						<div class="header-image">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
							</a>
						</div><!-- .header-image -->
					<?php endif; // if ( ! empty( $header_image ) ); ?>