<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Developer_Portfolio
 */

?>
	</main><!-- /.main -->

	<?php
	$footer_text = carbon_get_theme_option( 'gk_footer_text' );
	$footer_copyright = carbon_get_theme_option( 'gk_footer_copyright' );
	?>

	<footer class="footer">
		<div class="footer__content">
			<?php if ( !empty( $footer_text ) ) : ?>
				<div class="footer__quote">
					<?php echo apply_filters( 'the_content', $footer_text ); ?>
				</div><!-- /.footer__quote -->
			<?php endif; ?>

			<div class="footer__menu">
				<?php if ( has_nav_menu( 'main-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'nav nav--footer'
					) );
				} ?>
			</div><!-- /.footer__menu -->

			<div class="footer__socials">
				<?php echo get_template_part('template-parts/socials', null, array( 'show_socials_names' => true )); ?>
			</div><!-- /.footer__socials -->
		</div><!-- /.footer__content -->

		<?php if ( !empty( $footer_copyright ) ) : ?>
			<div class="footer__copyright">
				<p><?php echo do_shortcode( esc_html( $footer_copyright ) ) ?></p>
			</div><!-- /.footer__copyright -->
		<?php endif; ?>
	</footer><!-- /.footer -->
</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>
