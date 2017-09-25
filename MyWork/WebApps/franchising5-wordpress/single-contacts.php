<?php

 /*
 
 Template Name: News Front Page
 
 Description: Является шаблоном для страницы Новости. Работает автоматически, подключать не обязательно.
 */


get_header(); ?>
<?php
    $mypost = array( 'post_type' => 'contacts' );
    $loop = new WP_Query( $mypost );
    $contacts_email = get_post_meta($post->ID, 'contacts_email', true);
?>
	<div class="content">
    		<!-- Contact -->
    		<div id="contact" class="contacts">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<h2 class="pageTitle">Наши контакты</h2>
                        <p class="back-to-main"><a href="../">Головной офис</a></p>
	    			</div>
    			</div>
    		</div>
    		<div id="contact-biginfo" class="contacts">
    			<div class="contact-inner">
	    			<div class="c-content leftContent" style="background-image: url(<? the_post_thumbnail_url(); ?>);">
	    				<!--<div class="main-office">
	    					<div class="inner-left">
		    					<!--<p class="back-to-main"><a href="../">Головной офис</a></p>--
	    					</div>
	    				</div>-->
	    			</div>
	    			<div class="c-content rightContent">
	    				<div class="dop-office" id="dop-office">
	    				<div class="inner-inner">
	    					<div class="inner-right">
	    						<h5 class="d-o">Заказать звонок</h5>
	    						<p>из офиса "Франчайзинг5" <span>в городе</span> <i><? the_title(); ?></i></p>
	    						<form class="contactform" id="form_12" method="POST" action="<?php bloginfo('template_url'); ?>/message_process.php">
	    							<input type="hidden" name="WhereIsForm" value="Филиал в городе: <? the_title(); ?>">
	    							<input type="hidden" name="filialEmail" value="<? echo $contacts_email; ?>">
	    							<div class="formbox">
	    								<input id="name" type="text" name="name" required="" placeholder=" " onchange="checkChanges(this);" class="inp inp-name">
	    								<label for="name" class="namelabel"><span>Введите Ваше имя</span></label>
	    							</div>
	    							<div class="formbox">
	    								<input id="phone" type="tel" name="phone" required="" placeholder=" " onchange="checkChanges(this);" class="inp inp-phone">
	    								<label for="phone" class="phonelabel"><span>Введите Ваш телефон</span></label>
	    							</div>
	    							<div><button type="submit" data-form-submit="contacts_mail" name="submit" class="button">Заказать звонок</button></div>
	    						</form>
                                
                                <div class="personal_access">
                                  <input type="checkbox" data-personal="underform" name="personal" id="personal" required="" checked="">
                                  <span>Нажимая на кнопку "Заказать звонок", я даю согласие на обработку персональных данных и соглашаюсь с политикой конфиденциальности</span>
                                </div>
	    					</div>
	    				</div>
	    				</div>
	    			</div>
	    		</div>
    		</div>

    		<div id="contact-fillials" class="contacts">
    			<div class="page-wrapper">
    				<div class="inner">
	    				<h3 class="pageTitle">Филиалы Франчайзинг5</h3>
	    				<div class="underline"></div>
	    				<div class="offices">

	    				<?php
					    $loop = new WP_Query( array( 'post_type' => array('contacts'), 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => 9999 ) );
					    
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post();
					     ?>

								<?php get_template_part('loop-contacts'); ?>
					    <?php endwhile; ?>
					    <?php endif; wp_reset_postdata(); ?>
	    				</div>
	    			</div>
    			</div>
    		</div>
    		<!-- Contact -->
    	</div>
<?php get_footer(); ?> <!-- Ваш файл footer.php -->


