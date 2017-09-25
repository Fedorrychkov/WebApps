<?
 /*
 Template Name: Blog Post
 Description: Является шаблоном для страницы Блога. Работает автоматически, подключать не обязательно.
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="product animations__fadebottom">
    <div class="product__inner page-wrapper content__inner content__shadow">



      <div class="breadcrumbs">
        <p><a href="../" class="breadcrumbs__link breadcrumbs__item">Блог</a><i class="breadcrumbs__icon material-icons breadcrumbs__item">keyboard_arrow_right</i><span class="breadcrumbs__text breadcrumbs__item"><? the_title(); ?></span></p>
      </div>
      <div class="product__content flex_co__between_fstart offset__padding-top--lg">
        <div class="news__content">
          <h3 class="news__title title__block"><? the_title(); ?></h3>
          <? the_post_thumbnail(); ?>
          <div class="news__date"><? echo get_the_date('j F'); ?></div>
          <div class="news__text">
            <? while ( have_posts() ) : the_post(); ?>
                <? if ( the_content() != '' ): ?>
    
                  <? the_content();?>
                <? endif ?>
            <? endwhile; ?>        
              
          </div>
        </div>
        <div class="product__text offset__padding-left--lg offset__padding-right--lg">
          
          <div class="product__textbox offset__padding-top--md news__textbox">
            <h4 class="product__info--title title__block-child">Последние публикации</h4>
            <?
            $query = new WP_Query( array(
                'post_type' => 'blog',
                'posts_per_page' => 4,
                'post__not_in' => array( get_the_ID() )
            ) );
            if ( $query->have_posts() ) { ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php get_template_part('loop/more_blog'); ?>
                <?php endwhile;
                wp_reset_postdata(); 
            }?>
          </div>
          <div class="product__invite offset__margin-top--lg"  data-stick="invite">
            <p class="">Приглашаем на примерку к нам в салон</p>
            <button data-popup="BUTTON_INVITE" class="button waves-effect waves-light button__invite offset__margin-top--md">Записаться на примерку</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
