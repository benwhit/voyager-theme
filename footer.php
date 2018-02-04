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
			<div class="col-6">
				<a href="/" class="footer__brand">
					<?php echo get_bloginfo('title'); ?>
				</a>
			</div>
			<div class="col-6 footer__menus">
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
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
