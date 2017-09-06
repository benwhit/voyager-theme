<?php
/*
 * Template Name: News
 * Template Post Type: post
 *
 * @package Voyager_Theme
 */

get_header(); ?>

<div class="page__header news" style="<?php if (get_field('header_image')) { ?>
			background-image: url(<?php the_field('header_image') ?>);" <?php } ?>">
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
		<section class="page-content news">
			<div class="row">
				<div class="col-12">
					<?php if ( get_field('lead_image') != '' ) : ?>
						<img class="page__lead" src="<?php the_field('lead_image'); ?>" alt="">
						<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="" class="accent-left">
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-10 offset-md-1 news">
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
		</section>
	</main>
</div>
<?php
get_footer();
