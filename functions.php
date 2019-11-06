<?php
/**
 * All files in /inc folder.
 */
require get_template_directory() . '/inc/acf-blocks.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/bs4navwalker.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/gutenberg-cleanup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
