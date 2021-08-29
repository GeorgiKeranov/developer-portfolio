<?php

/**
 * Templates and Page IDs without editor
 *
 */
function gk_disable_editor( $id = false ) {

	$excluded_templates = array(
		'templates/page-builder.php',
	);

	if( empty( $id ) ) {
		return false;
	}

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $template, $excluded_templates );
}

/**
 * Disable Gutenberg by template
 *
 */
function gk_disable_gutenberg( $can_edit, $post_type ) {

	if( ! ( is_admin() && !empty( $_GET['post'] ) ) ) {
		return $can_edit;
	}

	if( gk_disable_editor( $_GET['post'] ) ) {
		$can_edit = false;
	}

	return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'gk_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'gk_disable_gutenberg', 10, 2 );