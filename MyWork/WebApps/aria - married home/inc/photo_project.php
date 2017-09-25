<?php

# Add photo_project 
add_action( 'init', 'true_register_post_type_init_photo_project' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_photo_project() {
    $labels = array(
        'name' => _x( 'Наши фотопроекты', 'Post Type General Name', 'photo_project' ),
        'singular_name' => _x( 'фотопроект', 'Post Type Singular Name', 'photo_project' ),
        'add_new' => 'Добавить фотопроект',
        'add_new_item' => 'Добавить новую фотопроект', // заголовок тега <title>
        'edit_item' => 'Редактировать фотопроект',
        'new_item' => 'Новая фотопроект',
        'all_items' => 'Все фотопроекты',
        'view_item' => 'Просмотр фотопроектов на сайте',
        'search_items' => 'Искать фотопроектов',
        'not_found' =>  'Статья не найдена.',
        'not_found_in_trash' => 'В корзине нет фотопроектов.',
        'menu_name' => 'Наши фотопроекты' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление фотопроектов',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 11, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('photo_project', $args);
}

function my_taxonomies_photo_project() {
    $labels = array(
        'name'              => _x( 'Категории фотопроектов', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория фотопроекта', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории фотопроектов' ),
        'all_items'         => __( 'Все категории фотопроектов' ),
        'parent_item'       => __( 'Родительская категория фотопроекта' ),
        'parent_item_colon' => __( 'Родительская категория фотопроекта:' ),
        'edit_item'         => __( 'Изменить категорию фотопроекта' ), 
        'update_item'       => __( 'Обновить категорию фотопроекта' ),
        'add_new_item'      => __( 'Добавить новую категорию фотопроекта' ),
        'new_item_name'     => __( 'Новая категория фотопроекта' ),
        'menu_name'         => __( 'Категории фотопроектов' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'photo_project_category', 'photo_project', $args );
}
add_action( 'init', 'my_taxonomies_photo_project', 0 );

// Добавляем дополнительное поле
function photo_project_meta_box() {  
    add_meta_box(  
        'photo_project_meta_box', // Идентификатор(id)
        'Доп. поля для фотопроектов', // Заголовок области с мета-полями(title)
        'show_my_photo_project_metabox', // Вызов(callback)
        'photo_project', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'photo_project_meta_box'); // Запускаем функцию

$photo_project_meta_fields = array(  
    array(  
        'label' => 'Описание фотопроекта',  
        'desc'  => '',  
        'id'    => 'photo_project_description', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'описание'
    ),
    array(  
        'label' => 'Фотограф',  
        'desc'  => '',  
        'id'    => 'photo_project_photograph', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'описание'
    ),
    array(  
        'label' => 'Используемые платья',  
        'desc'  => '',  
        'id'    => 'photo_project_dress', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'описание'
    )
);

function show_my_photo_project_metabox() {  
global $photo_project_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($photo_project_meta_fields as $field) {  
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
function save_photo_project_meta_fields($post_id) {  
    global $photo_project_meta_fields;  // Массив с нашими полями
 
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
    foreach ($photo_project_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_photo_project_meta_fields'); // Запускаем функцию сохранения


?>
