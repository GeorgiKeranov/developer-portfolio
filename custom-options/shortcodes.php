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
