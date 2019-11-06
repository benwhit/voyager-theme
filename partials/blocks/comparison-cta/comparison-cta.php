<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'comparison-cta-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'comparison-cta';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$title = get_field('title') ?: 'Comparison Title Caption Here';
$text = get_field('text') ?: 'Comparison Text';
$before_image = get_field('before_image') ?: 757;
$after_image = get_field('after_image') ?: 757;

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<div class="comparison-cta container px-0">
		<div class="row no-gutters">
			<div class="col-12 col-lg-8">
				<div class="comparison-cta__image compare-container">
					<?php echo wp_get_attachment_image( $before_image, 'large' ); ?>
					<?php echo wp_get_attachment_image( $after_image, 'large' ); ?>
				</div>
			</div>
			<div class="col-12 col-lg-4 d-flex justify-content-center align-items-start flex-column">
				<div class="p-4">
					<p class="h4"><?php echo $title; ?></p>
					<p class="lead"><?php echo $text; ?></p>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		#<?php echo $id; ?> {
			background: <?php echo $background_color; ?>;
			color: <?php echo $text_color; ?>;
		}
	</style>
</div>
