<?php
use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'theme_options', __( 'Theme Options', 'gk' ) )
	->set_page_file( 'gk-theme-options.php' )
	->add_tab( __( 'Global', 'gk' ), array(
		Field::make( 'text', 'gk_socials_github', __( 'Github Profile Link', 'gk' ) ),
		Field::make( 'text', 'gk_socials_linkedin', __( 'LinkedIn Profile Link', 'gk' ) ),
	) )
	->add_tab( __( 'Footer Call To Action Section', 'gk' ), array(
		Field::make( 'text', 'gk_cta_text', __( 'Text', 'gk' ) ),
		Field::make( 'text', 'gk_cta_btn_label', __( 'Button Label', 'gk' ) )
			->set_width( 40 ),
		Field::make( 'text', 'gk_cta_btn_link', __( 'Button Label', 'gk' ) )
			->set_width( 40 ),
		Field::make( 'select', 'gk_cta_btn_new_tab', __( 'Open Button In New Tab', 'gk' ) )
			->set_options( array(
				'no' => __( 'No', 'gk' ),
				'yes' => __( 'Yes', 'gk' ),
			) )
			->set_width( 20 ),
	) )
	->add_tab( __( 'Footer', 'gk' ), array(
		Field::make( 'rich_text', 'gk_footer_text', __( 'Text', 'gk' ) ),
		Field::make( 'text', 'gk_footer_copyright', __( 'Copyright', 'gk' ) )
	) );