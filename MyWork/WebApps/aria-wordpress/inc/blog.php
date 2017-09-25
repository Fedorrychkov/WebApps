<?php

# Add blog 
add_action( 'init', 'true_register_post_type_init_Blog' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_Blog() {
    $labels = array(
        'name' => _x( 'Статьи', 'Post Type General Name', 'blog' ),
        'singular_name' => _x( 'Статья', 'Post Type Singular Name', 'blog' ),
        'add_new' => 'Добавить статью',
        'add_new_item' => 'Добавить новую статью', // заголовок тега <title>
        'edit_item' => 'Редактировать статью',
        'new_item' => 'Новая статья',
        'all_items' => 'Все статьи',
        'view_item' => 'Просмотр статей на сайте',
        'search_items' => 'Искать статьи',
        'not_found' =>  'Статья не найдена.',
        'not_found_in_trash' => 'В корзине нет статей.',
        'menu_name' => 'Блог' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление статей',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 11, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('blog', $args);
}

function my_taxonomies_blog() {
    $labels = array(
        'name'              => _x( 'Категории статей', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория статьи', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории статей' ),
        'all_items'         => __( 'Все категории статей' ),
        'parent_item'       => __( 'Родительская категория статьи' ),
        'parent_item_colon' => __( 'Родительская категория статьи:' ),
        'edit_item'         => __( 'Изменить категорию статьи' ), 
        'update_item'       => __( 'Обновить категорию статьи' ),
        'add_new_item'      => __( 'Добавить новую категорию статьи' ),
        'new_item_name'     => __( 'Новая категория статьи' ),
        'menu_name'         => __( 'Категории статей' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'blog_category', 'blog', $args );
}
add_action( 'init', 'my_taxonomies_blog', 0 );

// Добавляем дополнительное поле
function blog_meta_box() {  
    add_meta_box(  
        'blog_meta_box', // Идентификатор(id)
        'Доп. поля для статьяв', // Заголовок области с мета-полями(title)
        'show_my_blog_metabox', // Вызов(callback)
        'blog', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'blog_meta_box'); // Запускаем функцию

$blog_meta_fields = array(  
    // array(  
    //     'label' => 'Размерный ряд',  
    //     'desc'  => 'Пока вписано в html статично',  
    //     'id'    => 'blog_size', // даем идентификатор.
    //     'type'  => 'text',  // Указываем тип поля.
    //     'plcholder' => 'от 38 до 60 размера'
    // ),
);

function show_my_blog_metabox() {  
global $blog_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($blog_meta_fields as $field) {  
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
function save_blog_meta_fields($post_id) {  
    global $blog_meta_fields;  // Массив с нашими полями
 
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
    foreach ($blog_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_blog_meta_fields'); // Запускаем функцию сохранения


?>
