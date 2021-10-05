<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Developer_Portfolio
 */

get_header();
?>

<div class="section-page">
	<div class="container">
		<div class="section__title">
			<h1><?php the_title() ?></h1>
		</div><!-- /.section__title -->

		<div class="section__content">
			<?php the_content() ?>
		</div><!-- /.section__content -->
	</div><!-- /.container -->
</div><!-- /.section-page -->

<?php
get_footer();