<div id="alpha" style="position:relative;display:none">

    <div class="office_parent_items">
        <div class="office_items">
            <div class="office_item">
                <div class="office-letter"><span class="app">А</span></div>
                <div class="office-city"><span class="city_a"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Б</span></div>
                <div class="office-city"><span class="city_b"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">В</span></div>
                <div class="office-city"><span class="city_v"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Г</span></div>
                <div class="office-city"><span class="city_g"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Д</span></div>
                <div class="office-city"><span class="city_d"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Е</span></div>
                <div class="office-city"><span class="city_ye"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Ж</span></div>
                <div class="office-city"><span class="city_gh"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">З</span></div>
                <div class="office-city"><span class="city_z"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">И</span></div>
                <div class="office-city"><span class="city_i"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">Й</span></div>
                <div class="office-city"><span class="city_ue"></span></div>
            </div>
            <div class="office_item">
                <div class="office-letter"><span class="app">К</span></div>
                <div class="office-city"><span class="city_k"></span></div>
            </div>
            
    </div>
    
    <div class="office_items">
        <div class="office_item">
            <div class="office-letter"><span class="app">Л</span></div>
            <div class="office-city"><span class="city_l"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">М</span></div>
            <div class="office-city"><span class="city_m"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Н</span></div>
            <div class="office-city"><span class="city_n"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">О</span></div>
            <div class="office-city"><span class="city_o"></span></div>
        </div>
    </div>
    </div>
    
    <div class="office_parent_items">
    <div class="office_items">
        <div class="office_item">
            <div class="office-letter"><span class="app">П</span></div>
            <div class="office-city"><span class="city_p"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Р</span></div>
            <div class="office-city"><span class="city_r"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">С</span></div>
            <div class="office-city"><span class="city_s"></span></div>
        </div>
    </div>
    
    <div class="office_items without_border">
        <div class="office_item">
            <div class="office-letter"><span class="app">Т</span></div>
            <div class="office-city"><span class="city_t"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">У</span></div>
            <div class="office-city"><span class="city_y"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Ф</span></div>
            <div class="office-city"><span class="city_f"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Х</span></div>
            <div class="office-city"><span class="city_h"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Ц</span></div>
            <div class="office-city"><span class="city_ce"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Ч</span></div>
            <div class="office-city"><span class="city_ch"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Ш</span></div>
            <div class="office-city"><span class="city_sh"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Э</span></div>
            <div class="office-city"><span class="city_e"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Ю</span></div>
            <div class="office-city"><span class="city_u"></span></div>
        </div>
        <div class="office_item">
            <div class="office-letter"><span class="app">Я</span></div>
            <div class="office-city"><span class="city_ya"></span></div>
        </div>
    </div>
    </div>
</div>
<style>
.app {
display:none;
font-size:40px;
}
</style>
<script>
(function($){
    $('.offices').append( $('#alpha') );
    $('#alpha').show();
    $('.offices a').each(function(){
       var city2 = $(this).html();
        var city3 = city2.split(" ");
        var city = city3[0];
        //console.log(city.indexOf('Н'));
        if ($(this).html() == 'Казань') {
            $(this).attr('href', '../');
        }
        if ( city.indexOf('А') == 0 ) {$('.city_a').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();} //.css('display', 'block')
        if ( city.indexOf('Б') == 0 ) {$('.city_b').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('В') == 0 ) {$('.city_v').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Г') == 0 ) {$('.city_g').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Д') == 0 ) {$('.city_d').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Е') == 0 ) {$('.city_ye').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ж') == 0 ) {$('.city_gh').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('З') == 0 ) {$('.city_z').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('И') == 0 ) {$('.city_i').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Й') == 0 ) {$('.city_ue').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('К') == 0 ) {$('.city_k').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Л') == 0 ) {$('.city_l').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('М') == 0 ) {$('.city_m').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Н') == 0 ) {$('.city_n').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('О') == 0 ) {$('.city_o').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('П') == 0 ) {$('.city_p').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Р') == 0 ) {$('.city_r').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('С') == 0 ) {$('.city_s').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Т') == 0 ) {$('.city_t').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('У') == 0 ) {$('.city_y').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ф') == 0 ) {$('.city_f').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Х') == 0 ) {$('.city_h').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ц') == 0 ) {$('.city_c').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ч') == 0 ) {$('.city_ch').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ш') == 0 ) {$('.city_sh').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Э') == 0 ) {$('.city_e').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Ю') == 0 ) {$('.city_u').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
        if ( city.indexOf('Я') == 0 ) {$('.city_ya').append( $(this) ).parent().css('margin-bottom', '10px').prev('.office-letter').find('.app').show();}
    });
})($);
</script>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>