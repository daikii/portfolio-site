<?php

/**
 * Template Name: Front
 *
 * The custom template for displaying front page.
 * Author: daikii
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