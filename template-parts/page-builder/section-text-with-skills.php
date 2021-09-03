<div class="section-text-with-skills">
	<div class="container">
		<div class="section__flex">
			<div class="section__left">
				<div class="section__title">
					<?php if ( !empty( $args['icon_left'] ) ) :
						$icon_left = wp_get_attachment_image_url( $args['icon_left'], 'thumbnail' ); ?>

						<div class="section__icon" style="background-image: url(<?php echo $icon_left ?>)"></div>
					<?php endif;

					if ( !empty( $args['title_left'] ) ) : ?>
						<h2><?php echo esc_html( $args['title_left'] ) ?></h2>
					<?php endif; ?>
				</div>

				<div class="section__text">
					<?php echo apply_filters( 'the_content', $args['text_left'] ); ?>
				</div><!-- /.section__text -->
			</div><!-- /.section__left -->

			<div class="section__right">
				<div class="section__title">
					<?php if ( !empty( $args['icon_right'] ) ) :
						$icon_right = wp_get_attachment_image_url( $args['icon_right'], 'thumbnail' ); ?>

						<div class="section__icon" style="background-image: url(<?php echo $icon_right ?>)"></div>
					<?php endif;

					if ( !empty( $args['title_right'] ) ) : ?>
						<h2><?php echo esc_html( $args['title_right'] ) ?></h2>
					<?php endif; ?>
				</div>

				<div class="section__skills">
					<?php foreach ( $args['skills'] as $skill ) :
						if ( !is_numeric( $skill['percentage'] ) ) {
							continue;
						} ?>
						
						<div class="section__skill">
							<h5><?php echo esc_html( $skill['name'] ) ?></h5>

							<div class="section__skill-bar">
								<div class="section__skill-bar-fill" data-percents="<?php echo $skill['percentage'] ?>%" style="width: <?php echo $skill['percentage'] ?>%;">
								</div><!-- /.section__skill-bar-fill -->
							</div><!-- /.section__skill-bar -->
						</div><!-- /.section__skill -->
					<?php endforeach; ?>
				</div><!-- /.section__skills -->
			</div><!-- /.section__right -->
		</div><!-- /.section__flex -->

		<div class="section__action">
			<?php gk_render_button( $args['btn_label'], $args['btn_link'], $args['btn_new_tab'], 'btn btn--alt' ) ?>
		</div><!-- /.section__action -->
	</div><!-- /.container -->
</div><!-- /.section-text-with-skills -->
