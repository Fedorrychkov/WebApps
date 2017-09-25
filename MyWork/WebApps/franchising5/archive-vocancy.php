<?php
if ( have_posts() ) : // если имеются записи в блоге.
    $args = array(
           'post_type' => 'vocancy',
           'publish' => true,
           'paged' => get_query_var('paged'),
           'posts_per_page' => 9999
       );
    
    query_posts($args);
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
?>
    <?php get_template_part('loop-vocancy'); ?>



<?php
	endwhile;  // завершаем цикл.
	endif;
	/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
	wp_reset_query();                
?>
