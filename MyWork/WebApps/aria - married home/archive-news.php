<?
 /*
 Template Name: News Archive
 Description: Является шаблоном для страницы Новостей. Работает автоматически, подключать не обязательно.
 */

get_header(); ?>
<main class="main content" data-slidecontent="">
  <div class="news_page animations__fadebottom">
    <div class="news_page__inner page-wrapper">
      <h2 class="content__title news_page__title">Новости и акции</h2>
      <div class="news_page__content">
         <?php get_template_part('loop/news'); ?>        
      </div>
    </div>
  </div>
</main>
<? get_footer(); ?>
