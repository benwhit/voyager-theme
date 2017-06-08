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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 footer__logo">
					<h1 class="footer__logo__title">Logo</h1>
					<h5 class="footer__logo__subtitle">no tail left behind.</h5>
				</div>
				<div class="col-sm-7 footer__widgets">
					<div class="row">
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-one'); ?>
						</div>
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-two'); ?>
						</div>
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-three'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-four'); ?>
						</div>
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-five'); ?>
						</div>
						<div class="col-sm-4">
							<?php dynamic_sidebar('footer-six'); ?>
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
