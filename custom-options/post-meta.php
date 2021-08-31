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
			 * Section Intro
			 */
			->add_fields( 'section-intro', __( 'Section Intro', 'gk' ), array(
				Field::make( 'rich_text', 'text', __( 'Text', 'gk' ) )
					->set_width( 70 ),
				Field::make( 'image', 'image', __( 'Image', 'gk' ) )
					->set_width( 30 )
			) )
	) );
