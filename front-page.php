<?php
/**
* Static Front Page.
*
* @link https://codex.wordpress.org/Template_Hierarchy
* @package Voyager_Theme
*/
get_header();
?>

<main id="main" class="site-main" role="main">
	<section id="content" class="page-content">

		<!-- Component: Home Hero -->
		<div class="c-home-hero">
			<div class="container-fluid">
				<div class="row align-items-stretch">
					<div class="col-12 col-lg-6 d-flex">
						<div class="c-home-hero__text-wrapper">
							<h1 class="c-home-hero__title">Professional Commercial & Residential <span class="text-secondary"> Pressure Washing Services</span></h1>
							<p class="lead text-center text-md-left mt-4">At Shane's Pristine Power Wash we take pride in having a team of highly qualified specialists who are equipped with the best state of the art tools and equipment.</p>
							<p class="lead mb-6 mb-lg-8 text-center text-md-left">We Don’t Just Clean. We Make It Pristine!</p>
							<div class="text-center text-md-left">
	              <a href="/services" class="btn btn-primary lift">
	                View all Services
	              </a>
	              <a href="/quote-request" class="btn btn-secondary ml-2">
	                Request a FREE Quote <i class="fas fa-arrow-right d-none d-md-inline ml-3"></i>
	              </a>
	            </div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="home-hero-compare">
							<!-- The before image is first -->
							<img src="/wp-content/uploads/2019/09/before-home.jpg" />
							<!-- The after image is last -->
							<img src="/wp-content/uploads/2019/09/after-home.jpg" />
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="decorated-bottom text-light"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40" preserveAspectRatio="none"> <path d="M 0 9.18948 C 200 9.18948 245.947 30.8105 445.947 30.8105 C 645.947 30.8105 800 9.18948 1000 9.18948 L 1000 50 L 0 50 L 0 9.18948 Z"> <animate attributeName="d" begin="0s" dur="0" repeatCount="indefinite" values="M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z; M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z; M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z; M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate> </path> </svg></div> -->
		</div>

		<!-- Component: Home Services -->
		<div class="c-home-services">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col col-md-8">
						<span class="badge badge-pill badge-primary-soft mb-3">
							<span class="h6 text-uppercase">Our Services</span>
						</span>
						<p class="h2 mb-4 text-center">
							Our #1 goal is to provide our customers with the
							<span class="text-secondary">
								Best Value and Satisfation</span>
						</p>
						<p class="lead font-size-lg">From house washing to roof cleaning, the staff at Shane’s Pristine Powerwash are here to help you.</p>
					</div>
				</div>
				<div class="row row-flex pt-4">
					<div class="col-12 col-lg-6 my-5">
						<div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

							<!-- Image -->
							<?php echo wp_get_attachment_image( 1895, 'large', false, 'class=card-img-top'); ?>

							<!-- Shape -->
							<div class="position-relative">
								<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
									<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
									</svg>
								</div>
							</div>

							<!-- Body -->
							<div class="card-body position-relative">

								<!-- Heading -->
								<h3 class="py-4">
									<span class="text-secondary">Residential</span> Power Washing Services
								</h3>

								<!-- Text -->
								<p>
									From house washing to roof cleaning, the staff at Shane’s Pristine Powerwash are here to help you.
								</p>

								<div class="row mb-5">
									<div class="col-12 col-xl-6">
										<ul class="list-unstyled mb-0">
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													House Washing
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Roof Washing
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Decks and Fences Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Exterior Windows Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Patios, Pools, Porches Cleaning
												</p>

											</li>
										</ul>
									</div>
									<div class="col-12 col-xl-6">
										<ul class="list-unstyled mb-0">

											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Concrete, Driveways, Walkways
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Sidewalks, Steps Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Gutters, Down Spouts
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Chimneys Cleaning … and more.
												</p>

											</li>

										</ul>

									</div>
								</div>

								<!-- Link -->
								<a href="/residential-pressure-washing" class="btn btn-secondary text-decoration-none">
									View all Residential Services <i class="fa fa-arrow-right ml-3"></i>
								</a>

							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6 my-5">
						<div class="card shadow-light-lg mb-6 mb-md-0 lift lift-lg">

							<!-- Image -->
							<?php echo wp_get_attachment_image( 2461, 'large', false, 'class=card-img-top'); ?>

							<!-- Shape -->
							<div class="position-relative">
								<div class="shape shape-bottom shape-fluid-x svg-shim text-white">
									<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
									</svg>
								</div>
							</div>

							<!-- Body -->
							<div class="card-body position-relative">

								<!-- Heading -->
								<h3 class="py-4">
									<span class="text-secondary">Commercial</span> Power Washing Services
								</h3>

								<!-- Text -->
								<p class="">
									We look forward to providing the most professional pressure washing service to our commercial customers.
								</p>

								<div class="row mb-5">
									<div class="col-12 col-xl-6">
										<ul class="list-unstyled mb-0">
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Building Washing
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Concrete Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Fleet Washing
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Multi-Unit Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Efflorescence (White Salt) Build-up Removal
												</p>

											</li>
										</ul>

									</div>
									<div class="col-12 col-xl-6">

										<ul class="list-unstyled mb-0">
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Property Managers
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Hood and Kitchen Exhaust Cleaning
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Landscaping and Exterior Maintenance
												</p>

											</li>
											<li class="d-flex">

												<!-- Check -->
												<div class="badge badge-rounded-circle badge-success-soft mt-1 mr-4">
													<i class="fas fa-check"></i>
												</div>

												<!-- Text -->
												<p>
													Snow Pushing and Salt/Sand Distribution
												</p>

											</li>
										</ul>
									</div>
								</div>


								<!-- Link -->
								<a href="/commercial-kitchens" class="btn btn-secondary text-decoration-none">
									View all Commercial Services <i class="fa fa-arrow-right ml-3"></i>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- About Section -->
		<section class="py-10 bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="compare-container twentytwenty-square box-shadow mr-md-6 mb-6 mb-md-0">
							<?php echo wp_get_attachment_image( 1898, 'large'); ?>
							<?php echo wp_get_attachment_image( 1897, 'large'); ?>
						</div>
					</div>
					<div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
						<span class="badge badge-pill badge-primary-soft mb-3">
							<span class="h6 text-uppercase">About Our Company</span>
						</span>
						<p class="h2 pb-4">We Are A Professionally Trained  <span class="text-secondary">Power Washing / Pressure Washing Company.</span></h2>
						<p class="lead">We power wash houses and commercial structures with a chemical that is environmentally friendly and kills all mold and dirt on the siding of the structure.</p>
						<p class="mt-1 mb-7 d-flex align-items-center justify-content-center align-middle">
							<i class="fas fa-star fa-lg text-warning"></i>
							<i class="fas fa-star fa-lg text-warning"></i>
							<i class="fas fa-star fa-lg text-warning"></i>
							<i class="fas fa-star fa-lg text-warning"></i>
							<i class="fas fa-star fa-lg text-warning"></i>
							<span class="ml-4 d-flex align-middle align-items-center justify-content-center">
								See our
								<a href="https://www.facebook.com/pg/shanespristinepowerwash/reviews/" target="_blank" class="px-2"><i class="fab fa-facebook fa-2x"></i></a>
								and
								<a href="https://www.google.com/search?q=pristine+powerwash+reviews&oq=pristine+powerwash+reviews&gs_l=psy-ab.3...61316.61316.0.61886.1.1.0.0.0.0.128.128.0j1.1.0....0...1.1.64.psy-ab..0.0.0....0.vywcoHSMUcY#lrd=0x89b6bf5613b187b5:0xda7c84a61ff0253,1,,," target="_blank" class="px-2"><i class="fab fa-google fa-2x"></i></a>
								reviews!
							</span>
						</p>
						<p><a class="text-secondary" href="/about/" role="button">Learn more about Shane's Pristine Powerwash <i class="fas fa-arrow-right ml-1"></i></a></p>
					</div>
				</div>
			</div>
		</section>

		<!-- Component: Service Box - Residential -->
		<div class="c-horizontal-service-box bg-secondary text-white py-10">
			<div class="container px-0">
				<div class="row no-gutters">
					<div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Residential Services</span>
						</span>
						<h2 class="mb-6">Professional Residential Power Washing Services</h3>
						<p class="mb-8">At Shane’s Pristine Powerwash we make sure to thoroughly clean the exterior of your home. When we use our soft wash process, we only use chemicals that are environmentally friendly and kills all mold and dirt on the siding of the structures. </p>
						<a href="/residential-pressure-washing" class="text-white border-bottom text-decoration-none">See All Residential Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
					<div class="col-12 col-lg-6 img-skewed img-skewed-left p-6">
						<?php echo wp_get_attachment_image( 1899, 'large', false, 'class=box-shadow img-fluid img-skewed-item'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - Commercial -->
		<div class="c-horizontal-service-box bg-primary text-white py-8">
			<div class="container px-0">
				<div class="row no-gutters">
					<div class="col-12 col-lg-6 img-skewed img-skewed-right p-6">
						<?php echo wp_get_attachment_image( 1901, 'large', false, 'class=box-shadow img-fluid img-skewed-item'); ?>
					</div>
					<div class="col d-flex flex-column justify-content-center align-items-start">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Residential Services</span>
						</span>
						<h3 class="h2 mb-6">Professional Commercial Power Washing Services</h3>
						<p class="mb-8">As one of the most respected commercial kitchen cleaning companies around, we understand that when it comes to cleanliness, the exterior is just as important as the interior. Our team takes this into consideration every time we arrive for a commercial pressure washing service.</p>
						<a href="#" class="text-white border-bottom text-decoration-none">See All Commercial Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - Roof -->
		<div class="c-horizontal-service-box py-8 text-white" style="background-color: #0399fa;">
			<div class="container px-0">
				<div class="row no-gutters">
					<div class="col d-flex flex-column justify-content-center align-items-start">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Residential Services</span>
						</span>
						<h3 class="h2 mb-6">Professional Roof Power Washing Services</h3>
						<p class="mb-8">Our roof washing service can restore your roof! We only use chemicals that are environmentally friendly and kills all mold and dirt on the roof of the residential and commercial structures we are cleaning.</p>
						<a href="#" class="text-white border-bottom text-decoration-none">See All Residential Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
					<div class="col img-skewed img-skewed-left p-6">
						<?php echo wp_get_attachment_image( 1902, 'large', false, 'class=box-shadow img-fluid img-skewed-item'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - White Salt -->
		<div class="c-horizontal-service-box bg-white py-8">
			<div class="container px-0">
				<div class="row no-gutters">
					<div class="col-12 col-lg-6 img-skewed img-skewed-right p-6">
						<img class="box-shadow img-fluid img-skewed-item" src="/wp-content/uploads/2019/09/efflorescence-coming-off-chimney-e1560679158840.jpg" alt="">
					</div>
					<div class="col p-8 order-1 order-lg-2 d-flex flex-column justify-content-center align-items-start">
						<span class="mb-3 text-primary">
							WHITE SALT BUILD-UP
						</span>
						<h3 class="h2 mb-6">Professional Efflorescence (White Salt) Removal Services</h3>
						<p class="mb-8">We Use Our EXCLUSIVE “SOFT WASH” Processes and Systems To Remove EFFLORESCENCE Build-up and Restore Your Brick, Stone, Concrete and Masonry...To Their PRISTINE Condition!</p>
						<a href="#" class="text-primary border-bottom text-decoration-none">See Efflorescence Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->
		<div class="bg-gray-100 py-10">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <span class="mb-3">Pricing plans</span>
          <h3>Customer stories</h3>
          <p>Discover how Space has helped build businesses just like yours.</p>
        </div>
        <!-- End Title -->

        <div class="card-columns">
          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">I love Space! I love the ease of use, I love the fact that I have total creative freedom. The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Maria Muzynska</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">We are incredibly impressed with Space and how well it supports its customers with amazing products and services. One simple subscription gives you access to all our tools, plus so much more.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img4.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Mark McManus</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">Space brings so many benefits to any team that does anything following a process. It is the easiest way for teams to build cool things work—and get results.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Alex Pottorf</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">The template is really nice and offers quite a large set of options. It's beautiful and the coding is done quickly and seamlessly. I love Space! I love the ease of use, I love the fact that I have total creative freedom. We are incredibly impressed with Space and how well it supports its customers with amazing products and services.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Charlotte Moore</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">One simple subscription gives you access to all our tools, plus so much more. Space brings so many benefits to any team that does anything following a process. It is the easiest way for teams to build cool things work—and get results.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img14.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Ella Brown</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-secondary">Just Wow! Space brings so many benefits to any team that does anything following a process. It is the easiest way for teams to build cool things work—and get results.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="../../assets/img/100x100/img15.jpg" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Markus Brown</h4>
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item text-warning font-size-13">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
          <!-- End Testimonials -->
        </div>
      </div>
    </div>

		<!-- Blog Section -->
		<section class="pt-7 pt-md-10">
			<div class="container">
				<div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">

            <!-- Badge -->
            <span class="badge badge-pill badge-primary-soft mb-3">
              <span class="h6 text-uppercase">Our blog</span>
            </span>

            <!-- Heading -->
            <h1 class="display-3 font-weight-bold mb-7 text-secondary">
              Shane's Pristine Power Washing News & Articles
            </h1>

          </div>
        </div>
				<?php
				$featured_args = array(
				  'p'         => 2436,
				  'post_type' => 'any',
				  'post_count' => 1
				);
				$featured_posts = new WP_Query($featured_args);
				if ( $featured_posts->have_posts() ) {
				    while ( $featured_posts->have_posts() ) {
				        $featured_posts->the_post();
				        get_template_part( 'partials/c-featured-blog', null );
				    }
				}
				/* Restore original Post Data */
				wp_reset_postdata();
				?>
			</div> <!-- / .container -->
		</section>


		<!-- More Blogs -->
		<section class="pt-6 pb-10">
			<div class="container">
				<div class="row align-items-center mb-5">
					<div class="col-12 col-md">

						<!-- Heading -->
						<h3 class="mb-0">
							Latest Blog Articles
						</h3>

						<!-- Text -->
						<p class="mb-0">
							Here’s what we've been up to recently.
						</p>

					</div>
					<div class="col-12 col-md-auto">

						<!-- Button -->
						<a href="/blog" class="btn btn-sm btn-outline-gray-300 d-none d-md-inline">
							View all Articles
						</a>

					</div>
				</div> <!-- / .row -->
				<div class="row">
					<?php
					$all_args = array(
					  'post_type' => 'post',
					  'posts_per_page' => 3,
					  'post__not_in' => array( 2436 )
					);
					$all_posts = new WP_Query($all_args);
					if ( $all_posts->have_posts() ) {
					    while ( $all_posts->have_posts() ) {
					        $all_posts->the_post();
					        get_template_part( 'partials/c-blog-card', null );
					    }
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>

		<!-- Google Map Section -->
		<section class="pt-8 pt-md-8 bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">

						<!-- Map -->
						<div class="position-relative h-100 vw-50 float-right d-none d-md-block">

							<!-- Map -->
							<div class="h-100 w-100 mapboxgl-map" style="background-image: url(/wp-content/uploads/2019/09/P1240953.jpg)">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d566914.7431754646!2d-77.48319898047484!3d38.29659317000123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1568622515462!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>

							<!-- Shape -->
							<div class="shape shape-right shape-fluid-y svg-shim text-light">
								<svg viewBox="0 0 100 1544" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 386V0H100V1544H50V1158L0 386Z" fill="#FFF"></path>
								</svg>
							</div>

						</div>

					</div>
					<div class="col-12 col-md-6 col-lg-5 offset-lg-1 py-8 py-md-11 py-lg-12">

						<!-- Heading -->
						<h2>
							Located in Virginia.<br>
							<span class="text-secondary">We provide the best quality service in the Fredericksburg & Stafford Area.</span>
						</h2>

						<!-- Text -->
						<p class="font-size-lg mb-6">
							Shane’s Pristine Powerwash LLC is a fully insured company in the Commonwealth of Virginia.
						</p>

					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>

	</section>
</main>

<?php
get_footer();
