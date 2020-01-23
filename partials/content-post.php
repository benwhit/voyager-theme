<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 col-lg-4 d-flex'); ?>>

	<!-- Card -->
	<div class="card mb-6 shadow-light-lg lift lift-lg">

		<!-- Image -->
		<a class="card-img-top" href="<?php echo get_permalink(); ?>">

			<!-- Image -->
			<?php echo the_post_thumbnail($post_id, 'large', array('class' => 'card-img-top')); ?>

			<!-- Shape -->
			<div class="position-relative">
				<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
					<svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"></path>
					</svg>
				</div>
			</div>

		</a>

		<!-- Body -->
		<a class="card-body" href="<?php echo get_permalink(); ?>">

			<!-- Heading -->
			<?php the_title( '<h3>', '</h3>'); ?>


			<!-- Text -->
			<p class="mb-0">
				<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
			</p>

				<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-starter' ),
					'after'  => '</div>',
				) );
				?>

		</a>

		<!-- Meta -->
		<a class="card-meta mt-auto pb-1" href="<?php echo get_permalink(); ?>">

			<!-- Divider -->
			<hr class="card-meta-divider mb-1">

			<!-- Avatar -->
			<div class="avatar avatar-sm mr-2">
				<img src="/wp-content/uploads/2019/09/logo.jpg" style="max-height: 50px;" alt="..." class="avatar-img rounded-circle">
			</div>

			<!-- Author -->
			<h6 class="text-uppercase mr-2 mb-0">
				SPP
			</h6>

			<!-- Date -->
			<p class="h6 text-uppercase mb-0 ml-auto">
				<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('M d, Y') ?></time>
			</p>

		</a>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
