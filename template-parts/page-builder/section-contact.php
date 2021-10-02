<div class="section-contact">
	<div class="container">
		<?php if ( !empty( $args['title'] ) ) : ?>
			<h1><?php echo esc_html( $args['title'] ) ?></h1>
		<?php endif; ?>

		<?php if ( !empty( $args['description'] ) ) : ?>
			<p><?php echo nl2br( esc_html( $args['description'] ) ) ?></p>
		<?php endif; ?>

		<div class="section__flex">
			<div class="section__content">
				<?php if ( !empty( $args['location'] ) ) : ?>
					<p>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-location.png" width="32" height="32" alt="location icon">

						<?php echo esc_html( $args['location'] ) ?>
					</p>
				<?php endif; ?>

				<?php if ( !empty( $args['email'] ) ) : ?>
					<p>
						<a href="mailto:<?php echo antispambot( esc_html( $args['email'] ) ) ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-mail.png" width="32" height="32" alt="mail icon">

							<?php echo antispambot( esc_html( $args['email'] ) ) ?>
						</a>
					</p>
				<?php endif; ?>

				<?php if ( !empty( $args['phone'] ) ) : ?>
					<p>
						<a href="tel:<?php echo preg_replace('/[^0-9\-\_\+]*/', '', $args['phone'] ) ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-phone.png" width="32" height="32" alt="phone icon">

							<?php echo esc_html( $args['phone'] ) ?>
						</a>
					</p>
				<?php endif;

				$github = carbon_get_theme_option( 'gk_socials_github' );
				$linkedin = carbon_get_theme_option( 'gk_socials_linkedin' );

				if ( !empty( $github ) ) : ?>
					<p><a href="<?php echo esc_url( $github ) ?>" target="_blank"><?php echo gk_get_svg('logo-github') ?> GitHub</a></p>
				<?php endif;

				if ( !empty( $linkedin ) ) : ?>
					<p><a href="<?php echo esc_url( $linkedin ) ?>" target="_blank"><?php echo gk_get_svg('logo-linkedin') ?> LinkedIn</a></p>
				<?php endif; ?>
			</div><!-- /.section__content -->

			<div class="section__form">
				<?php if ( !empty( $args['form_shortcode'] ) ) {
					echo do_shortcode( $args['form_shortcode'] );
				} ?>
			</div><!-- /.section__form -->
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-contact -->
