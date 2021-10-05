<?php 
$projects = new WP_Query( array(
	'post_type' => 'gk_project',
	'posts_per_page' => -1,
	'fields' => 'ids'
) );

if ( !$projects->have_posts() ) {
	return;
} ?>

<div class="section-all-projects">
	<div class="container">
		<?php if ( !empty( $args['title'] ) ) : ?>
			<h1 class="animation" data-animation="slide-in-left"><?php echo esc_html( $args['title'] ) ?></h1>
		<?php endif;

		get_template_part( 'template-parts/section-projects', null, array( 'projects' => $projects->posts ) ); ?>
	</div><!-- /.container -->
</div><!-- /.section-all-projects -->