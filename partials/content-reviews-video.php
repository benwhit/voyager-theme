<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */

$videoLink = get_field('url');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 d-flex'); ?>>

	<!-- Card -->
	<div class="card mb-6 shadow-light-lg lift lift-lg">

		<!-- Image -->
		<div class="card-img-top">

			<!-- Image -->

			<iframe class="card-img-top" width="100%" height="400" src="https://www.youtube.com/embed/xrneAFptfxk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<!-- Shape -->
			<div class="position-relative">
				<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
					<svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0V480H2880V0H2160Z" fill="currentColor"></path>
					</svg>
				</div>
			</div>

		</div>

		<!-- Body -->
		<a class="card-body" href="<?php echo get_permalink(); ?>">

			<!-- Heading -->
			<?php echo the_title( '<h3>', '</h3>'); ?>


			<!-- Text -->
			<p class="mb-0 text-muted">
				<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
			</p>

				<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-starter' ),
					'after'  => '</div>',
				) );
				?>

		</a>

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
