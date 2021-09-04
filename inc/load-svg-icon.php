<?php

function gk_get_svg( $svg_name ) {
	$svg_url = get_template_directory_uri() . '/images/' . $svg_name . '.svg';

	$svg = file_get_contents( $svg_url );

	if ( !$svg ) {
		return '';
	}

	return $svg;
}
