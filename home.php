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

get_header();
?>
<div class="bg-white">
<section class="pg-all-service__header jarallax">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 text-left">

				<!-- Heading -->
				<h1 class="display-1 pg-all-service__header__title">
					Shane's Pristine Power Washing News & Articles
				</h1>

			</div>
			<div class="col-12 col-lg-6 d-flex align-items-start justify-content-center flex-column">
				<p class="lead">Shane’s Pristine Powerwash LLC is committed to remaining up to date on the latest technology, products, safety and green technologies in the Power Washing / Pressure Washing Industry.</p>
				<p class="mb-0 mt-4">
					<a href="#primary" class="btn btn-primary">
						View All Articles
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


<div id="primary" class="content-area mt-6">
	<main class="site-main" id="main">
		<div class="container">

			<div class="row">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'partials/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'partials/content', 'none' );

		endif;
		?>
	</div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
