
<div class="c-blog-card col-12 col-md-6 col-lg-4 d-flex">

	<!-- Card -->
	<div class="card mb-6 mb-lg-0 shadow-light-lg lift lift-lg">

		<!-- Image -->
		<a class="card-img-top" href="<?php echo the_permalink(); ?>">

			<!-- Image -->
			<?php echo the_post_thumbnail( 'medium', ['class' => 'img-responsive'] );?>

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
		<a class="card-body" href="<?php echo the_permalink(); ?>">

			<!-- Heading -->
			<h3>
				<?php echo wp_trim_words( get_the_title(), 6, '...' ); ?>
			</h3>

			<!-- Text -->
			<p class="mb-0">
				<?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>
			</p>

		</a>

	</div>

</div>
