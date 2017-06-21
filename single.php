<?php
/*
 * The template for displaying all single posts
 *
 * @package Voyager_Theme
 */
 
 get_header();  ?>

	
	<div class="page__header <?php echo the_field('category') ?>" style="<?php if( get_field('field_name') ): ?>background-image: url(<?php the_field('header_image') ?>)<?php endif; ?>">
		<h1 class="page__title">
			<?php the_title(); ?>
			<br>
			<hr>	
		</h1>
	</div>
	<div id="primary" class="content-area <?php echo the_field('category') ?>">
		<main id="main" class="site-main container" role="main">
			<section>
				<div class="row">
					<div class="col-12">
						<p class="return">
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							return to
							<a href="/">available animals</a>
						</p>
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="row">
					<div class="col-12">
						<?php if ( get_field('lead_image') != '' ) : ?>
							<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
							<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-10 <?php echo the_field('category') ?>">						
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
							<header>
								<h4 class="subtitle">
									<?php the_field('subheader'); ?>
								</h4>
								<h1 class="title">
									<?php the_field('title') ?>
								</h1>
								<hr>
								<p class="topic">
									<?php the_field('subtitle'); ?>
								</p>
							</header>

							<div class="entry-content">
								<?php
								the_field('content');

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-theme' ),
									'after'  => '</div>',
									) );
								?>
							</div>
						</article>
					</div>
				</div>

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
