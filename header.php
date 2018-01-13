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
          <a class="navbar__brand" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
          <button class="navbar__button" type="button">
            <a href="#" class="js-menu-open"></a>
          </button>
        </nav>
        <div class="overlay overlay-slidedown">
          <nav>
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
            </nav>
          </div>
        <?php if ( is_front_page() || is_home() ) {
          // get_template_part('partials/acf-slider');
        } ?>
      </header>