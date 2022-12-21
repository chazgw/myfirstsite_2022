<?php 
function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );