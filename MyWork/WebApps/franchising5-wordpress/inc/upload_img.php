// Пишем код формы с полями.  
function my_extra_fields_content( $post )  
{     
    // URL-ы загруженных изображений будем сохранять в мета-полях  
    $background = get_post_meta($post->ID, 'post_background', 1);  
    $preview = get_post_meta($post->ID, 'post_preview', 1);  
    $icon = get_post_meta($post->ID, 'post_icon', 1);  
  
    ?>  
        <label for="post_background">  
        <h4>Фон записи</h4>  
        <input id="post_background" type="text" size="45" name="post_background" value="<?php echo $background; ?>" />  
        <input id="post_background_button" type="button" class="button" value="Загрузить" />  
        <br />  
        <small>Вставьте URL изображения для фона записи или загрузите его</small>  
        </label>  
        <label for="post_preview">  
        <h4>Превью записи</h4>          
        <input id="post_preview" type="text" size="45" name="post_preview" value="<?php echo $preview; ?>" />  
        <input id="post_preview_button" type="button" class="button" value="Загрузить" />  
        <br />  
        <small>Вставьте URL изображения для превью записи или загрузите его</small>  
        </label>  
        <label for="post_icon">  
        <h4>Иконка для меню</h4>          
        <input id="post_icon" type="text" size="45" name="post_icon" value="<?php echo $icon; ?>" />  
        <input id="post_icon_button" type="button" class="button" value="Загрузить" />  
        <br /><small>Вставьте URL изображения иконки меню или загрузите его</small>  
        </label>  
        <!-- Создаем проверочное поле для проверки того, что данные пришли с нашей формы -->  
        <input type="hidden" name="extra_field_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />  
    <?php  
}  
  
// Добавляем мета-блок с нашей формой на странице редактирования записи  
function my_add_extra_fields() {  
    add_meta_box( 'extra_fields', 'Логотип компании', 'my_extra_fields_content', 'case', 'normal', 'high'  );  
}  
  
// Запускаем вышенаписанный код в действие  
add_action('admin_init', 'my_add_extra_fields', 1);  

function my_add_upload_scripts() {  
    wp_enqueue_script('media-upload');  
    wp_enqueue_script('thickbox');  
    wp_register_script(  
                'my-upload-script'  
                /* Подключаем JS-код задающий поведение  
                 * загрузчика и указывающий, куда вставлять  
                 * ссылку после загрузки изображения 
                 * Его код будет приведен ниже. 
                 */  
                ,get_bloginfo('template_url').'/assets/js/upload.js'  
                /* Указываем скрипты, от которых  
                 * зависит наш JS-код 
                 */  
                ,array('jquery','media-upload','thickbox')  
    );  
    wp_enqueue_script('my-upload-script');  
}  
  
// Запускаем функцию подключения загрузчика  
if( is_admin() )  
add_action('admin_print_scripts', 'my_add_upload_scripts');  

function my_extra_fields_content_update( $post_id ){  
  
    // Если данные пришли не из нашей формы, ничего не делаем  
    if ( !wp_verify_nonce($_POST['extra_field_nonce'], __FILE__) )  
            return false;             
    // Если это автосохранение, то ничего не делаем       
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  )  
            return false;  
    // Проверяем права пользователя       
    if ( !current_user_can('edit_post', $post_id) )  
            return false;  
  
    $extra_fields = array(  
        'post_background' => $_POST['post_background'],  
        'post_preview' => $_POST['post_preview'],  
        'post_icon' => $_POST['post_icon']  
    );  
  
    $extra_fields = array_map('trim', $extra_fields);  
  
    foreach( $extra_fields as $key=>$value ){  
            // Очищаем, если пришли пустые значения полей  
            if( emptyempty($value) )  
                delete_post_meta($post_id, $key);  
            // Обновляем, (или создаем) в случае не пустых значений  
            if($value)  
                update_post_meta($post_id, $key, $value);  
    }  
  
    return $post_id;  
}  
  
// Запускаем обработчик формы во время сохранения записи  
if( is_admin() )  
add_action('save_post', 'my_extra_fields_content_update', 0);  
