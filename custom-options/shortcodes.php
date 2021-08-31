<?php

/**
 * Returns current year
 *
 * @uses [year]
 */
add_shortcode( 'year', 'gk_shortcode_year' );
function gk_shortcode_year() {
	return date( 'Y' );
}

/**
 * Button Shortcode
 */
add_shortcode( 'button', 'gk_shortcode_button' );
function gk_shortcode_button( $atts, $content ) {
	$atts = shortcode_atts( array(
			'link' => '#',
		), $atts, 'button'
	);

	ob_start();
	?>
	<a class="btn" href="<?php echo esc_url( $atts['link'] ) ?>"><?php echo $content ?></a>
	<?php
	$html = ob_get_clean();

	return $html;
}

