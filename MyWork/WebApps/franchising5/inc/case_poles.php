<?php

# Add Case 
add_action( 'init', 'true_register_post_type_init_Case' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_Case() {
    $labels = array(
        'name' => _x( 'Кейсы наших клиентов', 'Post Type General Name', 'case' ),
        'singular_name' => _x( 'Кейс', 'Post Type Singular Name', 'case' ),
        'add_new' => 'Добавить кейс',
        'add_new_item' => 'Добавить новый кейс', // заголовок тега <title>
        'edit_item' => 'Редактировать кейс',
        'new_item' => 'Новый кейс',
        'all_items' => 'Все кейсы',
        'view_item' => 'Просмотр кейсы на сайте',
        'search_items' => 'Искать кейсы',
        'not_found' =>  'Кейсов не найдено.',
        'not_found_in_trash' => 'В корзине нет кейсов.',
        'menu_name' => 'Кейсы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление записей кейсов',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 11, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('case', $args);
}

function my_taxonomies_case() {
    $labels = array(
        'name'              => _x( 'Категории кейсов', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория кейса', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск категории кейсов' ),
        'all_items'         => __( 'Все категории кейсов' ),
        'parent_item'       => __( 'Родительская категория кейса' ),
        'parent_item_colon' => __( 'Родительская категория кейса:' ),
        'edit_item'         => __( 'Изменить категорию кейса' ), 
        'update_item'       => __( 'Обновить категорию кейса' ),
        'add_new_item'      => __( 'Добавить новую категорию кейса' ),
        'new_item_name'     => __( 'Новая категория кейса' ),
        'menu_name'         => __( 'Категории кейсов' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy( 'case_category', 'case', $args );
}
add_action( 'init', 'my_taxonomies_case', 0 );

// Добавляем дополнительное поле
function case_meta_box() {  
    add_meta_box(  
        'case_meta_box', // Идентификатор(id)
        'Доп. поля для Кейсов', // Заголовок области с мета-полями(title)
        'show_my_metabox', // Вызов(callback)
        'case', // Где будет отображаться наше поле, в нашем случае в Записях
        'normal', 
        'high');
}  
add_action('add_meta_boxes', 'case_meta_box'); // Запускаем функцию

$case_meta_fields = array(  
    array(  
        'label' => 'Подзаголовок - Что за бизнес',  
        'desc'  => 'Это поле нужно для описания Назначения бизнеса',  
        'id'    => 'case_subtitle', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'сеть туристических агентств'
    ),   
    array(  
        'label' => 'Подзаголовок-слоган',  
        'desc'  => 'Это поле нужно для слогана-подзоголовка кейса',  
        'id'    => 'case_slogan', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'Мы стремимся ...'
    ),   
    array(  
        'label' => 'YouTube видео, ссылка',  
        'desc'  => 'Это поле нужно для отзыва или видео компании, То, что после watch?v= code',  
        'id'    => 'case_youtube_url', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'watch?v= '
    ),  
    array(  
        'label' => 'Руководитель бизнеса - Имя',  
        'desc'  => 'Это поле нужно для  Имени директора бизнеса/лица',  
        'id'    => 'case_franchising_manager', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'Виталий Косенко'
    ),   
    array(  
        'label' => 'Фото руководителя',  
        'desc'  => 'Загрузите изображение при помощи кнопки "добавить медиафайл" и вставьте ссылку в поле, начиная с wp-content -> ', 
        'id'    => 'case_manager_photo', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля. 
        'plcholder' => 'wp-content/...'
    ),  
    array(  
        'label' => 'Должность, Должность и название организации',  
        'desc'  => 'Это поле нужно для описания должности лица',  
        'id'    => 'case_subtext_manager', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'Руководитель компании ООО Турлидер'
    ),   
    array(  
        'label' => 'Сколько франшиз продано',  
        'desc'  => 'Количество в шт.',  
        'id'    => 'case_franchising_sale', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '200'
    ),  
    array(  
        'label' => 'Инвестирований во франшизу',  
        'desc'  => '.',  
        'id'    => 'case_franchising_investion', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '650 000'
    ),  
    /*array(  
        'label' => 'Общая прибыль с франщизы, млн.руб',  
        'desc'  => 'млн. руб',  
        'id'    => 'case_franchising_money', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '19,5'
    ), */ 
    array(  
        'label' => 'Общая прибыль с франщизы, полностью',  
        'desc'  => 'Прибыль, с пробелами в тысячных',  
        'id'    => 'case_franchising_money_big', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '19 500 000'
    ),   
    array(  
        'label' => 'Заработано на паушальных взносах, полностью',  
        'desc'  => 'Заработано на паушальных взносах, тысячные разделяем пробелами',  
        'id'    => 'case_franchising_pashualnih', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '13 700 000'
    ),   
    array(  
        'label' => 'Заработано на роялти',  
        'desc'  => 'Заработано на роялти тысячные разделяем пробелами',  
        'id'    => 'case_franchising_royalte', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => '5 800 000'
    ),  
    array(  
        'label' => 'Оригинальный отзыв - картинка',  
        'desc'  => 'Загрузите изображение при помощи кнопки "добавить медиафайл" и вставьте ссылку в поле, начиная с wp-content -> ',  
        'id'    => 'case_review_manager', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля.
        'plcholder' => 'domain.ru/..'
    ),  
    array(  
        'label' => 'Логотип компании',  
        'desc'  => 'Загрузите изображение при помощи кнопки "добавить медиафайл" и вставьте ссылку в поле, начиная с wp-content -> ', 
        'id'    => 'case_logo', // даем идентификатор.
        'type'  => 'text',  // Указываем тип поля. 
        'plcholder' => 'domain.ru/..'
    )
      
);

function show_my_metabox() {  
global $case_meta_fields; // Обозначим наш массив с полями глобальным
global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
 
    // Начинаем выводить таблицу с полями через цикл
    echo '<table class="form-table">';  
    foreach ($case_meta_fields as $field) {  
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
function save_case_meta_fields($post_id) {  
    global $case_meta_fields;  // Массив с нашими полями
 
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
    foreach ($case_meta_fields as $field) {  
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];  
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {  
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }  
    } // end foreach  
}  
add_action('save_post', 'save_case_meta_fields'); // Запускаем функцию сохранения


?>
