<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Voyager_Starter
 */

get_header();
?>

<section class="pg-service__header jarallax" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-left">

				<!-- Heading -->
				<h1 class="display-2 font-weight-bold text-white">
					<?php echo the_title(); ?>
				</h1>

			</div>
		</div> <!-- / .row -->
	</div> <!-- / .container -->
</section>

<div class="pg-service__breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
			</div>
<!-- 			<div class="col-12 col-md-6 text-md-right">
				We Don't Just Clean...We Make It Pristine!
				<br class="d-flex d-md-none">
				<a href="tel:(540) 786-2626" class="ml-0 pl-0 ml-md-2">(540) 786-2626</a>
			</div> -->
		</div>
	</div>
</div>


<div class="wrapper mt-8" id="page-wrapper">
	<main class="site-main" id="main">
		<div class="container" id="content" tabindex="-1">

			<div class="row">
				<div class="col-12 col-md-7">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'partials/content', 'single-post' );
						the_post_navigation();
			            // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
					endif;
			        endwhile; // End of the loop.
			        ?>
			    </div>

			    <div class="col-12 col-md-4 offset-0 offset-lg-1">
			    	<?php echo get_sidebar(); ?>
			    </div>
			</div>
		</div>
	</main>
</section>

<?php
get_footer();
