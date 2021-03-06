<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Voyager_Starter
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function voyager_starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'voyager_starter_pingback_header' );


/*
 * Enable support for Post Formats.
 *
 * @link https://wordpress.org/support/article/post-formats/#adding-theme-support
 */
add_theme_support( 'post-formats', array( 'aside', 'video' ) );

add_post_type_support( 'reviews', 'post-formats' );
