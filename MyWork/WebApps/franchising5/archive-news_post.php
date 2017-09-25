<?php
/*

Template Name: News All Page

*/
?>
<meta name="description" content="Узнайте последние новости франчайзинговой компании Франчайзинг5. Успешные отзывы партнеров, франчайзинговые мероприятия и многое другое. ">
<meta name="keywords" content="новости, франчайзинг5, отзывы партнеров, кейсы, артем захаров, франшизы, франчайзинг">
<?php get_header(); ?> <!-- Ваш файл header.php -->
<style>
.loadm {
    background: none;
    border: 0;
    margin-left: 37%;
}
.moreposts a {display:none}
#load-more {visibility:hidden}
.done {display:none!important}
</style>
<!--End Header.php-->
<div class="content">
    		<!-- Blog -->
    		<div id="Blog" class="NewsBlog">
    			<div class="page-wrapper">
    				<div class="inner">
    					<h5 class="pageTitle">Новости компании Франчайзинг5</h5>
    					<div class="items posts">
                <?php 
                //$news_count = 3; //$_POST('news_count');
                //$loop = new WP_Query( array( 'post_type' => array('news_post'), 'posts_per_page' => $news_count) );
                  //if ( $loop->have_posts() ) :
                    //while ( $loop->have_posts() ) : $loop->the_post(); ?>               
                      <?php get_template_part('ajax_load/ajax_post-news'); ?>
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
	    						<button id="load-post" class="more">Показать ещё</button>
    					</div>-->
    				</div>
    			</div>
    		</div>
    		<!-- Blog -->
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<?php get_footer(); ?> <!-- Ваш файл footer.php -->
