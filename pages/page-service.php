<?php
/**
 * Template Name: Service
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

<section class="pg-service__header jarallax" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left">

				<!-- Check -->
				<span class="badge badge-pill badge-secondary mb-2">
					<span class="h6 text-uppercase">Our Services</span>
				</span>

				<!-- Heading -->
				<h1 class="display-2 font-weight-bold text-white mb-4">
					<?php echo the_title(); ?>
				</h1>

				<!-- Text
				<p class="lead text-white mb-0">
					We're here to help you better use Landkit. First, let's figure out if we have a solution in our documentation.
				</p>  -->

				<!-- Button -->
				<a href="/quote-request" class="mt-4 btn btn-lg btn-secondary">Request a Quote</a>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<!-- <div class="position-relative">
	<div class="shape shape-bottom shape-fluid-x svg-shim text-primary">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
		</svg>
	</div>
</div> -->

<?php /*
<div class="pg-service__breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<?php /*
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
				?>
			</div>
			<div class="col-12 col-md-6 text-md-right">
				We Don't Just Clean...We Make It Pristine!
				<br class="d-flex d-md-none">
				<a href="tel:(540) 786-2626" class="ml-0 pl-0 ml-md-2">(540) 786-2626</a>
			</div>
		</div>
	</div>
</div>
 */ ?>

<div class="wrapper mt-8" id="page-wrapper">
	<main class="site-main" id="main">
		<div class="container" id="content" tabindex="-1">

			<!-- Opening Paragraph -->
			<div class="row">
				<div class="col-12 col-md-7">
					<?php echo the_field('intro_paragraph'); ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'partials/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>
				</div>
				<div class="col-12 col-md-4 offset-0 offset-lg-1">
					<div class="card my-4">
						<div class="bg-secondary text-white">
							<h4 class="m-0 py-3 px-2">Request a FREE Quote</h4>
						</div>
						<div class="card-body">
							<?php echo do_shortcode( '[wpforms id="2607"]', false ); ?>
						</div>
					</div>
					<ul class="list-group pg-service_sidebar">
						<li class="list-group-item bg-secondary text-white">
							<h4 class="m-0">Our Services</h4>
						</li>
						<a href="/quote-request" class="pg-service__sidebar__all-services list-group-item p-0 border-0">
							<img src="/wp-content/uploads/2019/09/RoofwashFB.jpg" alt="">
							<span class="pg-service__sidebar__all-services__title">
								All Pressure Washing Services
								<i class="fa fa-arrow-right"></i>
							</span>
						</a>
						<li class="list-group-item"><a href="/services/commercial-kitchens/">Commercial Kitchens</a></li>
						<li class="list-group-item"><a href="/services/commercial-parking-lots/">Commercial Parking Lots</a></li>
						<li class="list-group-item"><a href="/services/deck-patio-cleaning/">Deck & Patio</a></li>
						<li class="list-group-item"><a href="/services/efforescence/">Efflorescence Removal</a></li>
						<li class="list-group-item"><a href="/services/gutter-cleaning/">Gutter Cleaning</a></li>
						<li class="list-group-item"><a href="/services/residential-pressure-washing/">Residential Pressure Washing</a></li>
						<li class="list-group-item"><a href="/services/roof-washing/">Roof Washing</a></li>
						<li class="list-group-item"><a href="/services/seasonal-services/">Seasonal Services</a></li>
						<li class="list-group-item"><a href="/services/snow-removal-crews/">Snow Removal Crews</a></li>
					</ul>
				</div>
			</div>


		</div>
	</main>
</div>

<?php
get_footer();
