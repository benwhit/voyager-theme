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

				if( get_row_layout() == 'category_section' ): ?>
				<article class="<?php echo get_sub_field('category') ?>">
					<img class="bg-image" src="<?php echo get_sub_field('background_image'); ?>" alt="">
					<div class="container">
						<div class="row">

								<div class="<?php if ( get_sub_field('image_display') == 'left' ){ echo 'col-sm-12 col-lg-5'; } else { echo 'col-sm-6 col-lg-5 offset-lg-1 flex-last'; } ?>">
									<img class="page__lead" src="<?php echo get_sub_field('image'); ?>" alt="">
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

			<?php endif;
			endwhile;
			endif; 
			?>

			<!-- Get Involved -->
		</section>
	</main>
</div>

<?php
get_footer();
