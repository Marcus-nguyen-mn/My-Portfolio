<section class="rate my-40">
  <div class="rate__contain position--relative">
    <div class="container">
      <div class="rate__title title--section text--upcase my-40">đánh giá từ khách hàng</div>
    </div>
    <div class="row-divide">
      <div class="col-divide-3 col-divide-md-12">
      </div>
      <div class="col-divide-9 col-divide-md-12 main--background">
        <div class="rate__content height--100 py-65-px-30">
          <div class="rate__list">
          <?php $customCount=1;while ( have_rows('rate_customer','option') ) : the_row();
            $customRate = get_sub_field('rate_check_customer','option');
            $customRateRev = 5 - $customRate;
            $customRateRes = '';
            if( $customRateRev !== 0 ){
              $customRateCount =1;
              $customRateRevCount =1;
              while($customRateCount <= $customRate){
                $customRateRes = ''.$customRateRes.'<i class="fas fa-star text--yellow mxr-5"></i>';
              $customRateCount++;
              }
              while($customRateRevCount <= $customRateRev){
                $customRateRes = ''.$customRateRes.'<i class="far fa-star text--yellow mxr-5"></i>';
              $customRateRevCount++;
            }}else{
              $customRateCount =1;
              while($customRateCount <= $customRate){
                $customRateRes = ''.$customRateRes.'<i class="fas fa-star text--yellow mxr-5"></i>';
              $customRateCount++;
              }
            }
          ?>
            <div class="rate__item">
              <div class="d--flex justify--content--end dp--block">
                <div class="rate__item-number">
                    <span>0<?php echo $customCount ?></span>
                </div>
                <div class="rate__item-content mx-35 width--60 myb-phone-20">
                  <div class="rate__item-title title--item text--light my-6"><?php  the_sub_field('rate_name_customer','option')?></div>
                <div class="rate__item-alt my-6">
                  <div class="row-divide">
                    <div class="col-divide-4 col-divide-md-12 my-6"><span class="text--yellow">Giới tính:</span><span class="text--light"> <?php the_sub_field('rate_sex_customer','option') ?></span></div>
                    <div class="col-divide-4 col-divide-md-12 my-6"><span class="text--yellow">Tuổi:</span><span class="text--light"> <?php the_sub_field('rate_year_customer_copy','option') ?></span></div>
                    <div class="col-divide-4 col-divide-md-12 my-6"><span class="text--yellow">Công việc:</span><span class="text--light"> <?php the_sub_field('rate_job_customer','option') ?></span></div>
                  </div>
                </div>
                <div class="rate__item-des text--light my-6">
                  <?php the_sub_field('rate_content_customer','option') ?>
                </div>
                <div class="rate__item-content my-6 text--right">
                  <?php echo $customRateRes;?>
                </div>
               </div>
              </div>
            </div>
          <?php $customCount++; endwhile; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="rate__img">
      <img src="<?php the_field('rate_picture','option') ?>" alt="rate-img">
    </div>
  </div>
</section>
