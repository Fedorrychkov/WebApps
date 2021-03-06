<?php

 /*
 
 Template Name: Company Blog Front Page
 
 Description: Является шаблоном для страницы Новости. Работает автоматически, подключать не обязательно.
 */


get_header(); ?>
<?php
    $mypost = array( 'post_type' => 'company_blog', );
    $loop = new WP_Query( $mypost );
    $company_blog_subtitle = get_post_meta($post->ID, 'company_blog_subtitle', true);
?>
<div class="content">

<!-- Blog -->
    		<div id="Post" class="NewsBlog">
    			<div class="page-wrapper">
    				<div class="inner-page">
	    				<div class="bredcrumbs">
	    					<a href="../">Блог</a><em>></em><span><? the_title();?>. 
	    					<?php while ( have_posts() ) : the_post(); ?>
		                        <? echo $company_blog_subtitle;?>
		                    <?php endwhile; ?></span>
	    					
	    					<div class="underline"></div>
	    				</div>
	    				<div class="post-content">
	    					<div class="headerH">
	    						<h1 class="pageTitle"><? the_title();?></h1>
	    						<h2><? echo $company_blog_subtitle;?></h2>
	    					</div>
	    					<div class="post-inner">
	    						<p class="datedate"><? echo get_the_date(j); ?> <?php echo get_the_date('F'); ?> <?php echo get_the_date('Y'); ?></p>
	    						<div class="post-picture" style="background-image: url(<? the_post_thumbnail_url();?>)">
	    							<!--<img src="<? get_template_directory();?><? the_post_thumbnail_url();?>">-->
	    						</div>
	    						<div class="post-text">
	    							<p>
	    								<?php while ( have_posts() ) : the_post(); ?>
                        	<?php the_content();?>
                    	<?php endwhile; ?>
                    	
                    </p>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="underline"></div>
						<div class="inner">
		    				<!-- Post List -->
		    				<h6 class="pageTitle">Последние статьи</h6>
		    				<div class="items">
			<?php
			$loop = new WP_Query( array( 'post_type' => array('company_blog'), 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() )  ) );
		    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		    	<?php 
				if( is_new_day() ){ ?>
					<div class="underline2"></div>
		    		<div class="date">
		    			<h4> <?php the_date(j); ?></h4>
		    			<p><span><?php echo get_the_date('F'); ?></span></p>
                        <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
		    		</div>
		    		<div class="posts">
		    			<?php get_template_part('loop-company_blog'); ?>
		    		</div>
				<?} else {?>
					<div class="underline2"></div>
					<div class="date">
			    		<h4> <? echo get_the_date(j); ?></h4>
			    		<p><span><?php echo get_the_date('F'); ?></span></p>
                        <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
		    		</div>
					<div class="posts">
		    			<?php get_template_part('loop-company_blog'); ?>
		    		</div>
				<?}?>
				<?php endwhile; ?>
		    	<?php endif; wp_reset_postdata(); ?>
							</div>
	    				</div>
<?php wp_reset_query(); ?>
	    			</div><!-- inner page -->
    			</div>
    		</div>
    		<!-- Blog -->
</div>
<?php get_footer(); ?>