<?
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
<div class="case-item">
	
		<div class="item-inner">
		
			<a href="<? the_permalink();?>"><div class="image" style="background-image: url(<? get_template_directory(); ?><? the_post_thumbnail_url();?>);">
				<button class="button">Посмотреть историю</button>
			</div></a>

		<a href="<? the_permalink();?>"><h3><? the_title(); ?></h3></a>
		<p>- <? echo $case_subtitle ?></p>
		<p><i class="franchise_sale_change">Продано</i> <span class="franchise_check"><? echo $case_franchising_sale; ?></span> <i class="franchise_change">франшиз</i></p>
		<p>Прибыль <span><? echo $case_franchising_money_big; ?> <em class="Ruble">a</em></span></p>
		</div>
	
</div>