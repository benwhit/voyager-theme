<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voyager_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="page-content">

			<?php
			if( have_rows('flexible_content') ):
				while ( have_rows('flexible_content') ) : the_row();

					// Category Section Layout
					if( get_row_layout() == 'category_section' )
						get_template_part('partials/category-section');

					// Posts Section
					if( get_row_layout() == 'posts_carousel' )
						get_template_part('partials/posts-carousel');			

					// Quote Layout
					if (get_row_layout() == 'quote')
						get_template_part('partials/quote');

				endwhile;
			endif; 
			?>


			<article class="about">
				<img src="http://pwc.dev/wp-content/uploads/2017/06/contact-bg.png" alt="" class="bg-image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<img class="page__lead__img" src="http://pwc.dev/wp-content/uploads/2017/06/contact.jpg" alt="">
							<img class="accent-left" src="./wp-content/themes/voyager-theme/images/accent-left.png" alt="">	
						</div>
						<div class="col-sm-6">
							<header>
								<h4 class="subtitle">
									get to know our organization
								</h4>
								<h1 class="title">
									about us
								</h1>
							</header>
							<hr>
							<p class="topic">
								two lines of text that entices people to adopting a pet
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet augue et tellus convallis finibus. Maecenas elementum tortor sed ligula varius elementum. Mauris semper libero sed ante facilisis imperdiet id eu eros. 
							</p>
							<a href="#" class="btn btn-primary">view all news</a>						
						</div>
						<div class="col-sm-6">
							<header>
								<h4 class="subtitle">
									we want to hear from you...
								</h4>
								<h1 class="title">
									contact us
								</h1>
							</header>
							<hr>
							<p class="topic">
								we're standing by to assist you in your area of animal need!
							</p>
							<table>
								<tr>
									<td>Call Us:</td>
									<td>(703) 634-0880</td>
								</tr>
								<tr>
									<td>Email Us:</td>
									<td>info@pwhumane.org</td>
								</tr>
								<tr>
									<td>Visit Us:</td>
									<td>17983 Dumfries Shopping Plaza, <br> Dumfries, Virginia 22026</td>
								</tr>
							</table>
							<a href="#" class="btn btn-primary">contact us</a>
						</div>
					</div>
				</div>
			</article>

		</section>
	</main>
</div>

<?php
get_footer();
