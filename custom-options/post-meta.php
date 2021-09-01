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

			/**
			 * Section Text
			 */
			->add_fields( 'section-text', __( 'Section Text', 'gk' ), array(
				Field::make( 'rich_text', 'text', __( 'Text', 'gk' ) )
			) )

			/**
			 * Section Tabs With Text
			 */
			->add_fields( 'section-tabs-with-text', __( 'Section Tabs With Text', 'gk' ), array(
				Field::make( 'text', 'title', __( 'Title', 'gk' ) ),
				Field::make( 'complex', 'tabs', __( 'Tabs', 'gk' ) )
					->set_layout( 'tabbed-vertical' )
					->add_fields( array(
						Field::make( 'text', 'title', __( 'Tab Title', 'gk' ) )
							->set_required( true ),
						Field::make( 'rich_text', 'text', __( 'Tab Text', 'gk' ) )
							->set_required( true ),
					) )
					->set_header_template( '<%- title %>' )
			) )
	) );
