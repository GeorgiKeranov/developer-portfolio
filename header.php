<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Developer_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gk' ); ?></a>

	<header class="header">
		<div class="container">
			<div class="header__flex">
				<div class="header__logo">
					<?php gk_the_logo() ?>
				</div><!-- /.header__logo -->

				<div class="header__menu">
					<?php if ( has_nav_menu( 'header-menu' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'container' => 'nav',
							'container_class' => 'nav nav--header'
						) );
					}

					echo get_template_part('template-parts/socials'); ?>
				</div><!-- /.header__menu -->

				<div class="header__menu-toggle">
					<div></div>

					<div></div>

					<div></div>
				</div><!-- /.header__menu-toggle -->
			</div><!-- /.header__flex -->
		</div><!-- /.container -->
	</header><!-- /.header -->

	<main class="main">
