 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- count slides, display indicators for each slide -->
  <ol class="carousel-indicators">
    <?php if (have_rows('flexible_slider')) :
    $count = 0;
    while (have_rows('flexible_slider')) :
      the_row(); $count++;
    if ( $count == 1 ) { ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      <?php if( get_sub_field('slider_title') != '' ): ?>
        <h5>
          <?php the_sub_field('slider_title') ?>
        </h5>
      <?php endif; ?>
    </li>
    <?php } else { ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $count - 1  ?>" class="">
      <?php if( get_sub_field('slider_title') != '' ): ?>
        <h5>
          <?php the_sub_field('slider_title') ?>
        </h5>
      <?php endif; ?>
    </li>
    <?php }
    endwhile;
    endif; ?>
  </ol>
  <!-- display sliders -->
  <div class="carousel-inner" role="listbox">
    <?php if (have_rows('flexible_slider')) :
    $count = 0;
    while (have_rows('flexible_slider')) :
      the_row(); $count++; ?>
    <div class="carousel-item adopt <?php if ($count == 1){ echo 'active'; } ?>" style="background-image: url(<?php if( get_sub_field('slider_image') != '' ){ the_sub_field('slider_image'); } ?> );">
      <div class="carousel-caption d-md-block">
        <?php if( get_sub_field('slider_title') != '' ): ?>
          <h1 class="title">
            <?php the_sub_field('slider_title') ?>
          </h1>
        <?php endif; ?>
        <hr>
        <?php if( get_sub_field('slider_content') != '' ): ?>
          <p class="topic">
            <?php the_sub_field('slider_content') ?>
          </p>
        <?php endif; ?>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div>
    </div>
    <?php
    endwhile;
    endif; ?>
  </div>
</div>