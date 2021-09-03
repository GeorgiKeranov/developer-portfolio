<?php

register_post_type( 'gk_project', array(
	'labels' => array(
		'name'               => __( 'Projects', 'gk' ),
		'singular_name'      => __( 'Project', 'gk' ),
		'add_new'            => __( 'Add New', 'gk' ),
		'add_new_item'       => __( 'Add New Project', 'gk' ),
		'view_item'          => __( 'View Project', 'gk' ),
		'edit_item'          => __( 'Edit Project', 'gk' ),
		'new_item'           => __( 'New Project', 'gk' ),
		'view_item'          => __( 'View Project', 'gk' ),
		'search_items'       => __( 'Search Projects', 'gk' ),
		'not_found'          => __( 'Not Found Projects', 'gk' ),
		'not_found_in_trash' => __( 'Not Found Projects In Trash', 'gk' ),
	),
	'public'                => true,
	'exclude_from_search'   => false,
	'show_ui'               => true,
	'capability_type'       => 'post',
	'hierarchical'          => false,
	'_edit_link'            => 'post.php?post=%d',
	'rewrite'               => array(
		'slug' => 'project',
		'with_front' => false,
	),
	'query_var'             => true,
	'menu_icon'             => 'dashicons-welcome-write-blog',
	'supports'              => array( 'title', 'thumbnail', 'editor', 'excerpt' ),
) );
