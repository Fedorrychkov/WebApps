<?php

 /*
 
 Template Name: Шаблон - Страница Спасибо
 
 Description: 
 */


get_header(); ?>
<head>
    <meta name="robots" content="noindex, nofollow" />
</head>
    	<div class="content">
    		<!-- Blog -->
    		<div id="thanks-mail" class="thanks">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<div class="thanks-content">
	    					<h2 class="pageTitle"><i>Спасибо</i> за подписку на e-mail рассылку</h2>
	    					<p>Откройте Вашу почту и перейдите по указанной ссылке, чтобы подтвердить подписку</p>
	    					<div class="underline"></div>
	    					<div class="emails">
	    						<ul>
		    						<li><a target="_blank" href="https://e.mail.ru/login" class="mail"></a></li>
			    					<li><a target="_blank" href="https://mail.google.com/mail/u/0/" class="gmail"></a></li>
			    					<li><a target="_blank" href="https://mail.yandex.ru/" class="yandex"></a></li>
			    					<li><a target="_blank" href="https://mail.rambler.ru/" class="rambler"></a></li>
		    					</ul>
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
		$('h2 i').text('Спасибо');
		console.log($.cookie('username'));
	}else {
		$('h2 i').text($.cookie('username') + ', спасибо');
		console.log($.cookie('username'));
	}
});
</script>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>