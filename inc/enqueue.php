<?php
/**
 * Enqueue scripts and styles.
 */
function voyager_starter_scripts() {
	wp_enqueue_style( 'voyager-starter-intro', get_stylesheet_uri() );
	wp_enqueue_style( 'voyager-starter-style', get_template_directory_uri() . '/css/voyager.min.css' );
	wp_enqueue_style( 'flickity-style', 'https://unpkg.com/flickity@2.1.2/dist/flickity.css', null, null);

	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(), '1.14.6', true );
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array(), '4.2.1', true );
	wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2.1.2/dist/flickity.pkgd.min.js', array(), '2.1.2', true );

	wp_enqueue_script( 'voyager-starter-js',  get_template_directory_uri() . '/js/script.min.js', array(), null, true );

	wp_enqueue_script( 'voyager-starter-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'voyager_starter_scripts' );
