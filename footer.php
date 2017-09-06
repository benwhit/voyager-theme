<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voyager_Theme
 */
?>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h3 class="footer__brand">
					<?php echo get_bloginfo('title'); ?>
					<br>
					<span class="footer__description">
						<?php echo get_bloginfo('description'); ?>
					</span>
				</h3>
			</div>
			<div class="col-sm-7 footer__menus">
				<div class="row">
					<div class="col-6">
						<?php
						wp_nav_menu([
							'menu'            => 'footer-1',
							'theme_location'  => 'footer-1',
							'menu_id'         => false,
							'depth'           => 2,
							'fallback_cb'     => 'bs4navwalker::fallback',
							'walker'          => new bs4navwalker()
							]);
							?>
						</div>
						<div class="col-6">
							<?php
							wp_nav_menu([
								'menu'            => 'footer-2',
								'theme_location'  => 'footer-2',
								'menu_id'         => false,
								'depth'           => 2,
								'fallback_cb'     => 'bs4navwalker::fallback',
								'walker'          => new bs4navwalker()
								]);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>
