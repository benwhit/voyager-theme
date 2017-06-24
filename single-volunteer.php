<?php
/*
 * Template Name: Volunteer
 * Template Post Type: post
 *
 * @package Voyager_Theme
 */

 get_header();  

	$involved =  new WP_Query ( array(
		'post_type' => 'volunteer',
		'posts_per_page' 	=> 8
	));

?>

<div class="page__header involved" style="<?php if (get_field('header_image')) { ?>
			background-image: url(<?php the_field('header_image') ?>);" <?php } ?>">
	<h1 class="page__title">
		<?php the_title(); ?>
	</h1>
	<hr>	
</div>		
<div id="primary" class="content-area involved">
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
		<section class="page-content involved">
			<div class="row">
				<div class="col-12">
					<?php if ( get_field('lead_image') != '' ) : ?>
						<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
						<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-10 involved">
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
							<?php the_field('content');

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-theme' ),
								'after'  => '</div>',
								) );
							?>
						</div>
					</article>
				</div>
			</div>
			<div class="section__posts involved">
				<h2 class="section__posts__title">
					ongoing initiatives     
				</h2>
				<hr>			
				<div class="owl-carousel post-carousel owl-theme">
					<?php if ( $involved->have_posts() ) : ?>
						<?php while ( $involved->have_posts() ) : $involved->the_post(); ?>
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
			<div class="donate container <?php echo get_sub_field('category_color') ?>">
				<div class="row">
					<div class="col-12">
						<h5 class="donate__bg">
							donate
						</h5>						
						<a href="" class="donate__button btn btn-primary">
							donate now
						</a>	
					</div>
				</div>
			</div>
		</section>			
	</main>
</div>
<?php
get_footer();
