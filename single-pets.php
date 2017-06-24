<?php
/*
 * Template Name: Pets
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
							<h4 class="subheader">
								<?php the_field('content_subheader'); ?>
							</h4>
							<h1 class="title">
								<?php the_field('content_title') ?>
							</h1>
							<hr>
							<p class="subtitle">
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
			<!-- Pets Carousel -->
			<?php $section_posts =  new WP_Query ( array(
				'post_type' => 'pets',
				'posts_per_page' => 4
				)
			); ?>
			<div class="section__posts adopt">
				<h2 class="section__posts__title">
					available pets
					<br>
					<hr>
				</h2>
				<!-- Posts Carousel Loop -->
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="owl-carousel post-carousel owl-theme">
								<?php if ( $section_posts->have_posts() ) : ?>
									<?php while ( $section_posts->have_posts() ) : $section_posts->the_post(); ?>
											<div class="item">
												<div class="section__post">
													<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
														<h3 class="title">
																<span>
																	<?php the_title(); ?>
																</span>
														</h3>
													</a>
												</div>
												<a href="<?php the_permalink(); ?>" class="learn-more">learn more</a>
											</div>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>				
				<div class="quote container">
					<div class="row">
						<div class="col-10 offset-1">
							<h5 class="quote__bg">
								success
							</h5>
							<div class="row">
								<div class="col-3 col-md-1 quote__icon">
										<img class="" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/quote-adopt.png" alt="">
								</div>
								<div class="col-9 col-md-11">									
									<h4 class="quote__text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugiat similique error impedit ut fuga nisi voluptate veritatis nihil quas ipsam vel sunt alias tempora laboriosam quia ipsum ab assumenda.
										<a href="#" class="quote__link">[read more]</a>
									</h4>							
								</div>
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
