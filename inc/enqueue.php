<?php
/**
 * Enqueue scripts and styles.
 */
function voyager_theme_scripts() {

	// Development
	// wp_enqueue_style( 'voyager-style', get_template_directory_uri() . '/css/voyager.css');
	// wp_enqueue_script( 'voyager-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );

	// Production
	wp_enqueue_style( 'voyager-style', get_template_directory_uri() . '/css/voyager.min.css');
	wp_enqueue_script( 'voyager-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), null, true );

	wp_enqueue_script( 'popper', 'https://unpkg.com/popper.js@1.12.9/dist/umd/popper.js', array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'voyager_theme_scripts' );