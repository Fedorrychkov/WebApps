<?php 
$loop = new WP_Query( array( 'post_type' => array('company_blog'), 'posts_per_page' => 10) );
  if ( $loop->have_posts() ) :
    while ( $loop->have_posts() ) : $loop->the_post(); ?>    
      <?php 
      if( is_new_day() ){ ?>
            <div class="underline2"></div>
            <div class="date">
              <h4> <?php the_date(j); ?></h4>
              <p><span><?php echo get_the_date('F'); ?></span></p>          
              <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
            </div>
            <div class="posts">
              <?php get_template_part('loop-company_blog'); ?>
            </div>
      <?} else {?>
            <div class="underline2"></div>
          <div class="date">
              <h4> <? echo get_the_date(j); ?></h4>
              <p><span><?php echo get_the_date('F'); ?></span></p>
              <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
            </div>
          <div class="posts">
              <?php get_template_part('loop-company_blog'); ?>
            </div>
      <?}?>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); 
wp_reset_query();?>
