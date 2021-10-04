<div id="section-contact-<?php echo $args['index'] ?>" class="section-contact">
	<div class="container">
		<div class="section__head">
			<?php if ( !empty( $args['title'] ) ) : ?>
				<h1><?php echo esc_html( $args['title'] ) ?></h1>
			<?php endif; ?>

			<?php if ( !empty( $args['description'] ) ) : ?>
				<h2><?php echo nl2br( esc_html( $args['description'] ) ) ?></h2>
			<?php endif; ?>
		</div><!-- /.section__head -->

		<div class="section__flex">
			<div class="section__content">
				<?php if ( !empty( $args['location'] ) ) : ?>
					<div class="section__icon-with-text">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-location.png" width="32" height="32" alt="location icon">

						<?php echo esc_html( $args['location'] ) ?>
					</div><!-- /.section__icon-with-text -->
				<?php endif; ?>

				<?php if ( !empty( $args['email'] ) ) : ?>
					<div class="section__icon-with-text">
						<a href="mailto:<?php echo antispambot( esc_html( $args['email'] ) ) ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-mail.png" width="32" height="32" alt="mail icon">

							<?php echo antispambot( esc_html( $args['email'] ) ) ?>
						</a>
					</div><!-- /.section__icon-with-text -->
				<?php endif; ?>

				<?php if ( !empty( $args['phone'] ) ) : ?>
					<div class="section__icon-with-text">
						<a href="tel:<?php echo preg_replace('/[^0-9\-\_\+]*/', '', $args['phone'] ) ?>">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon-phone.png" width="32" height="32" alt="phone icon">

							<?php echo esc_html( $args['phone'] ) ?>
						</a>
					</div><!-- /.section__icon-with-text -->
				<?php endif;

				$github = carbon_get_theme_option( 'gk_socials_github' );
				$linkedin = carbon_get_theme_option( 'gk_socials_linkedin' );

				if ( !empty( $github ) ) : ?>
					<div class="section__icon-with-text">
						<a href="<?php echo esc_url( $github ) ?>" target="_blank"><?php echo gk_get_svg('logo-github') ?>GitHub</a>
					</div><!-- /.section__icon-with-text  -->
				<?php endif;

				if ( !empty( $linkedin ) ) : ?>
					<div class="section__icon-with-text section__icon-with-text--linkedin">
						<a href="<?php echo esc_url( $linkedin ) ?>" target="_blank"><?php echo gk_get_svg('logo-linkedin') ?> LinkedIn</a>
					</div><!-- /.section__icon-with-text  -->
				<?php endif; ?>
			</div><!-- /.section__content -->

			<div class="section__form">
				<?php if ( !empty( $args['form_title'] ) ) : ?>
					<h2><?php echo esc_html( $args['form_title'] ) ?></h2>
				<?php endif; ?>

				<?php if ( !empty( $args['form_shortcode'] ) ) {
					echo do_shortcode( $args['form_shortcode'] );
				} ?>
			</div><!-- /.section__form -->
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-contact -->
