<?

$mypost = array( 'post_type' => 'brides', );
$loop = new WP_Query( $mypost );
$brides_review = get_post_meta($post->ID, 'brides_review', true);
$brides_dressUsed = get_post_meta($post->ID, 'brides_dressUsed', true);
$brides_dress = get_post_meta($post->ID, 'brides_dress', true);

?>
<a class="bride__link" href="<? the_permalink();?>">
  <article class="bride">
      <div class="bride__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
      </div>
    <div class="bride__content">
      <h3 class="bride__title"><? the_title(); ?></h3>
      <button class="button button__post bride__button">Подробнее</button>
    </div>
  </article>
</a>
