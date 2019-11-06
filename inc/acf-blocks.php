<?php
function register_acf_block_types() {

	// Comparison CTA.
	acf_register_block_type(array(
		'name'              => 'comparison-cta',
		'title'             => __('Comparison CTA'),
		'description'       => __('A custom comparison slider block.'),
		'render_template'   => 'partials/blocks/comparison-cta/comparison-cta.php',
		'category'          => 'common',
		'icon'              => 'admin-comments',
		'keywords'          => array( 'testimonial', 'quote' ),
	));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'register_acf_block_types');
}
