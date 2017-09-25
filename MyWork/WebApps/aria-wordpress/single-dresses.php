<?
 /*
 Template Name: Dress Page
 Description: Является шаблоном для страницы Платья. Работает автоматически, подключать не обязательно.
 */

$mypost = array( 'post_type' => 'dresses', );
$loop = new WP_Query( $mypost );
$dresses_colors = get_post_meta($post->ID, 'dresses_colors', true);
$dresses_materials = get_post_meta($post->ID, 'dresses_materials', true);
get_header(); ?>

<main class="main content" data-slidecontent="">
  <div class="product animations__fadebottom">
    <div class="product__inner page-wrapper content__inner content__shadow">



      <div class="breadcrumbs">
      <? $term = get_the_terms( $post_type->ID, 'dresses_collection' );
      
         //print_r($term);
         //$term_link = get_term_link($term->term_id, 'dresses_collection');
        foreach( $term as $termin ){
          $term_link = get_term_link( $termin );
          $term_name = $termin->name;
        }
        ?>
        <p><a href="<? echo $term_link; ?>" class="breadcrumbs__link breadcrumbs__item">Коллекция <? echo $term_name; ?></a><i class="breadcrumbs__icon material-icons breadcrumbs__item">keyboard_arrow_right</i><span class="breadcrumbs__text breadcrumbs__item"><? the_title(); ?></span></p>
      </div>
      <div class="product__content flex_co__between_fstart offset__padding-top--lg">
        <div class="product__image" data-productImage="">
    
        </div>
        <div class="product__text offset__padding-left--lg offset__padding-right--lg">
          <div class="product__header flex_co__between">
            <h4 class="title__block"><? the_title(); ?></h4>
              <div class="favorite_product" data-favorite-post="<? echo get_the_ID();?>"><i class="material-icons pulse">favorite</i></div>
          </div>
          <div class="product__textbox offset__padding-top--md">
            <h4 class="product__info--title title__block-child">Размерный ряд</h4>
            <p class="product__info--desc">от 38 до 60 размера</p>  
          </div>
          <? if ( $dresses_colors != '' ): ?>
            <div class="product__textbox offset__padding-top--md">
              <h4 class="product__info--title title__block-child">Возможные цвета</h4>
              <p class="product__info--desc"><? echo $dresses_colors; ?></p>  
            </div>
          <? endif ?>
          <? if ( $dresses_materials != '' ): ?>
            <div class="product__textbox offset__padding-top--md">
              <h4 class="product__info--title title__block-child">Материалы</h4>
              <p class="product__info--desc"><? echo $dresses_materials; ?></p>  
            </div>  
          <? endif ?>
          <div class="product__textbox offset__padding-top--md">
            <h4 class="product__info--title title__block-child">Описание</h4>
            <div class="product__info--desc" data-removeImages="">
                <? while ( have_posts() ) : the_post(); ?>
                    <? if ( the_content() != '' ): ?>
        
                      <? the_content();?>
                    <? endif ?>
                <? endwhile; ?>        
            </div>
          </div>
          <div class="product__invite offset__margin-top--lg"  data-stick="invite">
            <p class="">Приглашаем на примерку к нам в салон</p>
            <button data-popup="BUTTON_INVITE" class="button waves-effect waves-light button__invite offset__margin-top--md">Записаться на примерку</button>
          </div>
        </div>
      </div>
      <div class="page_navigation flex_co__between">
        <? previous_post_link('<strong>%link</strong>'); ?>
        <? next_post_link('<strong>%link</strong>'); ?>
      </div>
    </div>
  </div>
</main>

<? get_footer(); ?>
