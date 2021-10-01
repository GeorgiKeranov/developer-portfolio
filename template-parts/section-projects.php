<?php
if ( empty( $args['projects'] ) ) {
	return;
}
?>

<div class="section-projects">
	<?php foreach ( $args['projects'] as $id ) :
		$permalink = get_the_permalink( $id );
		$title = get_the_title( $id );
		$class = '';

		$background_style = '';
		$thumbnail_id = get_post_thumbnail_id( $id );
		if ( !empty( $thumbnail_id ) ) {
			$background_style = ' style="background-image:url(' . wp_get_attachment_image_url( $thumbnail_id, 'medium_large' ) . ')"';
		} else {
			$class = ' section__project-background--empty';
		}

		$logo_style = '';
		$logo_id = carbon_get_post_meta( $id, 'gk_logo' );
		if ( !empty( $logo_id ) ) {
			$logo_style = ' style="background-image:url(' . wp_get_attachment_image_url( $logo_id, 'medium' ) . ')"';
		}

		$main_technologies = carbon_get_post_meta( $id, 'gk_main_technologies' );
		$excerpt = get_the_excerpt( $id );
		?>
		
		<div class="section__project">
			<div class="section__project-background<?php echo $class ?>"<?php echo $background_style ?>>
				<div class="section__project-content">
					<?php if ( !empty( $logo_style ) ) : ?>
						<div class="section__image-logo"<?php echo $logo_style ?>></div>
					<?php else : ?>
						<div class="section__title">
							<h2><?php echo esc_html( $title ) ?></h2>
						</div><!-- /.section__title -->
					<?php endif; ?>

					<div class="section__details">
						<div class="section__excerpt">
							<?php echo wpautop( $excerpt ) ?>
						</div><!-- /.section__excerpt -->

						<?php if ( !empty( $main_technologies ) ) : ?>
							<ul class="section__technologies">
								<?php foreach ( $main_technologies as $technology ) : ?>
									<li>
										<p><?php echo esc_html( $technology['technology'] ) ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div><!-- /.section__details -->

					<a href="<?php echo $permalink ?>"></a>
				</div><!-- /.section__project-content -->
			</div><!-- /.section__project-background -->
		</div><!-- /.section__project -->
	<?php endforeach; ?>
</div><!-- /.section-projects -->