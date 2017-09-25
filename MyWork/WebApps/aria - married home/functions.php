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
        'Разработано в <a href="https://fedorrychkov.com/" target="_blank">студии Фёдора Рычкова</a>'
    );
    return implode( ' &bull; ', $footer_text);
}
 
add_filter('admin_footer_text', 'true_change_admin_footer');

add_filter('excerpt_more', function($more) {
    return '...';
});

function new_excerpt_length($length) {
    return 12;
}

add_filter('excerpt_length', 'new_excerpt_length');


function replace_content($content)
{
$content = str_replace('&nbsp;', ' ', $content);
return $content;
}
add_filter('the_content','replace_content');
add_filter('the_excerpt', 'replace_content');
/**
 * Дополнительные поля для страницы Платьев
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/dresses.php';

/**
 * Дополнительные поля для страницы Новостей
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/news.php';

/**
 * Дополнительные поля для страницы Блога
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/blog.php';

/**
 * Дополнительные поля для страницы Наши невесты
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/brides.php';

/**
 * Дополнительные поля для страницы ФОтопроекты
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/photo_project.php';

/**
 * Шорткоды
 *
 * @since AriaStudio
 */
require get_template_directory() . '/inc/shortcodes.php';
