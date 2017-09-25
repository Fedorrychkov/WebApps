<? get_header(); ?>

<div class="welcome" style="/*background-image: url(<? bloginfo('template_url'); ?>/assets/img/amplifire.jpg);*/">
  <div class="welcome__inner page-wrapper">
      <? get_template_part('templates/welcome') ?>
  </div>
</div>

<!-- <div class="prod">
  <div class="prod__inner page-wrapper">
    <h2 class="prod__title title__block"></h2>
    <div class="prod__items flex_co__between">
      <? get_template_part('templates/prod') ?>
      <? get_template_part('templates/prod') ?>
      <? get_template_part('templates/prod') ?>
    </div>
  </div>
</div> -->

 <div class="amplifires">
  <div class="amplifires__inner page-wrapper">
    <h2 class="amplifires__title title__block">Ламповая аппаратура</h2>
    <div class="amplifires__items">
      <?
      $query = new WP_Query( array(
          'post_type' => 'amplifire'
      ) );
      if ( $query->have_posts() ) { ?>
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <? get_template_part('templates/amplifire') ?>
          <?php endwhile;
          wp_reset_postdata(); 
      }?>
      
    </div>
  </div>
</div> 

<? get_footer(); ?>
