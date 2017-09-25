<?
 /*
 Template Name: Photo Projects Post
 Description: Является шаблоном для страницы Невесты. Работает автоматически, подключать не обязательно.
 */

$mypost = array( 'post_type' => 'photo_project', );
$loop = new WP_Query( $mypost );
$photo_project_description = get_post_meta($post->ID, 'photo_project_description', true);
$photo_project_photograph = get_post_meta($post->ID, 'photo_project_photograph', true);
$photo_project_dress = get_post_meta($post->ID, 'photo_project_dress', true);

get_header(); ?>

<main class="main content" data-slidecontent="">
  <div class="photo_project_page animations__fadebottom">
    <div class="photo_project_page__inner page-wrapper">
      <div class="breadcrumbs">
        <p><a href="../" class="breadcrumbs__link breadcrumbs__item">Наши фотопроекты</a><i class="breadcrumbs__icon material-icons breadcrumbs__item">keyboard_arrow_right</i><span class="breadcrumbs__text breadcrumbs__item"><? the_title(); ?></span></p>
      </div>
      <div class="photo_project_page__title title__block"><? the_title(); ?></div>
      <div class="photo_project_page__content" data-removeImages="">
        <div class="photo_project__description">
          <? echo $photo_project_description; ?>
        </div>
      <? while ( have_posts() ) : the_post(); ?>
          <? if ( the_content() != '' ): ?>

            <? the_content();?>
          <? endif ?>
      <? endwhile; ?>
      </div>
      
      <div class="photo_project_page__meta">
        <?if($photo_project_photograph != '') {?><div class="photo_project__photograph photo_project_page__content_item">
          <div><strong>Фотографы: </strong><? echo $photo_project_photograph; ?></div>
        </div><?}?>
        <?if($photo_project_dress != '') {?><div class="photo_project__dress photo_project_page__content_item">
          <div><strong>Платья: </strong><? echo $photo_project_dress; ?></div>
        </div><?}?>
      </div>

      <div class="photo_project_page__images photo_project_page__content_wrap" data-productImage="">
        
      </div>
      <div class="photo_project_page__controls">
        <a href="../" class="button button__post photo_project_page__button">К списку фотопроектов</a>
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
