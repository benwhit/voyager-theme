<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Voyager_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'voyager-theme' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar sticky-top navbar-inverse">
		   <div class="container">
		   	<div class="row">
		   		<div class="col-6 col-sm-8">		   			
		   			<a class="navbar-brand" href="#">Navbar</a>
		   			<span>
		   				no tail left behind.
		   			</span>
		   		</div>
		   		<div class="col-2 hidden-sm-down">
		   			<p class="navbar__donate">
		   				<a href="/donate">donate</a>
		   			</p>
		   		</div>
		   		<div class="col-6 col-sm-2">
		   			<p class="pull-right">	   				
			   			<button id="trigger-overlay" type="button">
			   				<i class="fa fa-bars"></i>
			   				menu
			   			</button>
		   			</p>
		   		</div>
		   	</div>
		   </div>
		 <div class="overlay overlay-slidedown">
		 	<div class="container">
		   	<div class="row">
		   		<div class="col-6 col-sm-8">		   			
		   			<a class="navbar-brand" href="#">Navbar</a>
		   			<span>
		   				no tail left behind.
		   			</span>
		   		</div>
		   		<div class="col-2 hidden-sm-down">
		   			<p class="navbar__donate">
		   				<a href="/donate">donate</a>
		   			</p>
		   		</div>
		   		<div class="col-6 col-sm-2">
		   			<p class="pull-right">	   				
			   			<button id="trigger-overlay" class="overlay-close" type="button">
			   				<i class="fa fa-times"></i>
			   				menu
			   			</button>
		   			</p>
		   		</div>
		   	</div>
		 	</div>
				<nav>
				<div class="row">
					<div class="col-md-4 col-lg-2 adopt">
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
					<div class="col-md-4 col-lg-2 programs">
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
					<div class="col-md-4 col-lg-2 get involved">
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
					<div class="col-md-4 col-lg-2 news">
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
					<div class="col-md-4 col-lg-2 about">
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
					<div class="col-md-4 col-lg-2 contact">
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
			</nav>
		</div>
		</nav>

		 <?php if ( is_front_page() || is_home() ) : ?>
		 	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

		 		<!-- Count Slides, Display Indicators -->
		 		<ol class="carousel-indicators">
		 			<?php if (have_rows('flexible_slider')) :
		 			$count = 0; ?>
					  <?php // count slides
					    while (have_rows('flexible_slider')) :
					    	the_row();
					    $count++; ?>
					    <?php if ( $count == 1 ) { ?>
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
					    	<?php if( get_sub_field('slider_title') != '' ): ?>
					    		<h5>
					    			<?php the_sub_field('slider_title') ?>
					    		</h5>
					    	<?php endif; ?>
					    </li>
					    <?php } else { ?>
					    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count - 1  ?>" class="">					    	
					    	<?php if( get_sub_field('slider_title') != '' ): ?>
					    		<h5>
					    			<?php the_sub_field('slider_title') ?>
					    		</h5>
					    	<?php endif; ?>
					    </li>
					    <?php } ?>
					  <?php endwhile; ?>
					<?php endif; ?>
				</ol>

				<!-- Display Slides -->
				<div class="carousel-inner" role="listbox">
					<?php if (have_rows('flexible_slider')) :
					$count = 0; ?>
				    <?php // display slides
				    while (have_rows('flexible_slider')) :
				    	the_row();
				    	$count++; ?>					   
					    <div class="carousel-item adopt <?php if ($count == 1){ echo 'active'; } ?>" style="background-image: url(<?php if( get_sub_field('slider_image') != '' ){ the_sub_field('slider_image'); } ?> );">
  							<div class="carousel-caption d-md-block">
					    	<?php if( get_sub_field('slider_title') != '' ): ?>
					    		<h1 class="title">
					    			<?php the_sub_field('slider_title') ?>
					    		</h1>
					    	<?php endif; ?>
					    	<hr>
					    	<?php if( get_sub_field('slider_content') != '' ): ?>
					    		<p class="topic">
					    			<?php the_sub_field('slider_content') ?>
					    		</p>
					    	<?php endif; ?>
					    	<a href="#" class="btn btn-primary">Learn More</a>
					    	</div>
					    </div>
					  <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>

	</header>

	<div id="content" class="site-content">
