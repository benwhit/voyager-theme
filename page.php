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
	<div class="page__header">
		<img src="<?php the_field('header_image'); ?>" alt="">
		<h1 class="page__title"><?php the_title(); ?></h1>
		<hr>	
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
			<section>
				<div class="row">
					<div class="col-sm-12">
						<p class="return">
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							return to
							<a href="/">home</a>
						</p>
						<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="row">
					<div class="col-sm-8">
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
						?>
					</div>
					<aside class="offset-sm-1 col-sm-3">
						<?php get_sidebar(); ?>
					</aside>
			</section>			
		</main>
	</div>

<?php
get_footer();
