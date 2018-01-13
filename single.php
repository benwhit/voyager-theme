<?php
/*
 * The template for displaying all single posts
 *
 * @package Voyager_Theme
 */

get_header(); ?>


<div class="page__header">
	<h1 class="page__title">
		<?php the_title(); ?>
		<br>
		<hr>
	</h1>
</div>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main>
</div>

<?php
get_footer();
