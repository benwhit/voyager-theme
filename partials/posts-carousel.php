<!-- Posts Carousel Block -->
<?php
	$section_posts =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'cat' 						=> get_sub_field('posts')
	));
?>

<div class="section__posts <?php echo get_sub_field('category_color') ?>">		
	<!-- Posts Carousel Title -->
	<?php if (get_sub_field('posts_title')) : ?>
		<h2 class="section__posts__title">
			<?php echo get_sub_field('posts_title') ?>
			<br>
			<hr>
		</h2>
	<?php endif; ?>
	<!-- Posts Carousel Loop -->
	<div class="container">			
		<div class="row">
			<div class="col-12">				
				<div class="owl-carousel post-carousel owl-theme">
					<?php if ( $section_posts->have_posts() ) : ?>
						<?php while ( $section_posts->have_posts() ) : $section_posts->the_post(); ?>
							<div class="section__post item">								
							<a href="" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');"></a>
								<h3 class="title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>