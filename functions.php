<?php
/**
 * Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Developer_Portfolio
 */

define( 'GK_THEME_DIR', get_template_directory() );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'gk_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gk_setup() {
		// Boot the carbon fields package for custom fields
		require_once( 'vendor/autoload.php' );
		\Carbon_Fields\Carbon_Fields::boot();

		// Add custom field options to the theme
		function gk_add_custom_options_to_theme() {
			include_once(GK_THEME_DIR . '/custom-options/post-meta.php');
			include_once(GK_THEME_DIR . '/custom-options/theme-options.php');
		}
		add_action( 'carbon_fields_register_fields', 'gk_add_custom_options_to_theme' );

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Starter Theme, use a find and replace
		 * to change 'gk' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gk', GK_THEME_DIR . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Main Menu', 'gk' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'gk_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'gk_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gk_content_width', 640 );
}
add_action( 'after_setup_theme', 'gk_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gk_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'gk' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'gk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gk_scripts() {
	$template_directory_uri = get_template_directory_uri();

	wp_enqueue_style( 'gk-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'gk-montserrat-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), _S_VERSION );

	wp_enqueue_script( 'gk-script', $template_directory_uri . '/scripts.js', array( 'jquery' ), _S_VERSION, true );
	wp_localize_script( 'gk-script', 'globalVariables', array(
		'siteUrl' => $template_directory_uri,
	) );
}
add_action( 'wp_enqueue_scripts', 'gk_scripts' );

/**
 * Attach custom options for the theme
 */
function gk_custom_options() {
	include_once( GK_THEME_DIR . '/custom-options/post-types.php' );
	include_once( GK_THEME_DIR . '/custom-options/taxonomies.php' );
	include_once( GK_THEME_DIR . '/custom-options/shortcodes.php' );
}
add_action( 'init', 'gk_custom_options', 0 );

/**
 * Load dynamically logo for the theme
 */
require GK_THEME_DIR . '/inc/logo-dynamic.php';

/**
 * Load svg icons with simple function
 */
require GK_THEME_DIR . '/inc/load-svg-icon.php';

/**
 * Disable guttenberg editor for certain templates
 */
require GK_THEME_DIR . '/inc/disable-gutenberg.php';

/**
 * Disable classic editor for certain templates
 */
require GK_THEME_DIR . '/inc/disable-classic-editor.php';

/**
 * Add function to render button based on fields of button
 */
require GK_THEME_DIR . '/inc/render-button.php';

/**
 * Add customizations on admin pages
 */
require GK_THEME_DIR . '/inc/admin-page-customization.php';
