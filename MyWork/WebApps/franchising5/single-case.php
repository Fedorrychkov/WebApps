<?php
 /*
 
 Template Name: Case Front Page
 
 Description: Является шаблоном для страницы Кейса. Работает автоматически, подключать не обязательно.
 */


get_header(); ?>
<?php
    $mypost = array( 'post_type' => 'case', );
    $loop = new WP_Query( $mypost );
    $case_subtitle = get_post_meta($post->ID, 'case_subtitle', true);
	$case_slogan = get_post_meta($post->ID, 'case_slogan', true);
	$case_youtube_url = get_post_meta($post->ID, 'case_youtube_url', true);
	$case_franchising_manager = get_post_meta($post->ID, 'case_franchising_manager', true);
    $case_subtext_manager = get_post_meta($post->ID, 'case_subtext_manager', true);
    $case_franchising_sale = get_post_meta($post->ID, 'case_franchising_sale', true);
    $case_franchising_investion = get_post_meta($post->ID, 'case_franchising_investion', true);
    $case_franchising_money = get_post_meta($post->ID, 'case_franchising_money', true);
    $case_franchising_money_big = get_post_meta($post->ID, 'case_franchising_money_big', true);
    $case_franchising_pashualnih = get_post_meta($post->ID, 'case_franchising_pashualnih', true);
    $case_franchising_royalte = get_post_meta($post->ID, 'case_franchising_royalte', true);
    $case_review_manager = get_post_meta($post->ID, 'case_review_manager', true);
    $case_logo = get_post_meta($post->ID, 'case_logo', true);
    $case_manager_photo = get_post_meta($post->ID, 'case_manager_photo', true);
?>

<div class="content">
    		<!-- Case -->
    		<div id="Case" class="case">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<div class="bredcrumbs">
	    					<a href="../">Кейсы</a><em>></em><span><? the_title();?></span>
	    					<div class="underline"></div>
	    				</div>
						<div class="case-content">

	    					<div class="top-case">
	    						<div class="back-page">
	    							<a href="<? if(empty($_SERVER['HTTP_REFERER'])){echo '../';}else{ echo $_SERVER['HTTP_REFERER'];} ?>" class="button">Вернуться</a>
	    						</div>
	    						<div class="logo-case">
	    							<div class="image">
	    								<div class="logotipe"><img src="<?php bloginfo('url'); ?>/<? echo $case_logo ;?>"></div>
	    								<p><? echo $case_subtitle;?></p>
	    							</div>
	    						</div>
	    					</div>

	    					<div id="Review" class="middle-case">
	    						<h2 class="slogan pageTitle"><? echo $case_slogan; ?></h2>

	    						<div class="presentation">
	    							<div class="CEO">
	    								<img src="<?php bloginfo('url'); ?>/<? echo $case_manager_photo ;?>">
	    								<div class="whothis">
	    									<h3 class="CEO-name"><? echo $case_franchising_manager ?></h3>
	    									<p class="company"><!--Руководитель компании <span>ООО Турлидер</span>--> <?echo $case_subtext_manager;?></p>
	    									<?if ($case_review_manager != '') { ?>	
	    										<p class="original-review"><a href="#Review" data-imagesource="<?php bloginfo('url'); ?>/<? echo $case_review_manager ;?>">Оригинальный отзыв</a></p>
	    									<?} else {?>
	    									<?}?>
	    									
	    								</div>
	    							</div>
	    							<?if ($case_youtube_url != '') { ?>	
		    							<div class="company-video">
		    								<iframe src="https://www.youtube.com/embed/<? echo $case_youtube_url ?>?rel=0?ecver=1" frameborder="0" allowfullscreen></iframe>
		    							</div>
	    							<?} else {?>

	    							<?}?>
	    						</div>
	    						<div class="main-text">
	    							<p>
		    							<?php while ( have_posts() ) : the_post(); ?>
			                                <?php the_content();?>
			                            <?php endwhile; ?>
		                            </p>
	    						</div>
	    					</div>
	    					<div class="bottom-case">
	    						<div class="info-case">
	    							<div id="how-sale" class="info-info">
	    								<span class="number franchise_check"><? echo $case_franchising_sale;?></span>
	    								<span class="text-info"><i class="franchise_change_more">франшиз продано</i></span>
	    							</div>
	    							<div id="investments" class="info-info">
	    								<span class="number" id="investments_money_case_check"><? echo $case_franchising_investion;?></span>
	    								<span class="text-info"><i id="investments_money_case">тысяч</i> рублей инвестиции в создание франшизы</span>
	    							</div>
	    							<div id="profit" class="info-info">
	    								<span class="number" id="profit_money_case_check"><? echo $case_franchising_money_big; //$case_franchising_money;?></span>
	    								<span class="text-info"><i  id="profit_money_case">млн</i> рублей — прибыль</span>
	    							</div>
	    						</div>

	    						<div class="graphicsum">
		    						<div class="graph">
		    							<div class="linesegment pink">
		    								<div class="lineblue"></div>
		    							</div>
		    						</div>
		    						<div class="data">
		    							<div class="vznosy">
		    								<p class="textinfo text1">Заработано на паушальных взносах</p>
		    								<p><span id="vznosy" class="money"><? echo $case_franchising_pashualnih;?></span><i> <em class="Ruble">a</em></i></p>
		    							</div>
		    							<?
		    								if ($case_franchising_royalte == '') {
		    									$case_franchising_royalte = 0;?>
		    									<div class="royalty">
				    								<p class="textinfo text2">Заработано на роялти</p>
				    								<p><span id="royall" class="money"><? echo $case_franchising_royalte;?></span></p>
				    							</div>

		    								<?}else{?>
				    							<div class="royalty">
				    								<p class="textinfo text2">Заработано на роялти</p>
				    								<p><span id="royall" class="money"><? echo $case_franchising_royalte;?></span><i> <em class="Ruble">a</em></i></p>
				    							</div>
		    								<?}?>
		    						</div>
	    						</div>


	    						<div class="repeat">
	    							<a href="<?php bloginfo('url'); ?>/franchising" class="button">Повторить успех</a>
	    						</div>
	    					</div>

	    				</div>

<?php wp_reset_query(); ?>

					</div><!-- inner page -->
    			</div>
    		</div>
			<!-- Case -->
</div>
<?php get_footer(); ?>
