<?php
/**
* Static Front Page.
*
* @link https://codex.wordpress.org/Template_Hierarchy
* @package Voyager_Theme
*/
get_header();
?>

<main id="main" class="site-main">

		<!-- Component: Home Hero -->
		<div class="c-home-hero">
			<div class="container-fluid px-0">
				<div class="row align-items-stretch">
					<div class="col-12 col-lg-6 d-flex order-1 order-md-0">
						<div class="c-home-hero__text-wrapper">
							<h1 class="c-home-hero__title">Professional Commercial & Residential <span class="text-primary"> Pressure Washing Services</span></h1>
							<p class="lead text-center text-md-left mt-4">At Shane's Pristine Power Wash we take pride in having a team of highly qualified specialists who are equipped with the best state of the art tools and equipment.</p>
							<div class="text-center text-md-left">
	              <a href="/services" class="btn btn-primary lift mr-2 my-2">
	                View all Services
	              </a>
	              <a href="/quote-request" class="btn btn-secondary m-2">
	                Request a FREE Quote <i class="fas fa-arrow-right d-none d-md-inline ml-3"></i>
	              </a>
	            </div>
						</div>
					</div>
					<div class="col-12 col-lg-6 order-0 order-md-1">
						<div class="home-hero-compare">
							<img src="/wp-content/uploads/2019/09/before-home.jpg" alt="hero before image" />
							<img src="/wp-content/uploads/2019/09/after-home.jpg" alt="hero after image" />
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php get_template_part( 'partials/c', 'home-services' ); ?>

		<?php get_template_part( 'partials/c', 'about' ); ?>

		<!-- Component: Service Box - Residential -->
		<div class="c-horizontal-service-box bg-secondary text-white py-10">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start order-1 order-lg-0">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Residential Power Washing</span>
						</span>
						<h2 class="mb-6">Professional Residential Power Washing Services</h2>
						<p class="mb-8">At Shane’s Pristine Powerwash we make sure to thoroughly clean the exterior of your home. When we use our soft wash process, we only use chemicals that are environmentally friendly and kills all mold and dirt on the siding of the structures. </p>
						<a href="/residential-pressure-washing" class="h5 text-white border-bottom text-decoration-none">See All Residential Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
					<div class="col-12 col-lg-6 order-0 order-lg-1 img-skewed img-skewed-left p-6">
						<?php echo wp_get_attachment_image( 1899, 'medium-lg', false, 'class=box-shadow img-fluid img-skewed-item my-4'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - Commercial -->
		<div class="c-horizontal-service-box bg-primary text-white py-8">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 img-skewed img-skewed-right p-6">
						<?php echo wp_get_attachment_image( 1901, 'medium-lg', false, 'class=box-shadow img-fluid img-skewed-item my-4'); ?>
					</div>
					<div class="col d-flex flex-column justify-content-center align-items-start">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Commercial Power Washing</span>
						</span>
						<h3 class="h2 mb-6">Professional Commercial Power Washing Services</h3>
						<p class="mb-8">As one of the most respected commercial kitchen cleaning companies around, we understand that when it comes to cleanliness, the exterior is just as important as the interior. Our team takes this into consideration every time we arrive for a commercial pressure washing service.</p>
						<a href="<?php echo esc_url( get_page_link( 2549 ) ); ?>" class="h5 text-white border-bottom text-decoration-none">See All Commercial Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - Roof -->
		<div class="c-horizontal-service-box py-8 text-white" style="background-color: #0399fa;">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start order-1 order-lg-0">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">Roof Services</span>
						</span>
						<h3 class="h2 mb-6">Professional Roof Power Washing Services</h3>
						<p class="mb-8">Our roof washing service can restore your roof! We only use chemicals that are environmentally friendly and kills all mold and dirt on the roof of the residential and commercial structures we are cleaning.</p>
						<a href="<?php echo esc_url( get_page_link( 1826 ) ); ?>" class="h5 text-white border-bottom text-decoration-none">See All Roof Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
					<div class="col-12 col-lg-6 img-skewed img-skewed-left p-6">
						<?php echo wp_get_attachment_image( 1902, 'medium-lg', false, 'class=box-shadow img-fluid img-skewed-item my-4'); ?>
					</div>
				</div>
			</div>
		</div>

		<!-- Component: Service Box - White Salt -->
		<div class="c-horizontal-service-box bg-secondary text-white py-8 text-center text-lg-left">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6 img-skewed img-skewed-right p-6">
						<?php echo wp_get_attachment_image( 1906, 'medium-lg', false, 'class=box-shadow img-fluid img-skewed-item my-4'); ?>
					</div>
					<div class="col order-1 order-lg-2 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
						<span class="badge badge-pill badge-soft text-white mb-3">
							<span class="h6 text-uppercase">
								WHITE SALT BUILD-UP
							</span>
						</span>
						<h3 class="h2 mb-6">Professional Efflorescence (White Salt) Removal Services</h3>
						<p class="mb-8">We use our exclusive "soft wash" processes and systems to remove Efflorescence build-up and restore your Brick, Stone, Concrete and Masonry...to their pristine condition!</p>
						<p><a href="<?php echo esc_url( get_page_link( 1827 ) ); ?>" class="h5 text-white border-bottom text-decoration-none">See Efflorescence Services <i class="fas fa-arrow-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->
		<div class="bg-white py-10">
      <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="text-center mx-md-auto mb-9">
						<span class="badge badge-pill badge-soft mb-3">
							<span class="h6 text-uppercase">
								Our Customers Love Us!
							</span>
						</span>
          <p class="h1">What Our Customers Say</p>
          <p>Discover how Shane's Pristine Power Wash has helped all types <br class="d-none d-lg-block"> of different Residential and Commercial Clients.</p>
        </div>
        <!-- End Title -->

        <div class="card-columns">

          <!-- Testimonials -->
          <article class="card rounded mb-3">
            <div class="card-body p-5">
              <blockquote class="text-primary">I recently had three homes cleaned and am very pleased with the results. Pristine takes pride in their work and provide great customer service. I would definitely recommend them.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-4.fna.fbcdn.net/v/t1.0-1/p50x50/42800879_10215654471748354_3252544970522886144_n.jpg?_nc_cat=108&_nc_oc=AQlI_Q4EGLc7vYjXBl1fwIjD5k7D9QjgIf0G-_69UjMAxNTLIGKcf9O2si1Faz0JeSc&_nc_ht=scontent.fphl2-4.fna&oh=afbf08f5ff376089e6c7fbecb6488a7c&oe=5E624D93" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Connie Beverly Green</h4>
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
              <blockquote class="text-primary">Shane’s Pristine Powerwash did a great job on my house! Very polite and professional! I highly recommend them!</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-4.fna.fbcdn.net/v/t1.0-1/p50x50/14063932_1211724518848781_3296531473222913230_n.jpg?_nc_cat=110&_nc_oc=AQl6Kcl05ggNWbggZx-Ame2kJd8pH_djEaBPPKy9cMpp4xhwfXvClHqo7ROL3DUy8R4&_nc_ht=scontent.fphl2-4.fna&oh=253d081393e874607f7821fd588ae595&oe=5E414ED8" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Katy Kahle Reep</h4>
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
              <blockquote class="text-primary">A+ Service provider, with a great crew and unbelievable management. Very reliable and great pricing on all services. They Power washed and sealed my deck and the results were amazing. I Would recommend Pristine When you need it cleaned!</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-3.fna.fbcdn.net/v/t1.0-1/p50x50/42108126_10157873071275200_835967589770330112_n.jpg?_nc_cat=101&_nc_oc=AQnC173hVSyhbXp8mQv8V4OPIB_IwNMMIVXJl4N0Ic2huicHpQtiKqxmGeL4PyIfNWE&_nc_ht=scontent.fphl2-3.fna&oh=121e643490a593edac85c8252c6d4848&oe=5E45DF9E" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Jamie L Ashley </h4>
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
              <blockquote class="text-primary">We are incredibly impressed with Space and how well it supports its customers with amazing products and services. One simple subscription gives you access to all our tools, plus so much more.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-3.fna.fbcdn.net/v/t1.0-1/p50x50/74587150_10218073685105065_5505164534551150592_n.jpg?_nc_cat=101&_nc_oc=AQkll0pdH6uyNlcoT36fy58BoOXZKyXfv5CPKGLy1en_tXZJ3VDz8UPVb8RI3PDA5Ks&_nc_ht=scontent.fphl2-3.fna&oh=b4859f99d4fac49afe346b1938987a7e&oe=5E4E746F" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Jean Godfrey Rose</h4>
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
              <blockquote class="text-primary">Fantastic company with a detail-oriented and meticulous owner, Shane! They did a great job on my house. Thanks for the good work!</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-3.fna.fbcdn.net/v/t1.0-1/c8.0.50.50a/p50x50/420966_2685373970544_400536712_n.jpg?_nc_cat=109&_nc_oc=AQmoPafwqWJR1SsKaxlyqlPFaOXGANRvI1tAtFwiHAkXOn5W0K366A1rS_xXdUJRW4w&_nc_ht=scontent.fphl2-3.fna&oh=13b6558c5e11810100f8fdc5ef886c0a&oe=5E5DE964" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Nancy Parnell</h4>
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
              <blockquote class="text-primary">Pristine just washed our house and did a great job for a good price. We are happy we didn't have to do it ourselves. My only regret is that they wouldn't bring their hose in and clean the inside of our house.</blockquote>
            </div>
            <div class="card-footer px-5">
              <div class="media">
                <img class="u-avatar rounded-circle mr-3" src="https://scontent.fphl2-1.fna.fbcdn.net/v/t1.0-1/p50x50/67114337_10219881069082913_408060801228734464_n.jpg?_nc_cat=100&_nc_oc=AQl2JOYI8FI8-_yv1BALT2-3d28NYWG3NK-Y2E969S4vWDivk7ipQ3l-gyivk48iyas&_nc_ht=scontent.fphl2-1.fna&oh=2708eaa438fe87b5090dbdb4786ed1a6&oe=5E570D97" alt="Image Description">
                <div class="media-body">
                  <h4 class="h6 mb-0">Patte Reider Ormsby</h4>
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
          <div class="col text-center">
		        <!-- Title -->
		        <div class="text-center mx-md-auto mb-9">

	            <!-- Badge -->
							<span class="badge badge-pill badge-soft mb-3">
								<span class="h6 text-uppercase">News & Articles</span>
	            </span>

	            <!-- Heading -->
	            <p class="h1 font-weight-bold">
	              Shane's Pristine Power Washing Blog
	            </p>

	          	<p>Keep up with the latest updates from Shane's Pristine Power Wash.</p>

	          </div>
          </div>
        </div>
				<?php
				$featured_args = array(
				  'p'         => 2532,
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
							More Blog Articles
						</h3>

						<!-- Text -->
						<p class="mb-0">
							Here’s what we've been up to recently.
						</p>

					</div>
					<div class="col-12 col-md-auto">

						<!-- Button -->
						<a href="/blog" class="btn btn-secondary d-none d-md-inline">
							View all Articles
						</a>

					</div>
				</div> <!-- / .row -->
				<div class="row">
					<?php
					$all_args = array(
					  'post_type' => 'post',
					  'posts_per_page' => 3,
					  'post__not_in' => array( 2532 )
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
		<section class="bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">

						<!-- Map -->
						<div class="position-relative h-100 vw-50 float-right d-none d-md-block">

							<!-- Map -->
							<div class="h-100 w-100 mapboxgl-map" style="background-image: url(/wp-content/uploads/2019/09/P1240953.jpg)">
								<iframe class="h-100 w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d566914.7431754646!2d-77.48319898047484!3d38.29659317000123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1568622515462!5m2!1sen!2sus"></iframe>
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
							We provide the best quality service to <span class="text-secondary">Central and Northern Virginia.</span>
						</h2>

						<!-- Text -->
						<p class="font-size-lg mb-6">
							Shane’s Pristine Powerwash LLC is a fully insured company in the Commonwealth of Virginia.
						</p>

					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->
		</section>

</main>

<?php
get_footer();
