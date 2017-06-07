<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Voyager_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area container">
		<main id="main" class="site-main row" role="main">
			<setion class="col-sm-8">
				<?php
				if ( have_posts() ) : ?>
					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'voyager-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'search' );
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</setion>
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</main>
	</section>

<?php
get_footer();
