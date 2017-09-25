<?
 /*
 Template Name: Dresses Collection
 Description: Является шаблоном для страницы Коллекций свадебных платьев. Работает автоматически, подключать не обязательно.
 */

get_header(); ?>

<main class="main" data-slidecontent="">
  <div class="collections animations__fadebottom">
    <div class="collections__inner page-wrapper content">
      <h2 class="content__title collections__title">Свадебные коллекции</h2>
      <div class="collections__items flex_co__between_fstart">
        <?php get_template_part('loop/collections'); ?>
      </div>
    </div>
  </div>
</main>


<? get_footer(); ?>
