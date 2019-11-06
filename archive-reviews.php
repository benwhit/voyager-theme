<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */

get_header();
?>

<div class="mt-12" id="content" tabindex="-1">
	<div class="container">
		<header class="page-header">
			<h1>Our Reviews</h1>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header><!-- .page-header -->
		<div class="row">
			<main class="site-main col-12 col-lg-9" id="main">
				<?php if ( have_posts() ) : ?>


					<div class="row">
						<?php
						while ( have_posts() ) :
							the_post();

		            if ( has_post_format( 'video' )) {
									get_template_part( 'partials/content-reviews', get_post_format() );
								} elseif ( has_post_format( 'aside' )) {
									get_template_part( 'partials/content-reviews', get_post_format() );
								} else {
									get_template_part( 'partials/content', get_post_type() );
								}

						endwhile;

						the_posts_navigation();

						else :

							get_template_part( 'partials/content', 'none' );

						endif;
					?>
				</div>
			</main><!-- #main -->
			<div class="col-12 col-lg-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div><!-- #primary -->
</div>

<?php
get_footer();
