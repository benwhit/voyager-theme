<?php
/**
 * Template Name: Adopt
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
	<div class="page__header adopt" style="<?php if (get_field('header_image')) { ?>
			background-image: url(<?php the_field('header_image') ?>);" <?php } ?>>
		<h1 class="page__title">
			<?php the_title(); ?>
			<br>
			<hr>	
		</h1>
	</div>
	<div id="primary" class="content-area adopt">
		<main id="main" class="site-main" role="main">
			<section class="container">
				<div class="row">
					<div class="col-sm-12">
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
				<?php
				if( have_rows('flexible_content') ):
					while ( have_rows('flexible_content') ) : the_row();

					// Category Section Layout
					if( get_row_layout() == 'category_section' )
						get_template_part('partials/category-section');

					// Posts Carousel
					if( get_row_layout() == 'posts_carousel' )
						get_template_part('partials/posts-carousel');

					// Posts Block
					if( get_row_layout() == 'posts_block' )
						get_template_part('partials/posts-block');

					// Quote Layout
					if (get_row_layout() == 'quote')
						get_template_part('partials/quote');

					// Donate Button
					if (get_row_layout() == 'donate')
						get_template_part('partials/donate');

				endwhile;
				endif; 
				?>
			</section>			
		</main>
	</div>

<?php
get_footer();
