<?php
/**
 * All files in /inc folder.
 */
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/bs4navwalker.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';
// require get_template_directory() . '/inc/custom-post-types.php';



// DIGITAL FEED
// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );

add_filter( 'acf/rest_api/key', function( $key, $request, $type ) {
  return 'acf_fields';
}, 10, 3 );






function snipcart_add_json() {
    register_rest_field( 'social_posts', 'caption', array(
        'get_callback' => function( $post ) {
            return get_field('caption');
        }
    ) );
    register_rest_field( 'social_posts', 'networks', array(
        'get_callback' => function( $post ) {
            return get_field('networks');
        }
    ) );
}
add_action( 'rest_api_init', 'snipcart_add_json' );

// function my_rest_prepare_post($data, $post, $request) {
//   $_data = $data->data;

//   $fields = get_fields($post->ID);
//   foreach ($fields as $key => $value){
//     $_data[$key] = get_field($key, $post->ID);
//   }
//   $data->data = $_data;

//   return $data;
// }
// add_filter("rest_prepare_product", 'my_rest_prepare_post', 10, 3);