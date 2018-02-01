<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voyager_Theme
 */

get_header(); ?>

<div class="page__header container">
	<h1 class="page__title">
		<?php the_title(); ?>
	</h1>
	<hr>
</div>
<div id="primary" class="content-area container">
  <main id="main" class="site-main row" role="main">
    <section class="page-content col-12">
      <?php
      while ( have_posts() ) : the_post();
       get_template_part( 'partials/content', 'page' );
       if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile;
    ?>
  </section>
</main>
</div>
<?php
get_footer();
