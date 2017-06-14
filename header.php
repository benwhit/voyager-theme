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
		<nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded">
		   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
		     <span class="navbar-toggler-icon"></span>
		   </button>
		   <div class="container">
	   			<a class="navbar-brand" href="#">Navbar</a>
	   			<span>
	   				no tail left behind.
	   			</span>
		   </div>
		   <?php
		   wp_nav_menu([
		     'menu'            => 'top',
		     'theme_location'  => 'top',
		     'container'       => 'div',
		     'container_id'    => 'bs4navbar',
		     'container_class' => 'collapse navbar-collapse',
		     'menu_id'         => false,
		     'menu_class'      => 'navbar-nav mr-auto',
		     'depth'           => 2,
		     'fallback_cb'     => 'bs4navwalker::fallback',
		     'walker'          => new bs4navwalker()
		   ]);
		   ?>
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
					   
					    <div class="carousel-item adopt <?php if ($count == 1){ echo 'active'; } ?>">
					    	<?php if( get_sub_field('slider_image') != '' ){ ?>
					    		<img class="d-block" src="<?php the_sub_field('slider_image') ?>" alt="Slide">
					    	<?php } ?>
  							<div class="carousel-caption d-none d-md-block">
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

				<!-- Slider Arrows -->
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>
		<?php endif; ?>

	</header>

	<div id="content" class="site-content">
