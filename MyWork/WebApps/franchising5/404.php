<? get_header(); ?>
		<!--End Header.php-->
    	<div class="content">
    		<!-- 404 Error -->
    		<div class="not-found">
    			<div class="page-wrapper">
    				<div class="inner">
    					<h5 id="error">404</h5>
    					<p class="warning">Такой страницы нет</p>
    					<div class="underError">
    						<p>Зато есть много других интересных страниц</p>
    						<!--<ul>
    							<li><a href="<?php bloginfo('url'); ?>/franchise_develop">Упаковка франшиз</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/case">Кейсы</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/news_post">Новости</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/franchise">Франшиза</a></li>
    							<li><a href="<?php bloginfo('url'); ?>/career">Карьера у нас</a></li>-->
                                <?php wp_nav_menu("error_menu"); ?>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    		<!-- End 404 Error -->
    	</div>
<? get_footer(); ?>
