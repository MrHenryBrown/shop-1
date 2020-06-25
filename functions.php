<?php


//отключение вордпрессовской шапки
add_filter('show_admin_bar', '__return_false');



//подключение скриптов своих
add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );

	wp_enqueue_style('fonts_styles', get_template_directory_uri() . '/assets/fonst.css');
	wp_enqueue_style('media_styles', get_template_directory_uri() . '/assets/media.css');

	// Регистрируем скрипт в системе (для темы):
	wp_register_script( 'for_burger', get_template_directory_uri() . '/assets/index.js)', false, null, true );
	// После регистрации мы можем ставить в очередь вызов скрипта для любого плагина или темы:
	wp_enqueue_script( 'for_burger' );
}



//регистрация меню для навигации в шапке
add_action('after_setup_theme', 'theme_after_setup');

function theme_after_setup() {
	register_nav_menu('top', 'for_header_menu');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}

//регистрация меню для навигации в подвале (первое)
add_action('after_setup_theme', 'register_bottom_menu_one');

function register_bottom_menu_one() {
	register_nav_menu('bottom1', 'for_footer_menu_one');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}

//регистрация меню для навигации в подвале (второе)
add_action('after_setup_theme', 'register_bottom_menu_two');

function register_bottom_menu_two() {
	register_nav_menu('bottom2', 'for_footer_menu_two');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}



//регистрация своего типа поста
add_action( 'init', 'true_register_products' ); // Использовать функцию только внутри хука init

function true_register_products() {
	$labels = array(
		'name' => 'Товары',
		'singular_name' => 'Товар', // админ панель Добавить->Функцию
		'add_new' => 'Добавить товар',
		'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
		'edit_item' => 'Редактировать товар',
		'new_item' => 'Новый товар',
		'all_items' => 'Все товары',
		'view_item' => 'Просмотр товаров на сайте',
		'search_items' => 'Искать товары',
		'not_found' =>  'Товаров не найдено.',
		'not_found_in_trash' => 'В корзине нет товаров.',
		'menu_name' => 'Товары' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true, // благодаря этому некоторые параметры можно пропустить
		'menu_icon' => 'dashicons-cart', // иконка корзины
		'menu_position' => 5,
		'has_archive' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),
		'taxonomies' => array('post_tag')
	);
	register_post_type('product',$args);
}


