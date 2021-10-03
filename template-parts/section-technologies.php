<?php
if ( empty( $args['technologies'] ) ) {
	return;
} ?>

<ul class="section-technologies">
	<?php foreach ( $args['technologies'] as $technology ) : ?>
		<li>
			<p><?php echo esc_html( $technology['technology'] ) ?></p>
		</li>
	<?php endforeach; ?>
</ul>
