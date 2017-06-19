<?php
/*
 * Template Name: Pet
 * Template Post Type: post
 *
 * @package Voyager_Theme
 */
 
 get_header();  ?>

	
	<div class="page__header adopt" style="<?php if( get_field('field_name') ): ?>background-image: url(<?php the_field('header_image') ?>)<?php endif; ?>">
		<h1 class="page__title">
			<?php the_title(); ?>
			<br>
			<hr>	
		</h1>
	</div>
	<div id="primary" class="content-area adopt">
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
					<div class="col-md-6 col-12">						
						<img class="page__lead" src="<?php the_field('pet_image'); ?>" alt="">
						<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
					</div>
					<div class="adopt col-md-5 offset-md-1 col-12 offset-0">						
						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
							<header>
								<h4 class="subtitle">
									<?php the_field('content_subheader'); ?>
								</h4>
								<h1 class="title">
									<?php the_field('content_title') ?>
								</h1>
								<hr>
								<p class="topic">
									<?php the_field('content_subtitle'); ?>
								</p>
							</header>

							<div class="entry-content">
								<?php
								the_field('content_paragraph');

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-theme' ),
									'after'  => '</div>',
									) );
								?>
							</div>
						</article>
					</div>
				</div>
				<div class="row pet__details">
					<div class="col-4 col-md-2 pl-0 pet__details--age">
						<?php the_field('pet_age'); ?>
						<h5>Age</h5>
					</div>
					<div class="col-4 col-md-2 pl-0 pet__details--size">
						<?php the_field('pet_size'); ?>
						<h5>Size</h5>
					</div>
					<div class="col-4 col-md-2 pl-0 pet__details--av">
						<?php the_field('pet_availability'); ?>
						<h5>Available</h5>
					</div>
					<div class="col-md-5 col-12 offset-1">
						<a href="#" class="btn btn-primary">
							adopt me
						</a>
					</div>
				</div>
				<div class="container section__posts adopt">
						<?php $section_posts =  new WP_Query ( array(
							'cat' => 'adoption',
							'posts_per_page' => 4
							)
						); ?>
						<h2 class="section__posts__title">
							available pets
							<br>
							<hr>
						</h2>
						<div class="row">
							<?php if ( $section_posts->have_posts() ) : ?>
								<?php while ( $section_posts->have_posts() ) : $section_posts->the_post(); ?>
									<div class="col-lg-3 col-sm-6">								
										<article class="section__post">								
											<a href="" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');"></a>								
											<h3 class="title">
												<a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h3>
										</article>
									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
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
