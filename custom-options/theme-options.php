<?php
use Carbon_Fields\Container\Container;
use Carbon_Fields\Field\Field;

Container::make( 'theme_options', __( 'Theme Options', 'gk' ) )
	->set_page_file( 'gk-theme-options.php' )
	->add_tab( __( 'Global', 'gk' ), array(
		Field::make( 'image', 'gk_logo', __( 'Logo', 'gk' ) )
			->set_help_text( 'It is recommended width and height of the logo to be even numbers', 'gk' ),
		Field::make( 'text', 'gk_socials_github', __( 'Github Profile Link', 'gk' ) ),
		Field::make( 'text', 'gk_socials_linkedin', __( 'LinkedIn Profile Link', 'gk' ) ),
	) );