<article class="last_news">
  <a class="last_news__link" href="<? the_permalink();?>">
    <div class="last_news__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
    </div>
  </a>
  <div class="last_news__content">
    <a href="<? the_permalink();?>"><h3 class="last_news__title"><? the_title(); ?></h3></a>
    <div class="last_news__text">
      <? the_excerpt(); ?>
    </div>
    <a href="<? the_permalink();?>" class="button button__last_news last_news__button">Подробнее</a>
  </div>
</article>
