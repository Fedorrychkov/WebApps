<?
 /*
 Template Name: Brides Post
 Description: Является шаблоном для страницы Невесты. Работает автоматически, подключать не обязательно.
 */

$mypost = array( 'post_type' => 'brides', );
$loop = new WP_Query( $mypost );
$brides_review = get_post_meta($post->ID, 'brides_review', true);
$brides_dressUsed = get_post_meta($post->ID, 'brides_dressUsed', true);
$brides_dress = get_post_meta($post->ID, 'brides_dress', true);

get_header(); ?>

<main class="main content" data-slidecontent="">
  <div class="bride_page animations__fadebottom">
    <div class="bride_page__inner page-wrapper">
      <div class="breadcrumbs">
        <p><a href="../" class="breadcrumbs__link breadcrumbs__item">Наши невесты</a><i class="breadcrumbs__icon material-icons breadcrumbs__item">keyboard_arrow_right</i><span class="breadcrumbs__text breadcrumbs__item"><? the_title(); ?></span></p>
      </div>
      <div class="bride_page__title title__block"><? the_title(); ?></div>
      <div class="bride_page__images" data-productImage="">
        
      </div>
      
      <div class="bride_page__content" data-removeImages="">
      <? echo $brides_review; ?>
      <? while ( have_posts() ) : the_post(); ?>
          <? if ( the_content() != '' ): ?>

            <? the_content();?>
          <? endif ?>
      <? endwhile; ?>
        <? if($brides_dress != '' && $brides_dressUsed != '') {?>
          <div class="bride_page__dress">
            <a href="<? bloginfo('url');?>/dress_collection/<? echo $brides_dressUsed;?>" class="button button__dress bride_page__button">Посмотреть платье <? echo $brides_dress;?></a>
          </div>
        <?}?>
      </div>
      <div class="bride_page__controls">
        <a href="../" class="button button__post bride_page__button">К списку невест</a>
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
