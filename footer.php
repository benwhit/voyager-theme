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
				<div class="col-sm-7 footer__menus">
					<div class="row">						
					<div class="col-6 col-lg-4 adopt">
						<h4 class="overlay__title">adopt</h4>
						<?php 
					   wp_nav_menu([
					     'menu'            => 'adopt',
					     'theme_location'  => 'adopt',
					     'menu_id'         => false,
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4navwalker::fallback',
					     'walker'          => new bs4navwalker()
					   ]); 
					  ?>					
					</div>
					<div class="col-6 col-lg-4 programs">
						<h4 class="overlay__title">programs</h4>
						<?php 
					   wp_nav_menu([
					     'menu'            => 'programs',
					     'theme_location'  => 'programs',
					     'menu_id'         => false,
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4navwalker::fallback',
					     'walker'          => new bs4navwalker()
					   ]); 
					  ?>					
					</div>
					<div class="col-6 col-lg-4 get involved">
						<h4 class="overlay__title">get involved</h4>						
						<?php 
					   wp_nav_menu([
					     'menu'            => 'involved',
					     'theme_location'  => 'involved',
					     'menu_id'         => false,
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4navwalker::fallback',
					     'walker'          => new bs4navwalker()
					   ]); 
					  ?>					
					</div>
					<div class="col-6 col-lg-4 news">
						<h4 class="overlay__title">news & events</h4>						
						<?php 
					   wp_nav_menu([
					     'menu'            => 'news',
					     'theme_location'  => 'news',
					     'menu_id'         => false,
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4navwalker::fallback',
					     'walker'          => new bs4navwalker()
					   ]); 
					  ?>					
					</div>
					<div class="col-6 col-lg-4 about">
						<h4 class="overlay__title">about us</h4>						
						<?php 
					   wp_nav_menu([
					     'menu'            => 'about',
					     'theme_location'  => 'about',
					     'menu_id'         => false,
					     'depth'           => 2,
					     'fallback_cb'     => 'bs4navwalker::fallback',
					     'walker'          => new bs4navwalker()
					   ]); 
					  ?>					
					</div>
					<div class="col-6 col-lg-4 contact">
						<h4 class="overlay__title">contact us</h4>						
						<?php 
					   wp_nav_menu([
					     'menu'            => 'contact',
					     'theme_location'  => 'contact',
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
