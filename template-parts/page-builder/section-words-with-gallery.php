<div class="section-words-with-gallery">
	<div class="container">
		<?php if ( !empty( $args['title'] ) ) : ?>
			<h2 class="animation" data-animation="fade-in"><?php echo esc_html( $args['title'] ) ?></h2>
		<?php endif; ?>

		<?php if ( !empty( $args['description'] ) ) : ?>
			<h3 class="animation" data-animation="fade-in"><?php echo esc_html( $args['description'] ) ?></h3>
		<?php endif; ?>

		<?php if ( !empty( $args['words'] ) ) : ?>
			<ul class="section__words animation" data-animation="fade-in">
				<?php foreach ( $args['words'] as $word ) : ?>
					<li>
						<p><?php echo esc_html( $word['word'] ) ?></p>
					</li>
				<?php endforeach; ?>
			</ul><!-- /.section__words -->
		<?php endif; ?>

		<?php if ( !empty( $args['gallery'] ) ) : ?>
			<div class="section__gallery">
				<?php foreach ( $args['gallery'] as $index => $image ) :
					$image_url = wp_get_attachment_image_url( $image, 'large' );

					if ( empty( $image_url ) ) {
						continue;
					}

					$slide_in_animation = 'slide-in-left';
					if ( ($index + 1) % 2 == 0 ) {
						$slide_in_animation = 'slide-in-right';
					}
					?>

					<div class="section__image animation" data-animation="<?php echo $slide_in_animation ?>">
						<div class="section__background-image" style="background-image: url(<?php echo $image_url ?>)"></div><!-- /.section__background-image -->
					</div><!-- /.section__image -->
				<?php endforeach; ?>
			</div><!-- /.section__gallery -->
		<?php endif; ?>
	</div><!-- /.container -->
</div><!-- /.section-words-with-gallery -->