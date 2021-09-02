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

	<div class="section-call-to-action">
		<div class="container">
			<div class="section__flex">
				<div class="section__text">
					<h2>Do you have any questions? I would be happy if I can help.</h2>
				</div><!-- /.section__text -->

				<div class="section__action">
					<a class="btn" href="#">Get In Touch</a>
				</div><!-- /.section__action -->
			</div><!-- /.section__flex -->
		</div><!-- /.container -->
	</div><!-- /.section-call-to-action -->

	<footer class="footer">
		<div class="footer__content">
			<div class="footer__quote">
				<blockquote>“Your <strong>FUTURE</strong> is created by what you do <strong>TODAY</strong> not <strong>TOMMOROW</strong>”</blockquote>
			</div><!-- /.footer__quote -->

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

		<div class="footer__copyright">
			<p>© Georgi Keranov 2021</p>
		</div><!-- /.footer__copyright -->
	</footer><!-- /.footer -->
</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>
