<?
get_header(); ?>
<?
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<main class="main content" data-slidecontent="">
  <div class="collections animations__fadebottom">
    <div class="collections__inner page-wrapper content__inner">
      <h2 class="content__title collections__title">Коллекция <? echo $term->name; ?></h2>
      <div class="collections__items flex_co__between_fstart">
        <?
            $query = new WP_Query( array(
                'post_type' => 'dresses',
                'dresses_collection' => $term->slug
            ) );
            if ( $query->have_posts() ) { ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php get_template_part('loop/dresses'); ?>
                <?php endwhile;
                wp_reset_postdata(); 
            }?>

      </div>
    </div>
  </div>
</main>


<? get_footer(); ?>
