<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Developer_Portfolio
 */

get_header();
?>

<div class="section-404">
	<div class="container">
		<div class="section__inner">
			<h1>404</h1>

			<h2><?php _e( 'Page not found', 'idt' ) ?></h2>

			<p><?php _e( 'You can try to open the home page with the button below.', 'idt' ) ?>.</p>

			<a href="<?php echo home_url('/') ?>" class="btn"><?php _e( 'Home Page' ) ?></a>
		</div><!-- /.section__inner -->
	</div><!-- /.container -->
</div><!-- /.section-404 -->

<?php
get_footer();
