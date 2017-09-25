<?php

# Add News
add_action( 'init', 'true_register_post_type_init_company_blog' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_company_blog() {
    $labels = array(
        'name' => _x( 'Блог', 'Post Type General Name', 'company_blog' ),
        'singular_name' => _x( 'Блог', 'Post Type Singular Name', 'company_blog' ),
        'add_new' => 'Добавить статью',
        'add_new_item' => 'Добавить статью', // заголовок тега <title>
        'edit_item' => 'Редактировать статью',
        'new_item' => 'Создать статью',
        'all_items' => 'Все статьи',
        'view_item' => 'Просмотр статей',
        'search_items' => 'Искать статьи',
        'not_found' =>  'Статей не найдено.',
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
        'menu_position' => 13, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('company_blog', $args);
}

function my_taxonomies_company_blog() {
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
    );
    register_taxonomy( 'company_blog_category', 'company_blog', $args );
}
add_action( 'init', 'my_taxonomies_company_blog', 0 );

// Добавляем дополнительное поле
function company_blog_meta_box() {  
    add_meta_box(  
        'company_blog_meta_box', // Идентификатор(id)
        'Доп. поля для Блога', // Заголовок области с мета-полями(title)
        'show_company_blog_metabox', // Вызов(callback)
        'company_blog', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'company_blog_meta_box'); // Запускаем функцию

$company_blog_meta_fields = array(  
    array(  
        'label' => 'Подзаголовок',  
        'desc'  => 'Это поле нужно для подзаголовка (необязательно)',  
        'id'    => 'company_blog_subtitle', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'Подзаголовок'
    )
      
);

function show_company_blog_metabox() {  
global $company_blog_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($company_blog_meta_fields as $field) {  
        // Получаем значение если оно есть для этого поля 
        $meta = get_post_meta($post->ID, $field['id'], true);  
        // Начинаем выводить таблицу
        echo '<tr> 
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th> 
                <td>';  
                switch($field['type']) {  
                    // Текстовое поле
                    case 'text':  
                        echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" placeholder="'.$field['plcholder'].'" value="'.$meta.'" size="40" /> 
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
function save_company_blog_meta_fields($post_id) {  
    global $company_blog_meta_fields;  // Массив с нашими полями
 
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
    foreach ($company_blog_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_company_blog_meta_fields'); // Запускаем функцию сохранения


?>
