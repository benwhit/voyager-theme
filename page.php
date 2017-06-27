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

<?php if ( ! has_acf() ) : ?>
	<div class="page__header container" style="<?php if (get_field('header_image')) { ?>
				background-image: url(<?php the_field('header_image') ?>);" <?php } ?>">
<?php else : ?>
	<div class="page__header container">
<?php endif; ?>
	<h1 class="page__title">
		<?php the_title(); ?>
	</h1>
	<hr>
</div>
<div id="primary" class="content-area container">
  <main id="main" class="site-main row" role="main">
    <section class="page-content col-12">
      <?php
      if ( ! has_acf() ):
        if( have_rows('flexible_content') ):
          while ( have_rows('flexible_content') ) : the_row();
            // Category Section Layout
            if( get_row_layout() == 'category_section' )
              get_template_part('partials/category-section');
            // Posts Section
            if( get_row_layout() == 'posts_carousel' )
              get_template_part('partials/posts-carousel');
            // Quote Layout
            if (get_row_layout() == 'quote')
              get_template_part('partials/quote');
            // Donate Button
            if (get_row_layout() == 'donate')
              get_template_part('partials/donate');
          endwhile;
        endif;
      else :
      	while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
      endif;
      ?>
    </section>
  </main>
</div>
<?php
get_footer();
