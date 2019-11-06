<?php
/**
 * Template Name: Contact Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>

<div class="wrapper pt-10 bg-light" id="page-wrapper">
	<main class="site-main" id="main">

		<section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-position: center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-lg-8 text-center">

						<!-- Heading -->
						<h1 class="display-2 font-weight-bold text-white">
							We’re Here to Help.
						</h1>

						<!-- Text -->
						<p class="lead text-white mb-0">
							We always want to hear from you! Let us know how we can best help you and we'll do our very best.
						</p>

					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>

		<div class="position-relative">
			<div class="shape shape-bottom shape-fluid-x svg-shim text-light">
				<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
				</svg>
			</div>
		</div>

	<section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">

					<!-- Button -->
					<a href="#info" class="btn btn-white btn-rounded-circle shadow mt-n11 mt-md-n13" data-toggle="smooth-scroll">
						<i class="fe fe-arrow-down"></i>
					</a>

				</div>
			</div> <!-- / .row -->
			<div class="row">
				<div class="col-12 col-md-4 text-center border-right border-gray-300">

					<!-- Heading -->
					<h6 class="text-uppercase text-gray-700 mb-1">
						Message us
					</h6>

					<!-- Link -->
					<div class="mb-5 mb-md-0">
						<a href="#!" class="h4 text-primary">
							Submit questions below!
						</a>
					</div>

				</div>
				<div class="col-12 col-md-4 text-center border-right border-gray-300">

					<!-- Heading -->
					<h6 class="text-uppercase text-gray-700 mb-1">
						Call anytime
					</h6>

					<!-- Link -->
					<div class="mb-5 mb-md-0">
						<a href="tel:(540) 786-2626" class="h4">
							(540) 786-2626
						</a>
					</div>

				</div>
				<div class="col-12 col-md-4 text-center">

					<!-- Heading -->
					<h6 class="text-uppercase text-gray-700 mb-1">
						Email us
					</h6>

					<!-- Link -->
					<a href="mailto:info@pristinepowerwash.com" class="h4">
						info@pristinepowerwash.com
					</a>

				</div>
			</div> <!-- / .row -->
		</div>
	</section>

	<section class="pt-8 pt-md-11">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8 text-center">

					<!-- Heading -->
					<h2 class="font-weight-bold">
						Let us hear from you directly!
					</h2>

					<!-- Text -->
					<p class="font-size-lg text-muted mb-7 mb-md-9">
						We always want to hear from you! Let us know how we can best help you and we'll do our very best.
					</p>

				</div>
			</div> <!-- / .row -->
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-10">

				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section>

	<div class="container pb-8 pb-md-14">
		<div class="row">
			<div class="col">

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php //voyager_starter_post_thumbnail(); ?>

						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager-starter' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- .entry-content -->

						<?php if ( get_edit_post_link() ) : ?>
							<footer class="entry-footer">
								<?php
								edit_post_link(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Edit <span class="screen-reader-text">%s</span>', 'voyager-starter' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										get_the_title()
									),
									'<span class="edit-link">',
									'</span>'
								);
								?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>

	</main>
</div>

<?php
get_footer();
