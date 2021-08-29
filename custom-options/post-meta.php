<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * Page Builder
 */
Container::make( 'post_meta', __( 'Page Builder', 'gk' ) )
	->where( 'post_template', '=', 'templates/page-builder.php' )
	->add_fields( array(
		Field::make( 'complex', 'gk_page_builder_sections', 'Sections' )
			->set_layout( 'tabbed-vertical' )

			/**
			 * Example section
			 */
			->add_fields( 'section-example', __( 'Section Example', 'gk' ), array(
				Field::make( 'text', 'title', __( 'Title', 'gk' ) ),
			) )
	) );
