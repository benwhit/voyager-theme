<?php
/**
 * Standard Reviews Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-6 col-lg-6 d-flex'); ?>>

	<!-- Card -->
	<div class="card mb-6 shadow-light-lg lift lift-lg">

		<!-- Body -->
		<a class="card-body" href="<?php echo get_permalink(); ?>">

			<!-- Heading -->
			<?php echo the_title( '<h3>', '</h3>'); ?>


			<!-- Text -->
			<p class="mb-0 text-muted">
				<?php echo get_the_content(); ?>
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
