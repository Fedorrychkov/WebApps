<? 
    $args = array(
      'taxonomy'      => array( 'dresses_collection'), // название таксономии с WP 4.5
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
      $term_link = get_term_link($term->term_id, 'dresses_collection');
      $image_id = get_term_meta( $term->term_id, 'image', 1 );
      $image_url = wp_get_attachment_image_url( $image_id, 'full' );
      $image = $image_url; // Выводим url картинки из meta key Image из плагина WP TERM IMAGE;
?>
<a class="collection__link" href="<? echo $term_link; ?>">
  <div class="collection__start"></div>
  <article class="collection" style="background-image: url( <? echo $image; ?> );"> 
    <div class="collection__content">
      <h3 class="collection__title"> Коллекция "<? echo $term->name; ?>"</h3>
      <div class="collection__text">
      </div>
      <button class="button button__dress collection__button">Смотреть</button>
    </div>
  </article>
</a>
<?}?>
