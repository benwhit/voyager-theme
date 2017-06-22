<?php 
/**
 * Enqueue scripts and styles.
 */
function voyager_theme_scripts() {

	// Styles

	wp_enqueue_style( 'voyager-theme-style', get_template_directory_uri() . '/css/styles.css' );

	// Scripts
	
	wp_enqueue_script( 'tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '20151215', true );

	wp_enqueue_script( 'voyager', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'voyager_theme_scripts' );