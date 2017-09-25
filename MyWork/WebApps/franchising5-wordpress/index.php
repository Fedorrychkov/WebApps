<? get_header(); ?>

        <div class="content" id="mainpage"><!-- #Main Page -->
            
            <div id="top_head" class="top_head">
                <div class="page-wrapper">
                    <div class="inner">
                        <h1 class="pageTitle">Масштабирование прибыльных бизнесов по франчайзингу</h1>
                        <p class="under_p">Выведите свою компанию на мировой рынок</p>
                        <a class="button" href="<?php bloginfo('url'); ?>/franchising">Масштабировать бизнес</a>
                        <p class="franchise_system">Franchise Management System</p>
                    </div>
                </div>
            </div>
            <!-- Cases -->
            <div id="Cases" class="cases">
                <div class="page-wrapper">
                    <div class="inner">
                        <h2 class="pageTitle">Кейсы</h2>
                        <div class="case-items">

                        <?php
                        $loop = new WP_Query( array( 'post_type' => array('case'), 'posts_per_page' => 9) );
                        
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <?php get_template_part('loop-case'); ?>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                                    
                        </div>

                        <div class="moreCases">
                            <a class="button" href="<?php bloginfo('url'); ?>/case">Смотреть все кейсы</a>
                        </div>

                    </div><!-- inner page -->
                </div>
            </div>
            <!-- Cases -->

            <!-- Blog -->
            <div id="Blog" class="NewsBlog">
                <div class="page-wrapper">
                    <div class="inner">
                        <h5 id="mobile_font_size" class="pageTitle">Новости</h5>
                        
                        <?php
                        $loop = new WP_Query( array( 'post_type' => array('news_post'), 'posts_per_page' => 3) );
                        if ( $loop->have_posts() ) :
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="items">
                            <!-- Post List -->
                                    <div class="date">
                                        <h4> <? echo get_the_date(j); ?></h4>
                                        <p><span><?php echo get_the_date('F'); ?></span></p>
                                    </div>
                                    <div class="posts">
                                        <?php get_template_part('loop-news_post'); ?>
                                    </div>
                            </div>

                        
                        <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                            <div class="moreposts">
                                <a class="button" href="news_post">Смотреть все новости</a>
                            </div>
                    </div>
                </div>
            </div>

            <!-- contact -->
            <div id="contact-biginfo" class="contacts">
                <div class="contact-inner">
                    <div class="c-content leftContent" id="leftContent">
                        <div class="main-office" id="main-office">
                            <div class="inner-left">
                                <h5 class="m-o pageTitle">Контакты</h5>
                                <p class="m-o">Головной офис:</p>
                                <p class="m-o"><a class="phone" href="tel:88003331963">8 (800) 333-19-63</a></p>
                                <p class="m-o"><a class="mailto" href="mailto:kss@franch5.ru">kss@franch5.ru</a></p>
                                <p class="m-o">г. Казань, ул. Салиха Сайдашева, д. 12, 6 этаж</p>
                                <p class="m-o">График работы: Пн-Пт с 9:00 до 18:00</p>
                                <p class="m-o filials">Наши филиалы расположены в 48 городах России и СНГ</p>
                                <a class="button" href="<?php bloginfo('url'); ?>/contacts"><span class="text_tablet">Адреса филиалов</span><span class="text_untablet">Посмотреть адреса филиалов</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="c-content rightContent" id="rightContent">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div><!-- /#main -->

<? get_footer(); ?>
