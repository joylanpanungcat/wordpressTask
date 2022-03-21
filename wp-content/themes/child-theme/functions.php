<?php

// function theme_support(){
//     add_theme_support('title-tag');
// }
// add_action('after_setup_theme','theme_support');


function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );


function enqueue_my_custom_script(){
    wp_enqueue_script('my-custom-js',get_stylesheet_directory_uri().'/custom.js',false,'1.0','all');
}
add_action('wp_enqueue_scripts','enqueue_my_custom_script');
?>

