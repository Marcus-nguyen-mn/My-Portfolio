<section class="carousel">
  <div class="carousel__list">
    <?php $bannerCount=1;while ( have_rows('banner','option') ) : the_row(); ?>
      <div class="carousel__item">
        <img src="<?php the_sub_field('banner_item','option') ?>" alt="banner-img-<?php echo $bannerCount?>" class="d--block">
      </div>
    <?php $bannerCount++; endwhile; ?>
  </div>
</section>
