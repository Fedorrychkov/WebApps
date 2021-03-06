<?php

# Add news 
add_action( 'init', 'true_register_post_type_init_News' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_News() {
    $labels = array(
        'name' => _x( 'Новости', 'Post Type General Name', 'news' ),
        'singular_name' => _x( 'новость', 'Post Type Singular Name', 'news' ),
        'add_new' => 'Добавить новость',
        'add_new_item' => 'Добавить новую новость', // заголовок тега <title>
        'edit_item' => 'Редактировать новость',
        'new_item' => 'Новая новость',
        'all_items' => 'Все новости',
        'view_item' => 'Просмотр новости на сайте',
        'search_items' => 'Искать новость',
        'not_found' =>  'Новость не найдена.',
        'not_found_in_trash' => 'В корзине нет новостей.',
        'menu_name' => 'Новости' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление новостей',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 11, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('news', $args);
}

function my_taxonomies_news() {
    $labels = array(
        'name'              => _x( 'Категории новостей', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория новостей', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории новостей' ),
        'all_items'         => __( 'Все категории новостей' ),
        'parent_item'       => __( 'Родительская категория новости' ),
        'parent_item_colon' => __( 'Родительская категория новости:' ),
        'edit_item'         => __( 'Изменить категорию новости' ), 
        'update_item'       => __( 'Обновить категорию новости' ),
        'add_new_item'      => __( 'Добавить новую категорию новости' ),
        'new_item_name'     => __( 'Новая категория новости' ),
        'menu_name'         => __( 'Категории новостей' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'news_category', 'news', $args );
}
add_action( 'init', 'my_taxonomies_news', 0 );

// Добавляем дополнительное поле
function news_meta_box() {  
    add_meta_box(  
        'news_meta_box', // Идентификатор(id)
        'Доп. поля для новостьв', // Заголовок области с мета-полями(title)
        'show_my_metabox', // Вызов(callback)
        'news', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'news_meta_box'); // Запускаем функцию

$news_meta_fields = array(  
    // array(  
    //     'label' => 'Размерный ряд',  
    //     'desc'  => 'Пока вписано в html статично',  
    //     'id'    => 'news_size', // даем идентификатор.
    //     'type'  => 'text',  // Указываем тип поля.
    //     'plcholder' => 'от 38 до 60 размера'
    // ),
);

function show_my_metabox() {  
global $news_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($news_meta_fields as $field) {  
        // Получаем значение если оно есть для этого поля 
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // Начинаем выводить таблицу
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                    // Текстовое поле
                    case 'text':  
                        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" placeholder="'.$field['plcholder'].'" value="'.htmlspecialchars(stripslashes($meta)).'" size="40" /> 
                            <br /><span class="description">'.$field['desc'].'</span>';  
                    break;
                    // Textarea поле
                    case 'textarea':  
                        echo '<textarea style="width: 100%;" name="'.$field['id'].'" id="'.$field['id'].'" placeholder="'.$field['plcholder'].'"  size="40" />'.htmlspecialchars(stripslashes($meta)).'</textarea> 
                            <br /><span class="description">'.$field['desc'].'</span>';  
                    break;
                    case 'url':  
                        echo '<input type="url" name="'.$field['id'].'" id="'.$field['id'].'" placeholder="'.$field['plcholder'].'" value="'.$meta.'" size="40" /> 
                            <br /><span class="description">'.$field['desc'].'</span>';  
                    break;
                    // Текстовое поле
                    case 'number':  
                        echo '<input type="number" name="'.$field['id'].'" id="'.$field['id'].'" placeholder="'.$field['plcholder'].'" value="'.$meta.'" size="40" /> 
                            <br /><span class="description">'.$field['desc'].'</span>';  
                    break;
                    // Текстовое поле
                    case 'file':  
                        echo '<input type="file" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /> 
                            <br /><span class="description">'.$field['desc'].'</span>';  
                    break;

                    
                    
                }
        echo '</td></tr>';  
    }  
    echo '</table>'; 
}




// Пишем функцию для сохранения
function save_news_meta_fields($post_id) {  
    global $news_meta_fields;  // Массив с нашими полями
 
    // проверяем наш проверочный код 
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))   
        return $post_id;  
    // Проверяем авто-сохранение 
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)  
        return $post_id;  
    // Проверяем права доступа  
    if ('page' == $_POST['post_type']) {  
        if (!current_user_can('edit_page', $post_id))  
            return $post_id;  
        } elseif (!current_user_can('edit_post', $post_id)) {  
            return $post_id;  
    }  
 
    // Если все отлично, прогоняем массив через foreach
    foreach ($news_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_news_meta_fields'); // Запускаем функцию сохранения


?>
