<?php 
/**
 * Enqueue scripts and styles.
 */
function voyager_theme_scripts() {
	wp_enqueue_style( 'voyager-theme-style', get_stylesheet_directory_uri() . '/css/styles.css' );

	wp_enqueue_script( 'voyager-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'voyager-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'voyager_theme_scripts' );