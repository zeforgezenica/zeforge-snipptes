<?php

function zeforge_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'style', get_stylesheet_uri(), $dependencies ); 
}

function zeforge_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '5.2.0', true );
}

function zeforge_wp_setup() {
    add_theme_support( 'title-tag' );
}
 
function zeforge_enqueue_script() {
    wp_enqueue_script( 'zeforge', get_template_directory_uri() . '/zeforge.js', '', '', true);
}
 
add_action( 'wp_enqueue_scripts', 'zeforge_enqueue_script' );
add_action( 'after_setup_theme', 'zeforge_wp_setup' );
add_action( 'wp_enqueue_scripts', 'zeforge_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'zeforge_enqueue_scripts' );

?>