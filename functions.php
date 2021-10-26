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

?>