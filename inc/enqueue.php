<?php
/**
 * Enqueue scripts and styles.
 */
function voyager_starter_scripts() {
	wp_enqueue_style( 'voyager-global', get_stylesheet_uri() );
	wp_enqueue_style( 'voyager-style', get_template_directory_uri() . '/assets/css/voyager.min.css', array(), filemtime( get_template_directory() . '/assets/css/voyager.css' ) );
	wp_enqueue_style( 'flickity-style', 'https://unpkg.com/flickity@2.1.2/dist/flickity.css', null, null);
	wp_enqueue_style( 'fontawesome-5.10.2', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css');

	// Dependencies
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'flickity-js', 'https://unpkg.com/flickity@2.1.2/dist/flickity.pkgd.min.js', array('jquery'), '2.1.2', true );

    if ( is_front_page() ) {
        wp_enqueue_script( 'gmap-js',  get_template_directory_uri() . '/assets/js/gmap.js', array('jquery'), null, true );
        wp_enqueue_script( 'gmaps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDvr81yphbHnFO2A9F2a7Vsk2kMkWbi32M&callback=initMap', array('jquery'), null, true );
    }

	wp_enqueue_script( 'voyager-starter-js',  get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), null, true );
	//wp_enqueue_script( 'voyager-starter-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Move jQuery to footer
	if( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
		wp_enqueue_script( 'jquery' );
	}

}
add_action( 'wp_enqueue_scripts', 'voyager_starter_scripts' );
