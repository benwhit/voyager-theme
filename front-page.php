<?php
/**
 * Static Front Page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Voyager_Theme
 */
get_header();
?>

<main id="main" class="site-main" role="main">
  <section id="content" class="page-content">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      get_template_part( 'partials/content', 'page' );
    endwhile; else:
        // no posts found
    endif;
    ?>
  </section>
</main>
</div>


<div class="container">
  <div class="row">
    <div class="col-6"></div>
    <div class="col-6"></div>
  </div>
</div>


<?php
get_footer();
