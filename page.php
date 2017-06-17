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
	<div class="page__header  <?php echo the_field('category') ?>">
		<img src="<?php the_field('header_image'); ?>" alt="">
		<h1 class="page__title"><?php the_title(); ?></h1>
		<hr>	
	</div>
	<div id="primary" class="content-area <?php echo the_field('category') ?>">


		<main id="main" class="site-main container" role="main">
			<?php if ( get_field('page_background') ) : ?>
				<img class="bg-image" src="<?php the_field('page_background'); ?>" alt="" />	
			<?php endif; ?>
			<section>
				<div class="row">
					<div class="col-12">
						<p class="return">
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							return to
							<a href="/">home</a>
						</p>
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="col-sm-12">
				<?php if ( get_field('lead_image') ) : ?>
					<img class="accent-left" src="./wp-content/themes/voyager-theme/images/accent-left.png" alt="">	
					<img class="page__lead__img" src="<?php the_field('lead_image'); ?>" alt="">
				<?php endif; ?>
				</div>
				<div class="row">
					<div class="col-sm-7 pl-5">

						<!-- Content Loop -->
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
						?>
					</div>
					<aside class="offset-sm-2 col-sm-3">
						<?php get_sidebar(); ?>
					</aside>
					<div class="col-12">						
						<!-- Flexible Content -->
						<?php
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
							if (get_row_layout() == 'quote')
								get_template_part('partials/quote');

						endwhile;
						endif; 
						?>
					</div>
			</section>			
		</main>
	</div>

<?php
get_footer();
