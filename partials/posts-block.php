<?php 
	global $post_block_count;
	if (empty($post_block_count)) { 
		$post_block_count = 0; 
	}
	$section_posts =  new WP_Query ( array(
		'posts_per_page' 	=> 8,
		'post_type'				=> get_sub_field('posts_category'),
		'offset' 					=> $post_block_count
	));
?>
<div class="section__posts <?php echo get_sub_field('category_color') ?>">
		<!-- Posts Block Title -->
		<?php if (get_sub_field('posts_title')) : ?>
			<h2 class="section__posts__title">
				<?php echo get_sub_field('posts_title') ?>
			</h2>
			<hr>
		<?php endif; ?>
		<!-- Posts Block -->
		<div class="container">			
			<div class="row">
				<?php if ( $section_posts->have_posts() ) : ?>
					<?php while ( $section_posts->have_posts() ) : $section_posts->the_post(); ?>
						<div class="col-lg-3 col-sm-6">
							<div class="section__post">
								<a href="<?php the_permalink(); ?>" class="thumbnail" title="<?php the_title_attribute(); ?>" style="background-image:url('<?php echo get_the_post_thumbnail_url() ?>');">
									<h3 class="title">
										<span>
											<?php the_title(); ?>
										</span>
									</h3>
								</a>
							</div>
						</div>
						<?php $post_block_count++; ?>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
	  </div>
	</div>
</div>