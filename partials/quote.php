 <!-- Quote Block -->
<div class="quote container <?php echo get_sub_field('category_color') ?>">
	<div class="row">
		<div class="col-10 offset-1">
			<h5 class="quote__bg">
				success
			</h5>
			<div class="row">
				<div class="col-12 col-md-1 quote__icon">
					<?php if ( get_sub_field('category_color') == 'adopt' ) : ?>
						<img class="" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/quote-adopt.png" alt="">
					<?php elseif ( get_sub_field('category_color') == 'programs') : ?>
						<img class="" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/quote-programs.png" alt="">
					<?php endif; ?>
				</div>
				<div class="col-12 col-md-11">
					<h4 class="quote__text">
						<?php echo get_sub_field('quote_text') ?>
						<a href="#" class="quote__link">[read more]</a>
					</h4>
				</div>
			</div>
		</div>
	</div>
</div>