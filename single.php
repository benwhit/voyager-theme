<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Voyager_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main row" role="main">
			<setion class="col-sm-8">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					the_post_navigation();
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;
				?>
			</setion>		
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</main>
	</div>

<?php
get_footer();
