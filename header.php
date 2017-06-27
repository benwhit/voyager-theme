<?php
/**
* The header for our theme
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
              <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
              <br>
              <span class="navbar__tag">
                <?php echo get_bloginfo('description'); ?>
              </span>
            </div>
            <div class="col-6 col-sm-4">
              <button id="trigger-overlay" class="pull-right overlay-close" type="button">
                <i class="fa fa-bars"></i>
                menu
              </button>
            </div>
          </div>
        </div>
        <div class="overlay overlay-slidedown">
          <nav class="container">
            <div class="row">
              <div class="col-12 col-sm-8 offset-sm-2">
                <h4 class="overlay__title">Menu</h4>
                <?php
                wp_nav_menu([
                  'menu'            => 'top',
                  'theme_location'  => 'top',
                  'container_class' => 'flex-column',
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
        <?php if ( ! has_acf() ) {
          get_template_part('partials/slider');
        } ?>
      </header>

      <div id="content" class="site-content">
