<?php

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'comment_text', 'wpautop' );

add_action( 'after_setup_theme', 'mainMenu' );
add_theme_support( 'post-thumbnails' );

function mainMenu() {
	register_nav_menu( 'main', 'Основное меню' );
	register_nav_menu( 'footer', 'Меню в футере' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts(){
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick-slide', get_template_directory_uri() . '/js/slick/slick.min.js', array(), true );
	wp_enqueue_script( 'owl-slide', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2.3.4', true );
    wp_enqueue_script( 'vue', get_template_directory_uri() . '/js/vue.js', array(), '2.6.12', true );
}

add_action( 'wp_enqueue_scripts', 'style_theme' );

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'slick-slide', get_template_directory_uri() . '/css/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick/slick-theme.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl-carousel/owl.theme.default.css' );
	wp_enqueue_style( 'owl-slide', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
    /*wp_enqueue_style( 'matches', get_template_directory_uri() . '/css/matches.css' );
    wp_enqueue_style( 'league', get_template_directory_uri() . '/css/league.css' );*/
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
    register_post_type( 'Bonuses', [
        'label'  => null,
		'labels' => [
			'name'               => 'Бонусы', 
			'singular_name'      => 'Бонус', 
			'add_new'            => 'Добавить бонус', 
			'add_new_item'       => 'Добавление бонусов', 
			'edit_item'          => 'Редактирование бонусов', 
			'new_item'           => 'Новый бонус', 
			'view_item'          => 'Смотреть бонусы', 
			'search_items'       => 'Искать бонусы', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Бонусы',
		],
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true, 
		'capability_type' 	  => 'post',
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'Bonus', 'category' ],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
		'hide_empty'          => true,
    ]);

    register_post_type( 'News', [
		'label'  => null,
		'labels' => [
			'name'               => 'Новости', 
			'singular_name'      => 'Новость', 
			'add_new'            => 'Добавить новость', 
			'add_new_item'       => 'Добавление новости', 
			'edit_item'          => 'Редактирование новости', 
			'new_item'           => 'Новая новость', 
			'view_item'          => 'Смотреть новости', 
			'search_items'       => 'Искать новости', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Новости',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'Forecasts', [
		'label'  => null,
		'labels' => [
			'name'               => 'Прогнозы', 
			'singular_name'      => 'Прогноз', 
			'add_new'            => 'Добавить прогноз', 
			'add_new_item'       => 'Добавление прогнозов', 
			'edit_item'          => 'Редактирование прогноза', 
			'new_item'           => 'Новый прогноз', 
			'view_item'          => 'Смотреть прогнозы', 
			'search_items'       => 'Искать прогнозы', 
			'not_found'          => 'Не найдено', 
			'not_found_in_trash' => 'Не найдено в корзине', 
			'parent_item_colon'  => '', 
			'menu_name'          => 'Прогнозы',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null, 
		'show_in_rest'        => null, 
		'rest_base'           => null, 
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ], 
		'taxonomies'          => [ 'category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

/*add_action( 'init', 'create_taxonomy' );
function create_taxonomy() {
	register_taxonomy( 'Bonus', [ 'post', 'Bonuses' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'Бонус',
			'singular_name'     => 'Бонус',
			'search_items'      => 'Поиск бонусов',
			'all_items'         => 'Все бонусы',
			'view_item '        => 'View currency',
			'parent_item'       => 'Parent currency',
			'parent_item_colon' => 'Parent currency:',
			'edit_item'         => 'Edit currency',
			'update_item'       => 'Update currency',
			'add_new_item'      => 'Добавить новый бонус',
			'new_item_name'     => 'New currency Name',
			'menu_name'         => 'Бонус',
		],
		'description'           => '', 
		'public'                => true,
		'hierarchical'          => true,
		'show_ui'               => true,
		'rewrite'               => array( 'slug' => 'Bonuses' ),
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false, 
		'show_in_rest'          => null, 
		'rest_base'             => null, 
		'query_var'           	=> true,
		'hide_empty'            => true,
	] );
}*/