<div class="row">
	<div class="col-12">

		<!-- Card -->
		<div class="card card-row shadow-light-lg mb-6 lift lift-lg">
			<div class="row no-gutters">
				<div class="col-12">

					<!-- Badge -->
					<span class="badge badge-pill badge-light badge-float badge-float-inside">
						<span class="h6 text-uppercase">Featured</span>
					</span>

				</div>
				<a class="col-12 col-md-6 order-md-2 bg-cover card-img-right" style="background-image: url(/wp-content/uploads/2019/09/IMG_2596-768x576.jpeg); background-position: center; background-size: cover;" href="<?php echo the_permalink(); ?>">

					<!-- Image (placeholder) -->
					<img src="/wp-content/uploads/2019/09/IMG_2596-768x576.jpeg" alt="..." class="img-fluid d-md-none invisible">

					<!-- Shape -->
					<div class="shape shape-left shape-fluid-y svg-shim text-white d-none d-md-block">
						<svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.14577e-06 0H62.7586V172C38.6207 384 112 517 112 517V690H2.14577e-06V0Z" fill="currentColor"></path>
						</svg>
					</div>

				</a>
				<div class="col-12 col-md-6 order-md-1">

					<!-- Body -->
					<div class="card-body">

						<!-- Heading -->
						<h3 class="text-primary mb-5">
							<?php echo the_title(); ?>
						</h3>

						<!-- Text -->
						<p class="mb-0">
							<?php echo wp_trim_words( get_the_content(), 60, '...' ); ?>
						</p>

						<a href="<?php echo the_permalink(); ?>" class="btn btn-primary mt-6">Read Featured Article <i class="pl-4 fa fa-angle-right"></i></a>

					</div>

					<!-- Meta -->
					<a class="card-meta" href="<?php echo the_permalink(); ?>">

						<!-- Divider -->
						<hr class="card-meta-divider">

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
							<time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('M d Y') ?></time>
						</p>

					</a>

				</div>

			</div> <!-- / .row -->
		</div>

	</div>
</div> <!-- / .row -->
