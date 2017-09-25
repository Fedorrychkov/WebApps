<?
# Разработано Фёдором Рычковым, копипаст и говнокод, аккуратно :) 
add_theme_support('post-thumbnails');





function true_russian_date_forms($the_date = '') {
    if ( substr_count($the_date , '---') > 0 ) {
        return str_replace('---', '', $the_date);
    }
    // массив замен для русской локализации движка и для английской
    $replacements = array(
        "Январь" => "января", // "Jan" => "января"
        "Февраль" => "февраля", // "Feb" => "февраля"
        "Март" => "марта", // "Mar" => "марта"
        "Апрель" => "апреля", // "Apr" => "апреля"
        "Май" => "мая", // "May" => "мая"
        "Июнь" => "июня", // "Jun" => "июня"
        "Июль" => "июля", // "Jul" => "июля"
        "Август" => "августа", // "Aug" => "августа"
        "Сентябрь" => "сентября", // "Sep" => "сентября"
        "Октябрь" => "октября", // "Oct" => "октября"
        "Ноябрь" => "ноября", // "Nov" => "ноября"
        "Декабрь" => "декабря" // "Dec" => "декабря"
    );
    return strtr($the_date, $replacements);
}
 
// если хотите, вы можете приминить только некоторые из фильтров
add_filter('the_time', 'true_russian_date_forms');
add_filter('get_the_time', 'true_russian_date_forms');
add_filter('the_date', 'true_russian_date_forms');
add_filter('get_the_date', 'true_russian_date_forms');
add_filter('the_modified_time', 'true_russian_date_forms');
add_filter('get_the_modified_date', 'true_russian_date_forms');
add_filter('get_post_time', 'true_russian_date_forms');
add_filter('get_comment_date', 'true_russian_date_forms');

if (strpos($_SERVER['REQUEST_URI'], "eval(") || strpos($_SERVER['REQUEST_URI'], "CONCAT") || strpos($_SERVER['REQUEST_URI'], "UNION+SELECT") || strpos($_SERVER['REQUEST_URI'], "base64")) {
    @header("HTTP/1.1 400 Bad Request");
    @header("Status: 400 Bad Request");
    @header("Connection: Close");
    @exit;
}

function true_change_admin_footer () {
    $footer_text = array(
        '<a href="http://wordpress.org">WordPress</a>',
        'Разработано в <a href="http://conversionpro.agency" target="_blank">ConversionPro</a>'
    );
    return implode( ' &bull; ', $footer_text);
}
 
add_filter('admin_footer_text', 'true_change_admin_footer');

function include_template_function( $template_path ) {
    if ( get_post_type() == 'case' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-case_page.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = get_template_directory() . '/single-case_page.php';
            }
        }
    }
    return $template_path;
}

function include_template_function2( $template_path ) {
    if ( get_post_type() == 'news_post' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-news_page.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = get_template_directory() . '/single-news_page.php';
            }
        }
    }
    return $template_path;
}
function include_template_function3( $template_path ) {
    if ( get_post_type() == 'company_blog' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-company_blog.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = get_template_directory() . '/single-company_blog.php';
            }
        }
    }
    return $template_path2;
}

add_filter('excerpt_more', function($more) {
    return '...';
});

function new_excerpt_length($length) {
    return 12;
}
add_filter('excerpt_length', 'new_excerpt_length');


if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

if(function_exists('register_nav_menus')){
    register_nav_menus(
        array( // создаём любое количество областей
          'main_menu' => 'Главное меню', // 'имя' => 'описание'
          'foot_menu1' => 'Меню в футере левое',
          'foot_menu2' => 'Меню в футере правое',
          'error_menu' => 'Меню на странице ошибки'
        )
    );
}

/**
 * Дополнительные поля для страницы Кейса
 *
 * @since Franchising5
 */
require get_template_directory() . '/inc/case_poles.php';

/**
 * Дополнительные поля для страницы Новостей
 *
 * @since Franchising5
 */
require get_template_directory() . '/inc/news_poles.php';

/**
 * СМИ О НАС
 *
 * @since Franchising5
 */
require get_template_directory() . '/inc/smi_poles.php';

/**
 * Блог компании
 *
 * @since Franchising5
 */
require get_template_directory() . '/inc/company_blog_poles.php';

/**
 * Филиалы компании
 *
 * @since Franchising5
 */
require get_template_directory() . '/inc/contacts_poles.php';

function vakancii() {
     return '<div id="vakancii"></div>';
}
add_shortcode('vakancii', 'vakancii');

function true_loadmore_scripts() {
    wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
    wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
}
 
add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );


function true_load_posts(){
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';
    $q = new WP_Query($args);
    if( $q->have_posts() ):
        while($q->have_posts()): $q->the_post();
            /*
             * Со строчки 13 по 27 идет HTML шаблон поста, максимально приближенный к теме TwentyTen.
             * Для своей темы вы конечно же можете использовать другой код HTML.
             */
            if( is_new_day() ){ ?>
                <div class="underline2"></div>
                <div class="date">
                  <h4> <?php the_date(j); ?></h4>
                  <p><span><?php echo get_the_date('F'); ?></span></p>
                  <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
                </div>
                <div class="posts">
                  <?php get_template_part('loop-news_post'); ?>
                </div>
              <?} else {?>
                  <div class="underline2"></div>
                  <div class="date">
                      <h4> <? echo get_the_date(j); ?></h4>
                      <p><span><?php echo get_the_date('F'); ?></span></p>
                      <p><span class="year"><?php echo get_the_date('Y'); ?></span></p>
                    </div>
                  <div class="posts">
                      <?php get_template_part('loop-news_post'); ?>
                  </div>
              <?}?>
            <?php
        endwhile;
    endif;
    wp_reset_postdata();
    die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

?>
