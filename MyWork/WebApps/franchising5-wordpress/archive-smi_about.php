<?php
/*

Template Name: Smi about Page

*/
?>
<meta name="description" content="Узнайте, что пишут известные новостные издания в России и СНГ о франчайзинговой компании Франчайзинг 5">
<meta name="keywords" content="франчайзинг5, артем захаров, франшизы, франчайзинг, франчайзинговый, СМИ о франчазинг5">
<? get_header(); ?>
<div class="content">
    		<!-- Blog -->
    		<div id="smi" class="newsabout">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<h2 class="pageTitle">Сми о нас</h2>
	    				<div class="page-content">
	    					<?php
						    $loop = new WP_Query( array( 'post_type' => array('smi_about'), 'posts_per_page' => 9999) );
						    
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<?php get_template_part('loop-smi_about'); ?>
						    <?php endwhile; ?>
						    <?php endif; wp_reset_postdata(); ?>
	    				</div>


	    			</div><!-- inner page -->
    			</div>
    		</div>
    		<!-- Blog -->
    	</div>
<? get_footer(); ?>
