<?php

function gk_the_logo() {
	$logo_id = get_theme_mod( 'custom_logo' );

	$logo_details = gk_get_logo_details( $logo_id );

	// Change logo width and height to be 2 times smaller to look good on retina displays
	$logo_details['width'] = intval( $logo_details['width'] / 2 );
	$logo_details['height'] = intval( $logo_details['height'] / 2 ); ?>

	<a href="<?php echo home_url('/') ?>" class="logo" style="background-image:url(<?php echo $logo_details['url'] ?>); width: <?php echo $logo_details['width'] ?>px; height: <?php echo $logo_details['height'] ?>px;"></a>

	<?php
}

function gk_get_logo_details($logo_id, $placeholder_logo_color = 'white') {
	$logo_details = array(
		'url' => get_bloginfo( 'stylesheet_directory' ) . '/images/placeholder-logo-' . $placeholder_logo_color . '.png',
		'width' => 300, // Width of the static placeholder logos
		'height' => 62 // Height of the static placeholder logos
	);

	if ( !empty( $logo_id ) ) {
		$logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
		
		if ( !empty( $logo_src ) ) {
			$logo_details = array(
				'url' => $logo_src[0],
				'width' => $logo_src[1],
				'height' => $logo_src[2],
			);
		}
	}

	return $logo_details;
}
