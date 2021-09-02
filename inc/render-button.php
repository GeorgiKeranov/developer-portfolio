<?php

function gk_render_button( $label, $link, $new_tab, $class = 'btn' ) {
	if ( empty( $label ) || empty( $link ) ) {
		return;
	}

	$label = esc_html( $label );
	$link = esc_url( $link );
	$target = '';
	$class = ' class="' . $class . '"';

	if ( !empty( $new_tab ) && $new_tab === 'yes' ) {
		$target = ' target="_blank"';
	}

	$attributes = $target . $class;
	?>

	<a href="<?php echo $link ?>" <?php echo $attributes ?>><?php echo $label ?></a>
	
	<?php
}
