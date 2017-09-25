<?php

# Add News
add_action( 'init', 'true_register_post_type_init_contacts' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_contacts() {
    $labels = array(
        'name' => _x( 'Контакты', 'Post Type General Name', 'contacts' ),
        'singular_name' => _x( 'Филиал', 'Post Type Singular Name', 'contacts' ),
        'add_new' => 'Добавить филиал',
        'add_new_item' => 'Добавить филиал', // заголовок тега <title>
        'edit_item' => 'Редактировать филиал',
        'new_item' => 'Создать филиал',
        'all_items' => 'Все филиалы',
        'view_item' => 'Просмотр филиала',
        'search_items' => 'Искать филиал',
        'not_found' =>  'Филиалов не найдено.',
        'not_found_in_trash' => 'В корзине нет филиалов.',
        'menu_name' => 'Филиалы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление филиалов',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 15, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('contacts', $args);
}

function my_taxonomies_contacts() {
    $labels = array(
        'name'              => _x( 'Категории филиалов', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория филиала', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории филиалов' ),
        'all_items'         => __( 'Все категории филиалов' ),
        'parent_item'       => __( 'Родительская категория филиала' ),
        'parent_item_colon' => __( 'Родительская категория филиала:' ),
        'edit_item'         => __( 'Изменить категорию филиала' ), 
        'update_item'       => __( 'Обновить категорию филиала' ),
        'add_new_item'      => __( 'Добавить новую категорию филиала' ),
        'new_item_name'     => __( 'Новая категория филиала' ),
        'menu_name'         => __( 'Категории филиалов' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'contacts_category', 'contacts', $args );
}
add_action( 'init', 'my_taxonomies_contacts', 0 );

// Добавляем дополнительное поле
function contacts_meta_box() {  
    add_meta_box(  
        'contacts_meta_box', // Идентификатор(id)
        'Доп. поля для Филиалов Franchising5', // Заголовок области с мета-полями(title)
        'show_contacts_metabox', // Вызов(callback)
        'contacts', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'contacts_meta_box'); // Запускаем функцию

$contacts_meta_fields = array(  
    array(  
        'label' => 'Почта филиала',  
        'desc'  => 'Это поле нужно для подзаголовка (необязательно)',  
        'id'    => 'contacts_email', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'Почта филиала',
        'value' => '@franchising5.ru'
    )
      
);

function show_contacts_metabox() {  
global $contacts_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($contacts_meta_fields as $field) {  
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
                        echo '<input type="url" name="'.$field['id'].'" id="'.$field['id'].'"  placeholder="'.$field['plcholder'].'" value="'.$meta.'" size="40" /> 
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
function save_contacts_meta_fields($post_id) {  
    global $contacts_meta_fields;  // Массив с нашими полями
 
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
    foreach ($contacts_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_contacts_meta_fields'); // Запускаем функцию сохранения


?>
