<?php
if ( empty( $args['projects'] ) ) {
	return;
}
?>

<div class="section-projects">
	<?php foreach ( $args['projects'] as $project ) :
		$id = $project['id'];
		$permalink = get_the_permalink( $id );
		$title = get_the_title( $id );

		$image_url = '';
		$thumbnail_id = get_post_thumbnail_id( $id );
		if ( !empty( $thumbnail_id ) ) {
			$image_url = wp_get_attachment_image_url( $thumbnail_id, 'medium_large' );
		}

		$logo_url = '';
		$logo_id = carbon_get_post_meta( $id, 'gk_logo' );
		if ( !empty( $logo_id ) ) {
			$logo_url = wp_get_attachment_image_url( $logo_id, 'medium' );
		}

		$technologies = carbon_get_post_meta( $id, 'gk_technologies' );
		$excerpt = get_the_excerpt( $id );
		?>
		
		<div class="section__project">
			<div class="section__project-inner">
				<div class="section__image-background<?php echo !empty( $logo_url ) ? ' section__image-background--with-logo' : '' ?>" style="background-image:url(<?php echo $image_url ?>)">
					<?php if ( !empty( $logo_url ) ) : ?>
						<div class="section__image-logo" style="background-image:url(<?php echo $logo_url ?>)"></div>
					<?php endif; ?>

					<a href="<?php echo $permalink ?>"></a>
				</div>

				<div class="section__details">
					<?php if ( !empty( $title ) ) : ?>
						<h4><a href="<?php echo $permalink ?>"><?php echo esc_html( $title ) ?></a></h4>
					<?php endif; ?>


					<div class="section__excerpt">
						<?php echo wpautop( $excerpt ) ?>
					</div><!-- /.section__excerpt -->

					<?php if ( !empty( $technologies ) ) : ?>
						<ul class="section__technologies">
							<?php foreach ( $technologies as $technology ) : ?>
								<li>
									<p><?php echo esc_html( $technology['technology'] ) ?></p>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div><!-- /.section__details -->

				<div class="section__action">
					<?php gk_render_button( __( 'View Project', 'gk' ), $permalink, 'no', 'btn' ) ?>
				</div><!-- /.section__action -->
			</div><!-- /.section__project-inner -->
		</div><!-- /.section__project -->
	<?php endforeach; ?>
</div><!-- /.section-projects -->