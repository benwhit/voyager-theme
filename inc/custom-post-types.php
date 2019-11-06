<?php
/**
 * Custom Post Types.
 *
 * @package Voyager_Starter
 */

// Register Custom Post Type - Projects
function projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'Voyager_Starter' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'Voyager_Starter' ),
		'menu_name'             => __( 'Projects', 'Voyager_Starter' ),
		'name_admin_bar'        => __( 'Projects', 'Voyager_Starter' ),
		'archives'              => __( 'Project Archives', 'Voyager_Starter' ),
		'attributes'            => __( 'Project Attributes', 'Voyager_Starter' ),
		'parent_item_colon'     => __( 'Project Item:', 'Voyager_Starter' ),
		'all_items'             => __( 'Project Items', 'Voyager_Starter' ),
		'add_new_item'          => __( 'Add New Project', 'Voyager_Starter' ),
		'add_new'               => __( 'Add New', 'Voyager_Starter' ),
		'new_item'              => __( 'New Project', 'Voyager_Starter' ),
		'edit_item'             => __( 'Edit Project', 'Voyager_Starter' ),
		'update_item'           => __( 'Update Project', 'Voyager_Starter' ),
		'view_item'             => __( 'View Project', 'Voyager_Starter' ),
		'view_items'            => __( 'View Projects', 'Voyager_Starter' ),
		'search_items'          => __( 'Search Project', 'Voyager_Starter' ),
		'not_found'             => __( 'Not found', 'Voyager_Starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Voyager_Starter' ),
		'featured_image'        => __( 'Featured Image', 'Voyager_Starter' ),
		'set_featured_image'    => __( 'Set featured image', 'Voyager_Starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'Voyager_Starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'Voyager_Starter' ),
		'insert_into_item'      => __( 'Insert into Project', 'Voyager_Starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'Voyager_Starter' ),
		'items_list'            => __( 'Projects list', 'Voyager_Starter' ),
		'items_list_navigation' => __( 'Projects list navigation', 'Voyager_Starter' ),
		'filter_items_list'     => __( 'Filter Projects list', 'Voyager_Starter' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'Voyager_Starter' ),
		'description'           => __( 'Shane\'s Pristine Power Wash projects.', 'Voyager_Starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects', 0 );




// Register Custom Post Type - Reviews
function reviews() {

	$labels = array(
		'name'                  => _x( 'Reviews', 'Post Type General Name', 'Voyager_Starter' ),
		'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'Voyager_Starter' ),
		'menu_name'             => __( 'Reviews', 'Voyager_Starter' ),
		'name_admin_bar'        => __( 'Reviews', 'Voyager_Starter' ),
		'archives'              => __( 'Review Archives', 'Voyager_Starter' ),
		'attributes'            => __( 'Review Attributes', 'Voyager_Starter' ),
		'parent_item_colon'     => __( 'Review Item:', 'Voyager_Starter' ),
		'all_items'             => __( 'Review Items', 'Voyager_Starter' ),
		'add_new_item'          => __( 'Add New Review', 'Voyager_Starter' ),
		'add_new'               => __( 'Add New', 'Voyager_Starter' ),
		'new_item'              => __( 'New Review', 'Voyager_Starter' ),
		'edit_item'             => __( 'Edit Review', 'Voyager_Starter' ),
		'update_item'           => __( 'Update Review', 'Voyager_Starter' ),
		'view_item'             => __( 'View Review', 'Voyager_Starter' ),
		'view_items'            => __( 'View Reviews', 'Voyager_Starter' ),
		'search_items'          => __( 'Search Review', 'Voyager_Starter' ),
		'not_found'             => __( 'Not found', 'Voyager_Starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Voyager_Starter' ),
		'featured_image'        => __( 'Featured Image', 'Voyager_Starter' ),
		'set_featured_image'    => __( 'Set featured image', 'Voyager_Starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'Voyager_Starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'Voyager_Starter' ),
		'insert_into_item'      => __( 'Insert into Review', 'Voyager_Starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Review', 'Voyager_Starter' ),
		'items_list'            => __( 'Reviews list', 'Voyager_Starter' ),
		'items_list_navigation' => __( 'Reviews list navigation', 'Voyager_Starter' ),
		'filter_items_list'     => __( 'Filter Reviews list', 'Voyager_Starter' ),
	);
	$args = array(
		'label'                 => __( 'Review', 'Voyager_Starter' ),
		'description'           => __( 'Shane\'s Pristine Power Wash reviews.', 'Voyager_Starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'reviews', $args );

}
add_action( 'init', 'reviews', 5 );
