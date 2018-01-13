<?php
	$section_posts =  new WP_Query ( array(
		'post_type'				=> get_sub_field('posts'),
		'posts_per_page' 	=> 8,
		'cat'							=> get_sub_field('posts_category')
	));
?>
<div class="section__posts">
	<!-- Posts Carousel Title -->
	<?php if (get_sub_field('posts_title')) : ?>
		<h2 class="section__posts__title">
			<?php echo get_sub_field('posts_title') ?>
		</h2>
		<hr>
	<?php endif; ?>
	<!-- Posts Carousel Loop -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel post-carousel owl-theme">
					<?php if ( $section_posts->have_posts() ) : ?>
						<?php while ( $section_posts->have_posts() ) : $section_posts->the_post(); ?>
							<div class="item">
								<div class="section__post">
									<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
										<h3 class="title">
												<span>
													<?php the_title(); ?>
												</span>
										</h3>
									</a>
								</div>
								<a href="<?php the_permalink(); ?>" class="learn-more">learn more</a>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>