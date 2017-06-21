<!-- Category Section Block -->
<article class="<?php echo get_sub_field('category') ?>">
	<img class="bg-image" src="<?php echo get_sub_field('background_image'); ?>" alt="">
	<div class="container">
		<div class="row">
				<div class="<?php if ( get_sub_field('image_display') == 'left' ){ echo 'col-lg-5 col-sm-6'; } else { echo 'col-sm-6 col-lg-5 offset-lg-1 flex-last'; } ?>">
					<?php if ( get_sub_field('image_display') == 'left' ){ ?>
						<img class="accent-left" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-left.png" alt="">
					<?php } else { ?>
						<img class="accent-right" src="<?php echo get_site_url(); ?>/wp-content/themes/voyager-theme/images/accent-right.png" alt="">
					<?php } ?>
					<img class="page__lead__img" src="<?php echo get_sub_field('image'); ?>" alt="">									
				</div>
				<div class="col-sm-6 <?php if ( get_sub_field('image_display') == 'left' ){ echo 'offset-lg-1'; } ?>">
					<header>
						<h4 class="subtitle">
							<?php echo get_sub_field('subheader'); ?>
						</h4>
						<h1 class="title">
							<?php echo get_sub_field('title') ?>
						</h1>
					</header>
					<hr>
					<p class="topic">
						<?php echo get_sub_field('subtitle'); ?>
					</p>
					<p>
						<?php echo get_sub_field('content'); ?>
					</p>
					<?php if( get_sub_field('button') ): ?>
						<a href="<?php echo get_sub_field('button_link'); ?>" class="btn btn-primary">
							<?php echo get_sub_field('button'); ?>
						</a>
					<?php endif; ?>
				</div>
		</div>
	</div>
</article>