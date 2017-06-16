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

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="page-content">
			<?php
			if( have_rows('flexible_content') ):
				while ( have_rows('flexible_content') ) : the_row();

				// Category Section Layout
				if( get_row_layout() == 'category_section' ): ?>

					<article class="<?php echo get_sub_field('category') ?>">
						<img class="bg-image" src="<?php echo get_sub_field('background_image'); ?>" alt="">
						<div class="container">
							<div class="row">
									<div class="<?php if ( get_sub_field('image_display') == 'left' ){ echo 'col-sm-12 col-lg-5'; } else { echo 'col-sm-6 col-lg-5 offset-lg-1 flex-last'; } ?>">
										<img class="page__lead__img" src="<?php echo get_sub_field('image'); ?>" alt="">									
										<?php if ( get_sub_field('image_display') == 'left' ){ ?>
											<img class="accent-left" src="./wp-content/themes/voyager-theme/images/accent-left.png" alt="">
										<?php } else { ?>
											<img class="accent-right" src="./wp-content/themes/voyager-theme/images/accent-right.png" alt="">
										<?php } ?>
									</div>
									<div class="col-sm-6 <?php if ( get_sub_field('image_display') == 'left' ){ echo 'offset-lg-1'; } ?>">
										<header>
											<h4 class="subtitle">
												<?php echo get_sub_field('subheader'); ?>
											</h4>
											<h1 class="title">
												<?php echo get_sub_field('title') ?>
											</h1>
										</header>
										<hr>
										<p class="topic">
											<?php echo get_sub_field('subtitle'); ?>
										</p>
										<p>
											<?php echo get_sub_field('content'); ?>
										</p>
										<?php if( get_sub_field('button') ): ?>
											<a href="#" class="btn btn-primary"><?php echo get_sub_field('button'); ?></a>
										<?php endif; ?>
									</div>
							</div>
						</div>
					</article>
					<div class="container section__posts <?php echo get_sub_field('category') ?>">
						<?php $section_posts =  new WP_Query ( array(
							'cat' => get_sub_field('posts'),
							'posts_per_page' => 4
							)
						); ?>
						<h2 class="section__posts__title">
							<?php echo get_sub_field('posts_title') ?>
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
			

			<?php // Quote Layout
				elseif (get_row_layout() == 'quote') : ?>
				
					<div class="quote container <?php echo get_sub_field('category_color') ?>">
						<div class="row">
							<div class="col-10 offset-1">
								<h5 class="quote__bg">
									success
								</h5>
								<div class="row">
									<div class="col-3 col-md-1 quote__icon">
										<?php if ( get_sub_field('category_color') == 'adopt' ) : ?>
											<img class="" src="./wp-content/themes/voyager-theme/images/quote-adopt.png" alt="">
										<?php elseif ( get_sub_field('category_color') == 'programs') : ?>
											<img class="" src="./wp-content/themes/voyager-theme/images/quote-programs.png" alt="">
										<?php endif; ?>
									</div>
									<div class="col-9 col-md-11">									
										<h4 class="quote__text">
											<?php echo get_sub_field('quote_text') ?>
										</h4>							
									</div>
								</div>
							</div>
						</div>
					</div>

			<?php endif; ?>

			<?php
			endwhile;
			endif; 
			?>


			<article class="about">
				<img src="http://pwc.dev/wp-content/uploads/2017/06/contact-bg.png" alt="" class="bg-image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<img class="page__lead__img" src="http://pwc.dev/wp-content/uploads/2017/06/contact.jpg" alt="">
							<img class="accent-left" src="./wp-content/themes/voyager-theme/images/accent-left.png" alt="">	
						</div>
						<div class="col-sm-6">
							<header>
								<h4 class="subtitle">
									get to know our organization
								</h4>
								<h1 class="title">
									about us
								</h1>
							</header>
							<hr>
							<p class="topic">
								two lines of text that entices people to adopting a pet
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet augue et tellus convallis finibus. Maecenas elementum tortor sed ligula varius elementum. Mauris semper libero sed ante facilisis imperdiet id eu eros. 
							</p>
							<a href="#" class="btn btn-primary">view all news</a>						
						</div>
						<div class="col-sm-6">
							<header>
								<h4 class="subtitle">
									we want to hear from you...
								</h4>
								<h1 class="title">
									contact us
								</h1>
							</header>
							<hr>
							<p class="topic">
								we're standing by to assist you in your area of animal need!
							</p>
							<table>
								<tr>
									<td>Call Us:</td>
									<td>(703) 634-0880</td>
								</tr>
								<tr>
									<td>Email Us:</td>
									<td>info@pwhumane.org</td>
								</tr>
								<tr>
									<td>Visit Us:</td>
									<td>17983 Dumfries Shopping Plaza, <br> Dumfries, Virginia 22026</td>
								</tr>
							</table>
							<a href="#" class="btn btn-primary">contact us</a>
						</div>
					</div>
				</div>
			</article>

		</section>
	</main>
</div>

<?php
get_footer();
