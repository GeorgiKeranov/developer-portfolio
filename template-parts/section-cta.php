<?php
if ( empty( $args ) ) {
	return;
}

$args = array_filter( $args );

if ( empty( $args ) ) {
	return;
}
?>

<div class="section-call-to-action">
	<div class="container">
		<div class="section__flex">
				<div class="section__text">
					<?php if ( !empty( $args['text'] ) ) : ?>
						<h2><?php echo esc_html( $args['text'] ) ?></h2>
					<?php endif; ?>
				</div><!-- /.section__text -->

			<div class="section__action">
				<?php gk_render_button( $args['btn_label'], $args['btn_link'], $args['btn_new_tab'], 'btn' ) ?>
			</div><!-- /.section__action -->
		</div><!-- /.section__flex -->
	</div><!-- /.container -->
</div><!-- /.section-call-to-action -->