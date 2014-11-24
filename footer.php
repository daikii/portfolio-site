<?php global $mixfolio_options;

/**
 * Custome header file. Child of Mixfolio theme.
 * Author: daikii
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Mixfolio
 */

?>
				</div><!-- .twelve -->
			</div><!-- #main -->
		</div><!-- .main-outer -->

		<footer id="colophon" class="row" role="contentinfo">
			<h2>
				TESTTTT
			</h2>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php if ( isset( $mixfolio_options[ 'mixfolio_display_contact_information' ] ) && 'on' == $mixfolio_options[ 'mixfolio_display_contact_information' ] ) : ?>
		<div id="contact" class="reveal-modal">
			<h2>
				<?php _e( 'Contact', 'mixfolio' ); ?>
			</h2>
			<?php if ( isset( $mixfolio_options[ 'mixfolio_contact_details' ] ) && '' != $mixfolio_options[ 'mixfolio_contact_details' ] ) : ?>
				<div class="lead">
					<?php echo $mixfolio_options[ 'mixfolio_contact_details' ]; // HTML Allowed ?>
				</div><!-- .lead -->
			<?php endif; ?>
			<?php if ( isset( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) && '' != $mixfolio_options[ 'mixfolio_contact_email_address' ] ) : ?>
				<div class="lead">
					<a href="mailto:<?php echo antispambot( sanitize_email( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) ); ?>"><?php echo antispambot( sanitize_email( $mixfolio_options[ 'mixfolio_contact_email_address' ] ) ); ?></a>
				</div><!-- .lead -->
			<?php endif; ?>
			<a class="close-reveal-modal">&#215;</a>
		</div><!-- .contact -->
	<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>