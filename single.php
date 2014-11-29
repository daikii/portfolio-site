<?php
/**
 * The custom template for displaying all single posts.
 * Author: daikii
 *
 * @package Mixfolio
 */

get_header(); ?>

<?php
	$format = get_post_format();
	if ( false === $format )
		$format = 'standard';

	$post_class = 'standard';
	if ( 'image' == $format || 'gallery' == $format || 'video' == $format )
		$post_class = 'full-width';
?>

	<!-- full length regardless of format -->
	<div id="primary" class="full-width">
		<div id="content" role="main">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
				if (
					'image' != $format && 'gallery' != $format && 'video' != $format &&
					( comments_open() || '0' != get_comments_number() )
				)
					comments_template( '', true );
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>