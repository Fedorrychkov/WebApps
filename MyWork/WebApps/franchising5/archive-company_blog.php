<?php
/*

Template Name: Company Blog All Page

*/
?>
<meta name="description" content="Блог франчайзинговой компании Франчайзинг 5 – мнение экспертов о франчайзинге и бизнесе.">
<meta name="keywords" content="блог франчайзинг5, о франчайзинге, статьи о франшизе, прибыльный бизнес, продажа франшиз, разработка, франчайзинг, франчайзинговое предложение, артем захаров">
<?php get_header(); ?> <!-- Ваш файл header.php -->
<!--End Header.php-->
<div class="content">
    		<!-- Blog -->
    		<div id="Blog" class="NewsBlog">
    			<div class="page-wrapper">
    				<div class="inner">
    					<h5 class="pageTitle">Блог</h5>
    					<div class="items">
			
               <?php 
                //$news_count = 3; //$_POST('news_count');
                //$loop = new WP_Query( array( 'post_type' => array('news_post'), 'posts_per_page' => $news_count) );
                  //if ( $loop->have_posts() ) :
                    //while ( $loop->have_posts() ) : $loop->the_post(); ?>               
                      <?php get_template_part('ajax_load/ajax_company-blog'); ?>
                <?php //endwhile; ?>
                <?php //endif; wp_reset_postdata(); ?>

                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                <script>
                  var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                  var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 2; ?>;
                  var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                </script>
                <button id="true_loadmore" class="more">Показать ещё</button>
                <?php endif; ?>


				    				</div>
							<!--<div class="moreposts">
	    						<div class="underline"></div>
	    						<a href="#" class="more">Показать ещё</a>
    						</div>-->
    				</div>
    			</div>
    		</div>
    		<!-- Blog -->
</div>


<?php get_footer(); ?> <!-- Ваш файл footer.php -->
