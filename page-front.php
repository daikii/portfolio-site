<?php

/**
 * Template Name: Front
 *
 * Custome front page file.
 * Author: daikii
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mixfolio
 */

get_header(); ?>

		<div id="primary" class="full-width">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'front' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>