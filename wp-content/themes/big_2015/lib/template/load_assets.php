<?php

/************************************************************
 * Enque Custom Scripts
 ************************************************************/
add_action( 'wp_enqueue_scripts', 'site_name_enqueue_scripts', 99);
function site_name_enqueue_scripts(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-css', get_bloginfo('stylesheet_directory') . '/assets/dist/theme.min.css');

    //JS http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js
    wp_enqueue_script('yay-js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', array(), '1', true);
    wp_enqueue_script('theme-js', get_bloginfo('stylesheet_directory') . '/assets/dist/theme.min.js', array(), '1', true);
}
function load_fonts() {
    wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic|Montserrat:400,700|Open+Sans:400,300,300italic');
    wp_enqueue_style( 'et-googleFonts');
}
add_action('wp_print_styles', 'load_fonts');