<?php

# Add brides 
add_action( 'init', 'true_register_post_type_init_brides' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_brides() {
    $labels = array(
        'name' => _x( 'Наши невесты', 'Post Type General Name', 'brides' ),
        'singular_name' => _x( 'Невеста', 'Post Type Singular Name', 'brides' ),
        'add_new' => 'Добавить невесту',
        'add_new_item' => 'Добавить новую невесту', // заголовок тега <title>
        'edit_item' => 'Редактировать невесту',
        'new_item' => 'Новая невеста',
        'all_items' => 'Все невесты',
        'view_item' => 'Просмотр невест на сайте',
        'search_items' => 'Искать невест',
        'not_found' =>  'Статья не найдена.',
        'not_found_in_trash' => 'В корзине нет невест.',
        'menu_name' => 'Наши невесты' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление невест',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 11, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('brides', $args);
}

function my_taxonomies_brides() {
    $labels = array(
        'name'              => _x( 'Категории невест', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория невесты', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории невест' ),
        'all_items'         => __( 'Все категории невест' ),
        'parent_item'       => __( 'Родительская категория невесты' ),
        'parent_item_colon' => __( 'Родительская категория невесты:' ),
        'edit_item'         => __( 'Изменить категорию невесты' ), 
        'update_item'       => __( 'Обновить категорию невесты' ),
        'add_new_item'      => __( 'Добавить новую категорию невесты' ),
        'new_item_name'     => __( 'Новая категория невесты' ),
        'menu_name'         => __( 'Категории невест' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'show_admin_column' => true
    );
    register_taxonomy( 'brides_category', 'brides', $args );
}
add_action( 'init', 'my_taxonomies_brides', 0 );

// Добавляем дополнительное поле
function brides_meta_box() {  
    add_meta_box(  
        'brides_meta_box', // Идентификатор(id)
        'Доп. поля для статьяв', // Заголовок области с мета-полями(title)
        'show_my_brides_metabox', // Вызов(callback)
        'brides', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'brides_meta_box'); // Запускаем функцию

$brides_meta_fields = array(  
    array(  
        'label' => 'Отзыв невесты',  
        'desc'  => '',  
        'id'    => 'brides_review', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'Отзыв невесты'
    ), 
    array(  
        'label' => 'Название платья',  
        'desc'  => '',  
        'id'    => 'brides_dress', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'Например Милена'
    ),  
    array(  
        'label' => 'Ссылка на это платье',  
        'desc'  => '',  
        'id'    => 'brides_dressUsed', // даем идентификатор.
        'type'  => 'textarea',  // Указываем тип поля.
        'plcholder' => 'Например: milena'
    )
);

function show_my_brides_metabox() {  
global $brides_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($brides_meta_fields as $field) {  
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
function save_brides_meta_fields($post_id) {  
    global $brides_meta_fields;  // Массив с нашими полями
 
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
    foreach ($brides_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_brides_meta_fields'); // Запускаем функцию сохранения


?>
