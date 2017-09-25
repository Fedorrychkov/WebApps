<? ?>
<article class="dress">
  <a href="<? the_permalink();?>">
    <div class="dress__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
    </div>
  </a>
  <div class="dress__content">
    <a href="<? the_permalink();?>"><h3 class="dress__title"><? the_title(); ?></h3></a>
    <div class="dress__text">
      <? the_excerpt(); ?>
    </div>
  </div>
</article>
