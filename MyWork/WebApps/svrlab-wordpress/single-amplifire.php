<? 

/*

Amplifire Single
Для страницы усилителя

*/

    $mypost = array( 'post_type' => 'brides', );
    $loop = new WP_Query( $mypost );
    $amplifire_price = get_post_meta($post->ID, 'amplifire_price', true);
    $amplifire_options = get_post_meta($post->ID, 'amplifire_options', true);

get_header(); ?>

<div class="amplifire_page">
    <div class="amplifire_page__inner page-wrapper">
        <div class="breadcrumbs">
            <div><a href="../../" class="breadcrumbs__back">Главная</a><i class="breadcrumbs__icon material-icons breadcrumbs__item">keyboard_arrow_right</i><span class="breadcrumbs__text breadcrumbs__item"><? the_title(); ?></span></div>
        </div>
        <div class="amplifire_page__item amplifire_page__gallery">
            <img class="amplifire_page__img materialboxed z-depth-2 gallery-overlay" src="<? the_post_thumbnail_url(); ?>"/>
            <div class="amplifire_page__photos" data-productImage=""></div>
        </div>
        <div class="amplifire_page__item amplifire_page__content" data-removeImages="">
            <div class="amplifire_page__title title__block"><? the_title(); ?></div>
            <? while ( have_posts() ) : the_post(); ?>
                <? if ( the_content() != '' ): ?>

                <? the_content();?>
                <? endif ?>
            <? endwhile; ?>
            <div class="amplifire_page__cost">
                <div class="amplifire_page__cost_wrap">
                    <p><? echo $amplifire_price; ?><span class="amplifire_page__cost_span"> руб. </span></p>
                    <button class="button button__welcome amplifire_page__button" data-from="<? the_title(); ?>" data-popup="BUTTON_ORDER">Связаться с мастером</button>
                </div>
            </div>
        </div>

        <div class="order_block">
            <h4 class="order_block__title">К прочтению</h4>
            <div class="order_block__content">
            <h5 class="about__title">Немного о себе</h5> 
                <p class="about__p">Музыкой занимаюсь с детства. Образование профессиональное - музыкальное. 
                    (Музыкант, композитор, аранжировщик, звукорежиссер, дирижер народного оркестра).</p>
                <ul class="about__list">
                    <li class="about__list_item">
                        - Музыкальная грамотность, умение играть на инструменте, работа в оркестре и работа звукорежиссером, всегда помогает мне в изготовлении ламповой техники, где важно правильно выставить тональный баланс, передать натуральность звучания инструментов, их разделение и т.д. 
                    </li>
                    <li class="about__list_item">
                        - Стаж в изготовлении ламповой техники более 40 лет. (Это - корректоры, преампы, усилители, моноблоки).
                        (На фотографиях некоторые образцы из моих разработок заказчикам).
                    </li>
                    <li class="about__list_item">
                        - Хотите понять разницу между специалистом в области музыки и просто теми, кто купил паяльник - наберите в ютюбе текст: Как убрать вокал из песни. 
                    </li>
                </ul>
                
                
                <p class="about__slogan">Если нужен хороший звук, тогда пишите и заказывайте мои ламповые конструкции.</p>

                <p class="about__author">© Сергей Валентинович Рычков</p>
            </div>
        </div>

    </div>
</div>




<? get_footer(); ?>
