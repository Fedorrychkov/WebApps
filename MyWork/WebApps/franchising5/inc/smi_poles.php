<?php

# Add News
add_action( 'init', 'true_register_post_type_init_smi_about' ); // Использовать функцию только внутри хука init
function true_register_post_type_init_smi_about() {
    $labels = array(
        'name' => _x( 'Сми о нас', 'Post Type General Name', 'smi_about' ),
        'singular_name' => _x( 'Сми о нас', 'Post Type Singular Name', 'smi_about' ),
        'add_new' => 'Добавить статью о нас',
        'add_new_item' => 'Добавить статью о нас', // заголовок тега <title>
        'edit_item' => 'Редактировать статью о нас',
        'new_item' => 'Создать статью о нас',
        'all_items' => 'Все статьи о нас',
        'view_item' => 'Просмотр статей о нас на сайте',
        'search_items' => 'Искать статьи о нас',
        'not_found' =>  'Статей не найдено.',
        'not_found_in_trash' => 'В корзине нет статей о нас.',
        'menu_name' => 'Сми о нас' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'description'   => 'Добавление записей сми о нас',
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/assets/img/myplugin.png', // иконка в меню
        'menu_position' => 12, // порядок в меню
        'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('smi_about', $args);
}

function my_taxonomies_smi_about() {
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
    register_taxonomy( 'smi_category', 'smi_about', $args );
}
add_action( 'init', 'my_taxonomies_smi_about', 0 );

?>
