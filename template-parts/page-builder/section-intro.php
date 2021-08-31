<?php 
$text = apply_filters( 'the_content', $args['text'] );
$image = wp_get_attachment_image( $args['image'], 'medium' );
?>

<div id="section-intro-<?php echo $args['index'] ?>" class="section-intro">
	<div class="container">
		<div class="section__flex">
			<div class="section__text">
				<?php echo $text ?>
			</div><!-- /.section__text -->

			<?php if ( !empty( $image ) ) : ?>
				<div class="section__image">
					<?php echo $image ?>
				</div><!-- /.section__image -->
			<?php endif; ?>
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-intro -->

