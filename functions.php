<?php

add_action( 'after_setup_theme', 'dw_setup' );
function dw_setup(){

   add_theme_support( 'post-thumbnails' );
   register_nav_menu( 'primary', 'Primary menu' );
}


/*----Scripts and styles----*/
add_action( 'wp_enqueue_scripts', 'dw_scripts' );
function dw_scripts(){

    //styles
    wp_enqueue_style( 'style.css', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'main-style', get_template_directory_uri() .'/assets/css/style-main.css');


    //scripts
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js');

}

