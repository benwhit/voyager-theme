<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voyager_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="card shadow-light-lg lift lift-lg" style="border-top:3px solid #010d87; border-radius:0.25rem;">
		<div class="card-body">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</aside><!-- #secondary -->
