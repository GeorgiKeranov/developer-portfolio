<?php

/**
 * Returns current year
 *
 * @uses [year]
 */
add_shortcode( 'year', 'idt_shortcode_year' );
function idt_shortcode_year() {
	return date( 'Y' );
}
