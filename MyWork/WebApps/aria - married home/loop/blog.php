<??>
<article class="news_post">
  <a class="news_post__link" href="<? the_permalink();?>">
    <div class="news_post__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
    </div>
  </a>
  <div class="news_post__content">
    <a href="<? the_permalink();?>"><h3 class="news_post__title"><? the_title(); ?></h3></a>
    <div class="news_post__text">
      <? the_excerpt(); ?>
    </div>
    <a href="<? the_permalink();?>" class="button button__post news_post__button">Подробнее</a>
  </div>
</article>
