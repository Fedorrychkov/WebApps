<?
 /*
 Template Name: Brides Archive
 Description: Является шаблоном для страницы Наших невест. Работает автоматически, подключать не обязательно.
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="brides animations__fadebottom">
    <div class="brides__inner page-wrapper">
      <h2 class="content__title brides__title">Наши невесты</h2>
      <div class="brides__content flex_co__between_fstart">
        <?
            $query = new WP_Query( array(
                'post_type' => 'brides'
            ) );
            if ( $query->have_posts() ) { ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php get_template_part('loop/brides'); ?>
                <?php endwhile;
                wp_reset_postdata(); 
            }?>
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
