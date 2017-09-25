<?
 /*
 Template Name: Blog Archive
 Description: Является шаблоном для страницы Блога. Работает автоматически, подключать не обязательно.
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="news_page animations__fadebottom">
    <div class="news_page__inner page-wrapper">
      <h2 class="content__title news_page__title">Блог</h2>
      <div class="news_page__content">
        <?
            $query = new WP_Query( array(
                'post_type' => 'blog'
            ) );
            if ( $query->have_posts() ) { ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php get_template_part('loop/blog'); ?>
                <?php endwhile;
                wp_reset_postdata(); 
            }?>
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
