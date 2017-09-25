<? $loop = new WP_Query( array( 
                          'post_type' => array('dresses'),
                          'tax_query' => array(
                                                'taxonomy' => 'dresses_category',
                                                'field' => 'id',
                                                'terms' => array( 2 )
                                              ) 
                        ) );
  
  if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php get_template_part('loop/dresses'); ?>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
