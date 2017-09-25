<? 
    $args = array(
      'taxonomy'      => array( 'amplifire_category'), // название таксономии с WP 4.5
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

    $mypost = array( 'post_type' => 'amplifire', );
    $loop = new WP_Query( $mypost );
    $amplifire_price = get_post_meta($post->ID, 'amplifire_price', true);
     
    foreach( $myterms as $term ){
      //print_r($term);
    $term_link = get_term_link($term->term_id, 'amplifire_category');

?>
<article class="amplifire">
    <div class="amplifire__image">
        <a href="<? the_permalink(); ?>" class="amplifire__link_wrap">
            <div class="amplifire__image_img" style="background-image: url('<? the_post_thumbnail_url();?>')">
                <span class="amplifire__meta"><? echo $term->name; ?></span>
            </div>
        </a>
    </div>
    <div class="amplifire__content">
        <a href="<? the_permalink(); ?>" class=""><h3 class="amplifire__title"><? the_title();?></h3></a>
        <div class="amplifire__text">
            <? the_excerpt(); ?>
        </div>
        <div class="amplifire__price"><? echo $amplifire_price; ?><span> руб.</span></div>
        <a href="<? the_permalink()?>" class="button button__welcome amplifire__button">Подробнее</a>
    </div>
</article>

<?}?>