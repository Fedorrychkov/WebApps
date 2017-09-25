<? 
    $args = array(
      'taxonomy'      => array( 'news_category'), // название таксономии с WP 4.5
      'orderby'       => 'id', 
      'order'         => 'ASC',
      'hide_empty'    => true, 
      'object_ids'    => null, // 
      'include'       => array(),
      'exclude'       => array(), 
      'exclude_tree'  => array(), 
      'number'        => '', 
      'fields'        => 'all', 
      'count'         => false,
      'slug'          => '', 
      'parent'         => '',
      'hierarchical'  => true, 
      'child_of'      => 0, 
      'get'           => '', // ставим all чтобы получить все термины
      'name__like'    => '',
      'pad_counts'    => false, 
      'offset'        => '', 
      'search'        => '', 
      'cache_domain'  => 'core',
      'name'          => '', // str/arr поле name для получения термина по нему. C 4.2.
      'childless'     => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
      'meta_query'    => '',
    ); 

    $myterms = get_terms( $args );

    
?>
<?   
    foreach( $myterms as $term ){
      //print_r($term);
      $term_link = get_term_link($term->term_id, 'news_category');


?>


<article class="news_post">
  <a class="news_post__link" href="<? the_permalink();?>">
    <div class="news_post__image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?> );">
      <div class="news_post__meta"><? echo $term->name; ?></div>
    </div>
  </a>
  <div class="news_post__content">
    <a href="<? the_permalink();?>"><h3 class="news_post__title"><? the_title(); ?></h3></a>
    <div class="news_post__text">
      <? the_excerpt(); ?>
    </div>
    <a href="<? the_permalink();?>" class="button button__post news_post__button">Подробнее</a>
  </div>
  <div class="news_post__date"><? echo get_the_date('d F Y'); ?></div>
</article>
<? } ?>