<?php
/**
 * Template Name: FAQs
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Voyager_Theme
 */

get_header(); ?>
<div class="page__header about" style="<?php if (get_field('header_image')) { ?>
			background-image: url(<?php the_field('header_image') ?>);" <?php } ?>">
	<h1 class="page__title">
		<?php the_title(); ?>
	</h1>
	<hr>	
</div>		
	<div id="primary" class="content-area about">
		<main id="main" class="site-main" role="main">
			<section class="container">
				<div class="row">
					<div class="col-sm-12">
						<p class="return">
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							<i class="fa fa-angle-left"></i>
							return to
							<a href="<?php echo get_site_url(); ?>">home</a>
						</p>
					</div>
				</div>
			</section>
			<section class="page-content">
				<div class="container">
					<div class="row">
						<div class="col-12">							
						<?php
							if( have_rows('faq') ):
						    while ( have_rows('faq') ) : the_row(); ?>

						  		<p class="question">
						  			<span>Q:</span>						  		
							  		<?php the_sub_field('question'); ?>
						  		</p>
						  		<?php the_sub_field('answer'); ?>

						  	<?php endwhile; ?>							    
						<?php else : ?>

								<h1>No FAQs at the moment.</h1>

						<?php endif;	?>
						</div>
					</div>
				</div>
			</section>			
		</main>
	</div>

<?php
get_footer();
