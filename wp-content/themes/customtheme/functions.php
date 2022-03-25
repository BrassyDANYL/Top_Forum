<?php
add_action( 'wp_enqueue_scripts', 'topforum_scripts');

function topforum_scripts() {
 wp_enqueue_style( 'topforum-style', get_stylesheet_uri() );
 wp_deregister_script( 'jquery' );
 wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
 wp_enqueue_script('jquery');
 wp_enqueue_script('slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', array(), null, true);
 wp_enqueue_script('myscript', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
};
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');

?>