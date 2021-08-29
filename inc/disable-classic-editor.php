<?php

/**
 * Disable classic editor from templates that do not use it
 */
add_action( 'admin_init', 'gk_remove_default_editor_from_templates', 10 );
function gk_remove_default_editor_from_templates() {

	if ( empty( $_GET['post'] ) ) {
		return;
	}

	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	
	if ( empty( $post_id ) ) {
		return;	
	}

	$excluded_templates = array(
		'templates/page-builder.php'
	);

	$template = get_post_meta( $post_id, '_wp_page_template', true );

	if ( in_array( $template, $excluded_templates ) ) {
		remove_post_type_support( 'page', 'editor' );
	}
}
