<?php


register_nav_menus(
	array(
		'menu' => 'Меню',
	)
);


add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_scripts() { // добавление скриптов
		if (is_admin()) return false; // если мы в админке - ничего не делаем
		wp_deregister_script('jquery'); // выключаем стандартный jquery
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', '', '', true); // добавляем свой jq
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '', '', true); // и скрипты шаблона
	}
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function add_styles() { // добавление стилей
		if (is_admin()) return false; // если мы в админке - ничего не делаем
		wp_enqueue_style('main_reset', get_template_directory_uri() . '/assets/css/reset.css');
		wp_enqueue_style('main_fonts', get_template_directory_uri() . '/assets/css/fonts.css');
		wp_enqueue_style('main_style_wp', get_template_directory_uri() . '/assets/css/style_wp.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
		wp_enqueue_style('main_media', get_template_directory_uri() . '/assets/css/media.css');
	}
}
?>