<?php
/**
 * Template Name: News & Events
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voyager_Theme
 */

get_header(); 

	$cat_one_title = get_term( get_field('category_one') );
	$category_one =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'cat' 						=> get_field('category_one')
	));
	$cat_two_title = get_term( get_field('category_two') );
	$category_two =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'cat' 						=> get_field('category_two')
	));
	$cat_three_title = get_term( get_field('category_three') );
	$category_three =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'cat' 						=> get_field('category_three')
	));
	$cat_four_title = get_term( get_field('category_four') );
	$category_four =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'cat' 						=> get_field('category_four')
	));

?>

	<div class="page__header news" style="<?php if (get_field('header_image')) { ?>
			background-image: url(<?php the_field('header_image') ?>); <?php } ?>">
		<h1 class="page__title">
			<?php the_title(); ?>
		</h1>
		<hr>
	</div>
	
	<div id="primary" class="content-area news">
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
			<section class="page-content">
				<div class="row">
					<div class="col-12 col-md-6">
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
					<div class="col-12 col-md-5 offset-md-1">
						<?php if ( get_field('lead_image') != '' ) : ?>
							<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
							<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
						<?php endif; ?>
					</div>
				</div>
				<div class="container section__posts <?php echo get_sub_field('category_color') ?>">		
					<h2 class="section__posts__title">
						recent updates
					</h2>
					<hr>
					<div id="filters" class="button-group">
						  <button class="button is-checked" data-filter="*">
								view all
						  </button>
						<?php if (get_field('category_one')) : ?>
						  <button class="button is-checked" data-filter=".category-one">
								<?php echo $cat_one_title->name ?>
						  </button>
						<?php endif; ?>
						<?php if (get_field('category_two')) : ?>
						  <button class="button" data-filter=".category-two">
						  	<?php echo $cat_two_title->name ?>
						  </button>
						<?php endif; ?>
						<?php if (get_field('category_three')) : ?>
						  <button class="button" data-filter=".category-three">
						  	<?php echo $cat_three_title->name ?>
						  </button>
						<?php endif; ?>
						<?php if ( get_field('category_four') ) : ?>
						  <button class="button" data-filter=".category-four">
						  	<?php echo $cat_four_title->name ?>
						  </button>
						<?php endif; ?>
					</div>
					<div class="grid">
						<!-- Category One -->
						<?php if ( $category_one->have_posts() ) : ?>
							<?php while ( $category_one->have_posts() ) : $category_one->the_post(); ?>
								<div class="grid__item category-one">						
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
						<!-- Category Two -->
						<?php if ( $category_two->have_posts() ) : ?>
							<?php while ( $category_two->have_posts() ) : $category_two->the_post(); ?>
								<div class="grid__item category-two">						
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
						<!-- Category Three -->
						<?php if ( $category_three->have_posts() ) : ?>
							<?php while ( $category_three->have_posts() ) : $category_three->the_post(); ?>
								<div class="grid__item category-three">						
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
						<!-- Category Four -->
						<?php if ( $category_four->have_posts() ) : ?>
							<?php while ( $category_four->have_posts() ) : $category_four->the_post(); ?>
								<div class="grid__item category-four">
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
			</section>			
		</main>
	</div>

<?php
get_footer();
