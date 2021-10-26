<?php 

// Função para registrar os Scripts e o CSS
function bruno_scripts() {
	// Registrar script
	wp_register_script( 'script-script', get_template_directory_uri() . '/script.js', array(), false, true );

	// Carrega o Script
	wp_enqueue_script( 'script-script' );	
}
add_action( 'wp_enqueue_scripts', 'bruno_scripts' );

function wp_css() {
	wp_register_style( 'wp-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'wp-style' );
}
add_action( 'wp_enqueue_scripts', 'wp_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

?>