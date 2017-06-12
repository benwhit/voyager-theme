<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function voyager_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'voyager-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'voyager-theme' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-adopt">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'voyager-theme' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-involved">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'voyager-theme' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-about">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'voyager-theme' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-programs">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 5', 'voyager-theme' ),
		'id'            => 'footer-five',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-news">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 6', 'voyager-theme' ),
		'id'            => 'footer-six',
		'description'   => esc_html__( 'Add widgets here.', 'voyager-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget__title color-contact">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'voyager_theme_widgets_init' );