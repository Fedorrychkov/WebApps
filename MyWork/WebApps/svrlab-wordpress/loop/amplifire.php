<? ?>
<article class="amplifire">
  <a href="<? the_permalink();?>">
    <div class="amplifire__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
    </div>
  </a>
  <div class="amplifire__content">
    <a href="<? the_permalink();?>"><h3 class="amplifire__title"><? the_title(); ?></h3></a>
    <div class="amplifire__text">
      <? the_excerpt(); ?>
    </div>
  </div>
</article>
