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
  <div class="container">
    <div class="row">
      <div class="col-12">
        <section class="page-content">
            <?php
              while ( have_posts() ) : the_post();
                get_template_part( 'partials/content', 'page' );
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;
              endwhile;
            ?>
          </section>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
