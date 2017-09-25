<?

$mypost = array( 'post_type' => 'photo_projects', );
$loop = new WP_Query( $mypost );
$photo_project_review = get_post_meta($post->ID, 'photo_project_review', true);

?>
<a class="photo_project__link" href="<? the_permalink();?>">
  <article class="photo_project">
      <div class="photo_project__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
      </div>
    <div class="photo_project__content">
      <h3 class="photo_project__title"><? the_title(); ?></h3>
      <button class="button button__post photo_project__button">Подробнее</button>
    </div>
  </article>
</a>
