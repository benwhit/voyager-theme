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

$section_one_posts =  new WP_Query ( array(
		'cat' => get_field('section_one_posts'),
		'posts_per_page' => 4
	)
); ?>

<div class="page__header">
	<img src="<?php the_field('header_image'); ?>" alt="">
	<h1 class="page__title"><?php the_title(); ?></h1>
	<hr>
</div>
<div id="primary" class="content-area">
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
			<article id="post-<?php the_ID(); ?>" class="<?php echo get_field('content_category')?> ">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-6">
							<header>
								<h4 class="subtitle">
									<?php the_field('content_subtitle'); ?>
								</h4>
								<h1 class="title">
									<?php the_field('content_title') ?>
								</h1>
							</header>
							<hr>
							<p class="topic">
								<?php the_field('content_topic'); ?>
							</p>
							<p><?php
								while ( have_posts() ) : the_post();
								the_content(); 
								endwhile;
								?>
							</p>
							<a href="#" class="btn btn-secondary">view our pets</a>
						</div>
						<div class="col-sm-12 col-lg-5 offset-lg-1">
							<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
						</div>
					</div>
				</div>
			</article>
			<!-- Adopt a Pet -->
			<article class="<?php echo get_field('section_one_category') ?>">
				<img class="bg-image" src="<?php echo the_field('section_one_background_image'); ?>" alt="">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-lg-5">
							<img class="page__lead" src="<?php the_field('section_one_image'); ?>" alt="">
						</div>
						<div class="col-sm-6 col-lg-6 offset-lg-1">
							<header>
								<h4 class="subtitle">
									<?php the_field('section_one_subtitle'); ?>
								</h4>
								<h1 class="title">
									<?php the_field('section_one_title') ?>
								</h1>
							</header>
							<hr>
							<p class="topic">
								<?php the_field('section_one_topic_title'); ?>
							</p>
							<p>
								<?php the_field('section_one_content'); ?>
							</p>
							<?php if( get_field('section_one_button') ): ?>
								<a href="#" class="btn btn-primary">view our pets</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</article>
			<div class="container section__posts <?php echo get_field('section_one_category') ?>">
				<h2 class="section__posts__title">
					<?php the_field('section_one_posts_title') ?>					
					<hr>
				</h2>
				<div class="row">
					<?php if ( $section_one_posts->have_posts() ) : ?>
						<?php while ( $section_one_posts->have_posts() ) : $section_one_posts->the_post(); ?>
							<div class="col-lg-3 col-sm-6 col-xs-12">								
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
			<!-- Get Involved -->
		</section>
	</main>
</div>

<?php
get_footer();
