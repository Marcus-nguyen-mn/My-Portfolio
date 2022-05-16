<section class="newspaper my-40" id="newSpaper">
	<div class="container">
		<h3 class="title--section text--upcase">Tin tức</h3>
		<div class="newspaper__more">
			<a class="newspaper__more-btn" href="javascript:void(0)">Xem Thêm&nbsp;&nbsp;&#8594;</a>
		</div>
				<?php
				$args = array(
					'post_type'   => 'post',
					'post_status' => 'publish',
				);

				$news_list = new WP_Query( $args );
				if( $news_list->have_posts() ) :
				?>

				<div class="news__list">
					<?php
					while( $news_list->have_posts() ) :
						$news_list->the_post();
						?>
							<div class="news__item mx-15">
								<div class="news__item-img">
									<a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium')?></a>
								</div>
								<div class="news__description">
									<div class="news__item-contain">
										<div class="news__item-content">
											<a href="<?php the_permalink();?>"><h4 class="news__item-title"><?php echo the_title();?></h4></a>
										</div>
									</div>
									<div class="new__summary">
										<?php the_excerpt(); ?>
									</div>
									<div class="news__description-date mc--text">
										<span><i class="fal fa-history"></i>&nbsp;<?php echo get_the_date(); ?></span>
										<span class="space--left"><?= gt_get_post_view(); ?></span>
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
</section>
