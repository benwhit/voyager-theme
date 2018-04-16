<?php
/**
* Default Header
*
* @package Voyager_Theme
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Description" content="<?php echo get_bloginfo('description'); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'voyager-theme' ); ?></a>
    <header id="masthead" class="site-header" role="banner">
      <nav class="navbar sticky-top navbar-inverse">
        <div class="container">
          <a class="navbar__brand" href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
          <a class="navbar__button" href="#" class="js-menu-open" title="Open Menu Button"></a>
        </div>
      </nav>
      <div class="overlay overlay-slidedown">
        <nav>
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