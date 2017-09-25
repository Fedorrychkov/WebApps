<?php
 /*
 
 Template Name: Map Page
 
 Description: Является шаблоном для страницы Карты сайта.
 */
get_header(); ?>
		<div class="content">
    		<!-- Page Map -->
    		<div class="pageMap">
    			<div class="page-wrapper">
    				<div class="inner">
    					<h5 class="pageTitle">Карта сайта</h5>
    					<div class="links">
    						<ul class="lll l1">
    							<li><a href="<?php bloginfo('url'); ?>/franchising">Упаковка франшиз</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/case">Кейсы</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/news_post">Новости</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/franshiza">Франшиза</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/work">Карьера у нас</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/contacts">Контакты</a></li>
    						</ul>
    						<ul class="lll l2">
                                <li><a href="<?php bloginfo('url'); ?>/about_company">О компании</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/company_blog">Блог</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/smi_about">СМИ о нас</a></li>
                                <li><a href="<?php bloginfo('url'); ?>/confidential">Политика конфиденциальности</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- End Page Map -->
    	</div>

<? get_footer(); ?>