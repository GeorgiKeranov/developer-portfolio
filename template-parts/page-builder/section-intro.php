<?php 
$text = apply_filters( 'the_content', $args['text'] );
?>

<div id="section-intro-<?php echo $args['index'] ?>" class="section-intro">
	<div class="container">
		<div class="section__flex">
			<div class="section__text animation" data-animation="slide-in-left">
				<?php echo $text ?>
			</div><!-- /.section__text -->

			<?php if ( !empty( $args['image'] ) ) :
				$image = wp_get_attachment_image( $args['image'], 'large' ); ?>
				
				<div class="section__image animation" data-animation="fade-in" style="animation-delay: .75s">
					<?php echo $image ?>
				</div><!-- /.section__image -->
			<?php endif; ?>
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-intro -->

