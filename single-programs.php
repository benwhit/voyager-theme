<?php
/*
 * Template Name: Programs
 * Template Post Type: post, page
 *
 * @package Voyager_Theme
 */

 get_header();  ?>

	
	<div class="page__header programs" style="<?php if( get_field('field_name') ): ?>background-image: url(<?php the_field('header_image') ?>)<?php endif; ?>">
		<div class="container">			
			<div class="row">
				<div class="col-12">
					<h1 class="page__title">
						<?php the_title(); ?>
					</h1>
					<hr>	
				</div>
			</div>
		</div>
	</div>
	<div id="primary" class="content-area programs">
		<img class="bg-image" src="<?php echo the_field('page_background'); ?>" alt="">
		<main id="main" class="site-main container" role="main">
			<section>
				<div class="row">
					<div class="col-12">
						<p class="return">
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							return to
							<a href="<?php echo get_site_url(); ?>">home</a>
						</p>
					</div>
				</div>
			</section>
			<section class="page-content programs">
				<div class="row">
					<div class="col-12">
						<?php if ( get_field('lead_image') != '' ) : ?>
							<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
							<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-10 programs">
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
							<header>
								<h4 class="subheader">
									<?php the_field('subheader'); ?>
								</h4>
								<h1 class="title">
									<?php the_field('title') ?>
								</h1>
								<hr>
								<p class="subtitle">
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

				<!-- Posts Carousel Block -->
				<?php
					$programs =  new WP_Query ( array(
						'post_type' => 'programs',
						'posts_per_page' 	=> 8
					));
				?>
				<div class="section__posts programs">
							<h2 class="section__posts__title">
								ongoing initiatives     
							</h2>
							<hr>			
									<div class="owl-carousel post-carousel owl-theme">
										<?php if ( $programs->have_posts() ) : ?>
											<?php while ( $programs->have_posts() ) : $programs->the_post(); ?>

													<div class="section__post item">								
														<a href="" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');"></a>								
														<h3 class="title">
															<a href="<?php the_permalink(); ?>">
																<?php the_title(); ?>
															</a>
														</h3>
													</div>

											<?php endwhile; ?>
											<?php wp_reset_postdata(); ?>
										<?php endif; ?>
							  </div>
				</div>

				 <!-- Quote Block -->
				<div class="quote container">
					<div class="row">
						<div class="col-10 offset-1">
							<h5 class="quote__bg">
								success
							</h5>
							<div class="row">
								<div class="col-3 col-md-1 quote__icon">
										<img class="" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/quote-programs.png" alt="">
								</div>
								<div class="col-9 col-md-11">									
									<h4 class="quote__text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugiat similique error impedit ut fuga nisi voluptate veritatis nihil quas ipsam vel sunt alias tempora laboriosam quia ipsum ab assumenda.
									</h4>							
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>			
		</main>
	</div>

<?php
get_footer();
