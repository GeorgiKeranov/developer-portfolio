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

			/**
			 * Section Text with Skills
			 */
			->add_fields( 'section-text-with-skills', __( 'Section Text with Skills', 'gk' ), array(
				Field::make( 'image', 'icon_left', __( 'Icon Left', 'gk' ) )
					->set_help_text( __( 'Recommended image size is 80x80 pixels.' ) )
					->set_width( 50 ),
				Field::make( 'image', 'icon_right', __( 'Icon Right', 'gk' ) )
					->set_help_text( __( 'Recommended image size is 80x80 pixels.' ) )
					->set_width( 50 ),
				Field::make( 'text', 'title_left', __( 'Left Title', 'gk' ) )
					->set_width( 50 ),
				Field::make( 'text', 'title_right', __( 'Right Title', 'gk' ) )
					->set_width( 50 ),
				Field::make( 'rich_text', 'text_left', __( 'Left Text', 'gk' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'skills', __( 'Skills', 'gk' ) )
					->set_width( 50 )
					->set_layout( 'tabbed-vertical' )
					->add_fields( array(
						Field::make( 'text', 'name', __( 'Name', 'gk' ) )
							->set_required( true ),
						Field::make( 'text', 'percentage', __( 'Percentage', 'gk' ) )
							->set_help_text( __( 'Percentage must be number from 0 to 100', 'gk' ) )
							->set_required( true )
					) ),
				Field::make( 'text', 'btn_label', __( 'Button Label', 'gk' ) )
					->set_width( 40 ),
				Field::make( 'text', 'btn_link', __( 'Button Label', 'gk' ) )
					->set_width( 40 ),
				Field::make( 'select', 'btn_new_tab', __( 'Open Button In New Tab', 'gk' ) )
					->set_options( array(
						'no' => __( 'No', 'gk' ),
						'yes' => __( 'Yes', 'gk' ),
					) )
					->set_width( 20 ),
			) )
	) );
