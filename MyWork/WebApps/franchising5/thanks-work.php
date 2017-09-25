<?php

 /*
 
 Template Name: Шаблон - Спасибо, страница Карьера у нас
 
 Description: 
 */


get_header(); ?>
<head>
    <meta name="robots" content="noindex, nofollow" />
</head>
    	<div class="content">
    		<!-- Blog -->
    		<div id="thanks-work" class="thanks">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<div class="thanks-content">
	    					<h2 class="pageTitle"><i>Наши</i> менеджеры уже занимаются Вашей заявкой</h2>
	    					<p>Мы постараемся связаться с Вами в ближайшее время</p>
	    					
	    					<div class="time">
	    						<p>Режим работы: Пн-Пт с 9.00 до 18.00</p>
								<p>Поэтому, если Вы оставили заявку в нерабочее время, мы перезвоним Вам на следующий рабочий день.</p>
	    					</div>
	    					
	    					<!--<div class="underline"></div>-->
	    				</div>

	    				<div class="underline2"></div>
	    				<div class="subscribe">
	    					<p>Подписывайтесь на нас в социальных сетях:</p>
	    					<ul>
	    						<li><a target="_blank" href="https://vk.com/franch5?from=quick_search" class="vk"></a></li>
		    					<li><a target="_blank" href="https://twitter.com/franch5_ru" class="twitter"></a></li>
		    					<li><a target="_blank" href="https://t.me/franch5" class="telegram"></a></li>
		    					<li><a target="_blank" href="https://www.instagram.com/franch5_ru/" class="instagram"></a></li>
		    					<li><a target="_blank" href="https://ru-ru.facebook.com/franch5.ru/" class="fb"></a></li>
		    					<li><a target="_blank" href="https://www.youtube.com/channel/UCfxhcVNxbjUmzzVhf_KhuJg" class="youtube"></a></li>
	    					</ul>
	    					<a href="<? echo $_SERVER['HTTP_REFERER']; ?>"><button>Вернуться на сайт ></button></a>
	    				</div>
	    			</div><!-- inner page -->
    			</div>
    		</div>
    		<!-- Blog -->
    	</div>


<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src='<?php bloginfo('template_url'); ?>/assets/js/jquery.cookie.js'></script>
<script type="text/javascript">
$(document).ready(function() {
	if($.cookie('username') == 'undefined' || $.cookie('username') == 'null') {
		$('h2 i').text('Наши');
		console.log($.cookie('username'));
	}else {
		$('h2 i').text($.cookie('username') + ', наши');
		console.log($.cookie('username'));
	}
	
});
</script>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>