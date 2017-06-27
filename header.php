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
            <button id="trigger-overlay" class="pull-right" type="button">
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
              <h4 class="overlay__title"></h4>
              <?php
              wp_nav_menu([
               'menu'            => 'top',
               'theme_location'  => 'top',
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

     <?php if ( !has_acf() ) : ?>
      <!-- ACF Slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- count slides, display indicators for each slide -->
        <ol class="carousel-indicators">
          <?php if (have_rows('flexible_slider')) :
          $count = 0;
          while (have_rows('flexible_slider')) :
            the_row(); $count++;
          if ( $count == 1 ) { ?>
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
          <?php }
          endwhile;
          endif; ?>
        </ol>
        <!-- display sliders -->
        <div class="carousel-inner" role="listbox">
          <?php if (have_rows('flexible_slider')) :
          $count = 0;
          while (have_rows('flexible_slider')) :
            the_row(); $count++; ?>
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
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  <?php endif; ?>
</header>

<div id="content" class="site-content">
