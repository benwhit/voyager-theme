<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

<section class="pt-10 pb-11 py-md-14 overlay overlay-black overlay-60" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>); background-size: cover; background-position: center">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8 text-center">

				<!-- Heading -->
				<h1 class="display-2 font-weight-bold text-white">
					<?php echo the_title(); ?>
				</h1>

				<!-- Text -->
				<p class="lead text-white mb-0">
					For All of Your Residential and Commercial “SOFT” Power Washing / Pressure Washing & Exterior Maintenance Needs
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


<div class="wrapper mt-10 mb-8" id="page-wrapper">
	<main class="site-main" id="main">
		<div class="container" id="content" tabindex="-1">
			<div class="row">
				<div class="col">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'partials/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</div>

			</div>
		</div>
	</main>
</div>

<?php
get_footer();
