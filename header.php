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
	</header>

	<div id="content" class="site-content">
