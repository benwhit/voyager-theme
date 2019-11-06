<?php
/**
 * Template Name: All Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager_Starter
 */

$acf_header_title = get_field('header_title');
$acf_header_content = get_field('header_content');
$acf_featured_image = get_field('featured_image');
$acf_page_content = get_field('page_content');

if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly.
}
get_header();
?>

<div class="bg-white">
<section class="pg-all-service__header jarallax">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 text-left">

				<!-- Heading -->
				<h1 class="display-1 pg-all-service__header__title">
					<?php echo $acf_header_title; ?>
				</h1>

			</div>
			<div class="col-12 col-lg-6 d-flex align-items-start justify-content-center flex-column">
				<p class="lead"><?php echo $acf_header_content; ?></p>
				<p class="mb-0 mt-4">
					<a href="#all-services" class="btn btn-primary">
						View All Services
						<i class="fas fa-arrow-right"></i>
					</a>
					<a href="/quote-request" class="btn btn-secondary ml-lg-4">
						<i class="far fa-comments mr-1"></i>
						Request A Quote
					</a>
				</p>
			</div>
		</div>
	</div>
</section>
</div>

<?php /*
<div class="pg-service__breadcrumbs bg-secondary">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<?php
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

<div class="jarallax pg-all-service__featured-image">
	<img src="<?php echo $acf_featured_image; ?>" alt="All Serivces Page Featured Image" class="jarallax-img">
</div>


<div class="wrapper mt-8" id="page-wrapper">
	<main class="site-main" id="main">
		<div class="container" id="content" tabindex="-1">

			<div class="row pt-6 pb-11">
				<div class="col-12 text-center">
					<h5 class="display-4 font-weight-bold mb-6">Highly-qualified specialists who are equipped with the best state of the art tools and equipment.</h5>
					<a href="/quote-request" class="btn btn-secondary"><i class="far fa-comments mr-1"></i>Request a Quote</a>
				</div>
			</div>

			<div class="row text-center mb-12">
				<div class="col-12 col-lg-4">
					<h3 class="mb-5">Residential SOFT Wash Services</h3>
					<p class="">From house washing to roof cleaning, we are here to help you. We Use Our Exclusive “SOFT” Power / Pressure Washing System For All Projects To Protect Your Property. We only use chemicals that are environmentally friendly.</p>
				</div>
				<div class="col-12 col-lg-4">
					<h3 class="mb-5">Commercial SOFT Wash Services</h3>
					<p class="">Removing All The Worry From Your Business Property Maintenance. We provide our service areas with quality, dependable services.  We look forward to providing the most professional roof pressure washing service.</p>
				</div>
				<div class="col-12 col-lg-4">
					<h3 class="mb-5">Interior & Exterior Maintenance Services</h3>
					<p class="">We pride ourselves in not only having a 5-STAR reputation, but also that we offer a wide range of specialty services. Shane’s Pristine Powerwash and Exterior maintenance teams are ready to take care of all your needs.</p>
				</div>
			</div>

			<div class="row mb-10">
				<div class="col-12 text-center">
					<h5 class="display-4 font-weight-bold mb-6 text-secondary">We Don’t Just Clean...We Make It Pristine!</h5>
					<p class="w-75 m-auto">At SHANE’S PRISTINE POWERWASH we take pride in having a team of highly qualified specialists who are equipped with the best state of the tools and equipment. We provide our service areas with quality, dependable services such as Residential Power Washing Services and Commercial Power Washing Services.</p>
				</div>
			</div>

			<div id="all-services" class="row">
				<div class="col-12">

					<!-- Card Group One -->
					<div class="card-group mb-4">
					  <div class="card">
					  	<a href="/commercial-pressure-washing/">
					    	<img src="/wp-content/uploads/2019/09/57286258_2291246307817685_8880479586157068288_o.jpg" class="card-img-top" alt="Commercial Pressure Washing">
					  	</a>
					    <div class="card-body">
					      <h5 class="card-title"><a href="/services/commercial-pressure-washing/">Commercial Pressure Washing</a></h5>
					      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/commercial-kitchen-cleaning/"><img src="/wp-content/uploads/2019/09/P1250374.jpg" class="card-img-top" alt="..."></a>
					    <div class="card-body">
					      <h5 class="card-title"><a href="/services/commercial-pressure-washing/">Commercial Kitchen Cleaning</a></h5>
					      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/parking-lot-cleaning/"><img src="/wp-content/uploads/2019/09/car-park-seen-from-above-S6P57R4.jpg" class="card-img-top" alt="..."></a>
					    <div class="card-body">
					      <h5 class="card-title"><a href="/services/parking-lot-cleaning/">Parking Lot Cleaning</a></h5>
					      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
					    </div>
					  </div>
					</div>

					<!-- Card Group Two -->
					<div class="card-group mb-4">
					  <div class="card">
					  	<a href="/services/residential-pressure-washing/">
					    	<img src="/wp-content/uploads/2019/09/P1240941.jpg" class="card-img-top" alt="Commercial Pressure Washing">
					  	</a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/residential-pressure-washing/">Residential Pressure Washing</a>
					      </h5>
					      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/roof-washing/">
					    	<img src="/wp-content/uploads/2019/09/RoofwashFB.jpg" class="card-img-top" alt="...">
					    </a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/roof-washing/">
					      		Roof Washing
					      	</a>
					      </h5>
					      <p class="card-text">Our roof washing service can restore your roof! Dark streaks on your house roof are far worse than ugly. They can be a sign of a dying roof.</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/gutter-cleaning/">
					    	<img src="/wp-content/uploads/2019/09/roof-and-gutters-cleaning-BXN2QDF-11.jpg" class="card-img-top" alt="...">
					    </a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/gutter-cleaning/">
					      		Gutter Cleaning
					      	</a>
					      </h5>
					      <p class="card-text">When you trus our team with your Gutter Cleaning needs, you know the job will be pristine.We open any clogged downspouts and inspect our work following your gutter cleaning.</p>
					    </div>
					  </div>
					</div>

					<!-- Card Group Three -->
					<div class="card-group mb-12">
					  <div class="card">
					  	<a href="/services/deck-patio-cleaning/">
					    	<img src="/wp-content/uploads/2019/09/P1250025.jpg" class="card-img-top" alt="Commercial Pressure Washing">
					  	</a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/deck-patio-cleaning/">Deck and Patio Cleaning</a>
					      </h5>
					      <p class="card-text">Get your deck and patio cleaning today by our team at Shane’s Pristine Powerwash. Our expert power washers will make your wood or vinyl deck barefoot friendly again!</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/efforescence/">
					    	<img src="/wp-content/uploads/2019/09/efflorescence-coming-off-chimney-e1560679158840.jpg" class="card-img-top" alt="...">
					    </a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/efforescence/">
					      		Efflorescence Removal
					      	</a>
					      </h5>
					      <p class="card-text">We Use Our exclusive soft wash Processes and Systems to remove white salt build-up and restore your Brick, Stone, Concrete and Masonry to Pristine Condition!</p>
					    </div>
					  </div>
					  <div class="card">
					    <a href="/services/seasonal-services/">
					    	<img src="/wp-content/uploads/2019/09/roof-and-gutters-cleaning-BXN2QDF-11.jpg" class="card-img-top" alt="...">
					    </a>
					    <div class="card-body">
					      <h5 class="card-title">
					      	<a href="/services/seasonal-services/">
					      		Seasonal Services
					      	</a>
					      </h5>
					      <p class="card-text">When you trus our team with your Gutter Cleaning needs, you know the job will be pristine.We open any clogged downspouts and inspect our work following your gutter cleaning.</p>
					    </div>
					  </div>
					</div>

				</div>
			</div>

		</div>
	</main>
</div>

<?php
get_footer();
