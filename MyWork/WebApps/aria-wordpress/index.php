<? get_header(); ?>

<main class="main" data-slidecontent="">
  <div class="collections animations__fadebottom">
    <div class="collections__inner page-wrapper content">
      <h2 class="content__title collections__title">Свадебные платья</h2>
      <div class="collections__items flex_co__between_fstart">
        <!-- <?php //echo do_shortcode("[dresses]"); ?> -->
        <!-- <?php //echo do_shortcode("[dresses_collection]"); ?> -->
        <?php get_template_part('loop/collections'); ?>
      </div>
    </div>
  </div>
</main>


<? get_footer(); ?>
