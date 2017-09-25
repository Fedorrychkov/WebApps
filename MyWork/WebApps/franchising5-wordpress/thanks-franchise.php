<?php

 /*
 
 Template Name: Шаблон - страница спасибо Упаковки франшиз
 
 Description: 
 */


get_header(); ?>
<head>
    <meta name="robots" content="noindex, nofollow" />
</head>
    	<div class="content">
    		<!-- Blog -->
    		<div id="thanks-franchise" class="thanks">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<div class="thanks-content">
	    					<h2 class="pageTitle">Спасибо<i></i></h2>
	    					<p>Наши менеджеры уже занимаются Вашей заявкой. Мы постараемся связаться с Вами в ближайшее время</p>
	    					<div class="underline"></div>
	    					<div class="download">
	    						<p class="underp">А пока предлагаем изучить все материалы по франшизе:</p>
	    						<div class="items">
	    							<div class="item pdf">
	    								<img src="<?php bloginfo('template_url'); ?>/assets/img/thanks/pdf.png">
	    								<div class="text"><p>Презентация франшизы</p>
	    								<a download="" href="<?php bloginfo('template_url'); ?>/download/franch_prezent.pdf">Скачать (20 мб)</a></div>
	    							</div>
	    							<!--<div class="item pdf">
	    								<img src="<?php bloginfo('template_url'); ?>/assets/img/thanks/pdf.png">
	    								<div class="text"><p>Образец договора</p>
	    								<a download="" href="#">Скачать (2 мб)</a></div>
	    							</div>-->
	    							<div class="item xsl">
	    								<img src="<?php bloginfo('template_url'); ?>/assets/img/thanks/xsl.png">
	    								<div class="text"><p>Финансовая модель</p>
	    								<a download="" href="<?php bloginfo('template_url'); ?>/download/finmodel.xlsx">Скачать (1,5 мб)</a></div>
	    							</div>
	    						</div>
	    					   <!--<p class="allarchive"><a download="" href="#">Скачать все одним архивом  (6 Mb)</a></p>-->
	    					</div>
	    					<div class="time">
	    						<p>Режим работы: Пн-Пт с 9.00 до 18.00</p>
								<p>Поэтому, если Вы оставили заявку в нерабочее время, мы перезвоним Вам на следующий рабочий день.</p>
	    					</div>
	    					
	    				</div>


	    				<div class="manager">
	    					<div class="m-inner">
		    					<img src="<?php bloginfo('template_url'); ?>/assets/img/thanks/thanks-franchise.png">
		    					<p><span>Лейла Наврузова</span> Руководитель группы продаж франшизы «Франчайзинг5» </p>
	    					</div>
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
	    					<a href="<? echo $_SERVER['HTTP_REFERER'] ?>"><button>Вернуться на сайт ></button></a>
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
		$('h2 i').text('');
		console.log($.cookie('username'));
	}else {
		$('h2 i').text(', ' + $.cookie('username') + '');
		console.log($.cookie('username'));
	}
});
</script>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>