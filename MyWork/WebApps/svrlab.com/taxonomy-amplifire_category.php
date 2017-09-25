<?
get_header(); ?>
<?
$mypost = array( 'post_type' => 'amplifire', );
$loop = new WP_Query( $mypost );
$amplifire_price = get_post_meta($post->ID, 'amplifire_price', true);


$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<div class="welcome" style="/*background-image: url(<? bloginfo('template_url'); ?>/assets/img/amplifire.jpg);*/">
  <div class="welcome__inner page-wrapper">
      <? get_template_part('templates/welcome') ?>
  </div>
</div>


 <div class="amplifires">
  <div class="amplifires__inner page-wrapper">
    <h2 class="amplifires__title title__block"><? echo $term->name; ?></h2>
    <div class="amplifires__items">
        <?
        $query = new WP_Query( array(
            'post_type' => 'amplifire',
            'amplifire_category' => $term->slug
        ) );
        if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                
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
                        <div class="amplifire__price"><? echo $amplifire_price = get_post_meta($post->ID, 'amplifire_price', true); ?><span> руб.</span></div>
                        <a href="<? the_permalink()?>" class="button button__welcome amplifire__button">Подробнее</a>
                    </div>
                </article>
                
            <?php endwhile;
            wp_reset_postdata(); 
        }else{?>
            <h3 class="amplifires__not_found">
                Процесс изготовления новой аппаратуры не останавливается и готовая продукция скоро будет выставлена на продажу
            </h3>
        <?}?>
    </div>
  </div>
</div> 



<? get_footer(); ?>
