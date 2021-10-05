<?php
$images = carbon_get_the_post_meta( 'gk_images' );
$website_link = carbon_get_the_post_meta( 'gk_website_link' );
$github_link = carbon_get_the_post_meta( 'gk_github_link' );
$technologies = carbon_get_the_post_meta( 'gk_technologies' );
?>

<div class="section-single-project">
	<div class="container">
		<h1 class="animation" data-animation="fade-in"><?php the_title() ?></h1>

		<div class="section__flex">
			<?php if ( !empty( $images ) ) : ?>
				<div class="section__gallery">
					<?php get_template_part( 'template-parts/section-gallery-lightbox', null, array( 'images' => $images ) ) ?>
				</div><!-- /.section__gallery -->
			<?php endif; ?>

			<div class="section__details animation" data-animation="slide-in-right" style="animation-delay: .8s">
				<div class="section__text">
					<h4><?php _e( 'Project Description:', 'gk' ) ?></h4>
					
					<?php the_content() ?>
				</div><!-- /.section__text -->

				<div class="section__technologies">
					<h4><?php _e( 'Technologies Used:', 'gk' ) ?></h4>

					<?php echo get_template_part( 'template-parts/section-technologies', null, array( 'technologies' => $technologies ) ); ?>
				</div><!-- /.section__technologies -->

				<div class="section__socials">
					<?php if ( !empty( $website_link ) ) : ?>
						<div class="section__image-with-text">
							<a href="<?php echo esc_url( $website_link ) ?>" target="_blank"><?php echo gk_get_svg( 'logo-website' ) ?> <?php _e( 'Website', 'gk' ) ?></a>
						</div><!-- /.section__image-with-text -->
					<?php endif; ?>

					<?php if ( !empty( $github_link ) ) : ?>
						<div class="section__image-with-text">
							<a href="<?php echo esc_url( $github_link ) ?>" target="_blank"><?php echo gk_get_svg( 'logo-github' ) ?> <?php _e( 'GitHub', 'gk' ) ?></a>
						</div><!-- /.section__image-with-text -->
					<?php endif; ?>
				</div><!-- /.section__socials -->
			</div><!-- /.section__details -->
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-single-project -->