<div class="section-tabs-with-text">
	<div class="container">
		<?php if ( !empty( $args['title'] ) ) : ?>
			<div class="section__title">
				<h2><?php echo esc_html( $args['title'] ) ?></h2>
			</div><!-- /.section__title -->
		<?php endif; ?>

		<?php if ( !empty( $args['tabs'] ) ) : ?>
			<div class="section__flex">
				<div class="section__tabs">
					<?php foreach ( $args['tabs'] as $index => $tab ) :
						$is_active_class = '';

						if ( $index === 0 ) {
							$is_active_class = ' section__tab--active';
						} ?>

						<div class="section__tab<?php echo $is_active_class ?>" data-index="<?php echo $index ?>">
							<a href="#"><?php echo esc_html( $tab['title'] ) ?></a>
						</div><!-- /.section__tab -->
					<?php endforeach; ?>

					<div class="section__active-tab-line"></div>
				</div><!-- /.section__tabs-nav -->

				<div class="section__tabs-content">
					<?php foreach ( $args['tabs'] as $index => $tab ) :
						$is_active_class = '';

						if ( $index === 0 ) {
							$is_active_class = ' section__tab-content--active';
						} ?>
						
						<div class="section__tab-content<?php echo $is_active_class ?>" data-index="<?php echo $index ?>">
							<?php echo apply_filters( 'the_content', $tab['text'] ) ?>
						</div><!-- /.section__tab-content -->
					<?php endforeach; ?>
				</div><!-- /.section__tabs-content -->
			</div><!-- /.section__flex -->
		<?php endif; ?>
	</div><!-- /.container -->
</div><!-- /.section-tabs-with-text -->