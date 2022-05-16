<div class="sidebar">
  <div class="sidebar__ads">
    <a href="<?php echo get_theme_mod('sidebar_img_url_ads') ?>" class="d--block">
      <img src="<?php echo get_theme_mod('sidebar_img_ads') ?>" alt=" image-banner" class="d--block">
    </a>
  </div>
  <div class="sidebar__social">
    <div class="sidebar__social-title section-heading myt-20">
      Theo dõi chúng tôi
    </div>
    <div class="sidebar__social-item my-12">
      <a href="https://zalo.me/<?php echo get_theme_mod('zalo_phone_number') ?>" rel="noreferrer" target="_blank">
        <img src="<?php echo get_theme_file_uri('/assets/images/zalo-seeklogo.com.svg') ?>" class="mxr-5" alt="zalo-img" style="width:40px">
      </a>
      <a href="<?php echo get_theme_mod('sidebar_facebook_url') ?>" rel="noreferrer" target="_blank">
        <img src="<?php echo get_theme_file_uri('/assets/images/logo-facebook.svg') ?>" class="mxr-5" alt="zalo-img" style="width:37.7px">
      </a>
    </div>
  </div>
  <div class="sidebar__feature">
    <div class="sidebar__feature-title section-heading myt-20">
      Tin mới nhất
    </div>
    <?php
    $postNumber =get_theme_mod('number_post_sidebar');
    $args = array(
      'post_type'         => 'post',
      'post_status'       => 'publish',
      'order_by'          => 'DESC',
      'posts_per_page'    =>  $postNumber
    );

    $news_list = new WP_Query( $args );
    if( $news_list->have_posts() ) :
    ?>

    <div class="news__list">
      <?php
      while( $news_list->have_posts() ) :
        $news_list->the_post();
        ?>
          <div class="news__item my-12 d--flex dt--block dp--flex">
            <div class="news__item-img mxr-15">
              <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail')?></a>
            </div>
            <div class="news__description">
              <div class="news__item-contain">
                <div class="news__item-content">
                  <a href="<?php the_permalink();?>"><h4 class="news__item-title"><?php echo the_title();?></h4></a>
                </div>
              </div>
              <div class="news__description-date mc--text date">
                <span class="d--block"><i class="fal fa-history"></i>&nbsp;<?php echo get_the_date(); ?></span>
                <span class="space--left d--block"><?= gt_get_post_view(); ?></span>
              </div>
            </div>
          </div>
        <?php
      endwhile;
      wp_reset_postdata();
      ?>
      <?php
      else :
        esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
      endif;?>
  </div>
</div>
