<?php

add_action( 'login_head', 'gk_add_custom_login_styles' );
function gk_add_custom_login_styles() {
	echo '<link rel="stylesheet" type="text/css" href="'. get_bloginfo( 'stylesheet_directory' ) . '/admin-login.css" />';
}
