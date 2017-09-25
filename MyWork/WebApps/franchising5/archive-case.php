<head>
	<meta name="description" content="Они уже открыли франчайзинговые сети и вывели свой бизнес на новый уровень.">
	<meta name="keywords" content="отзывы, франчайзинг5, кейсы, турлидер, мясо тут, гудэксперт, единый визовый центр, хлеб для жизни, ралина николаева, рефакт, refakt, стоуни, арт прайм, артпрайм">
</head>
<? 
 get_header(); ?>
<div class="content">   
<!-- Cases -->
    		<div id="Cases" class="cases">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<h2 class="pageTitle">Они уже вывели свой бизнес на новый уровень</h2>
	    				<div class="case-items">

						<?php
					    $loop = new WP_Query( array( 'post_type' => array('case'), 'posts_per_page' => 9999) );
					    
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php get_template_part('loop-case'); ?>
					    <?php endwhile; ?>
					    <?php endif; wp_reset_postdata(); ?>

						

						<div class="underline"></div>
	    				</div>

	    				
	    				<div class="moreCases">
    						<!--<a href="#povtorbutton" class="more">Показать ещё</a>-->
    						<a class="button" id="povtorbutton" href="<?php bloginfo('url'); ?>/franchising">Повторить успех</a>
    					</div>

	    			</div><!-- inner page -->
    			</div>
    		</div>
    		<!-- Cases -->
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	
</script>

<? get_footer(); ?>
