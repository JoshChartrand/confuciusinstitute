<?php

function load_local_jQuery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_local_jQuery');

function site_enqueue() {
    $child_path = get_template_directory_uri();

    // Load Screen Stylesheets
    wp_register_style( 'main_css', get_template_directory_uri() . '/css/sass.css' );
    wp_enqueue_style( 'main_css', $child_path );

    // Load Theme Scripts
    // wp_register_script( 'main_scripts', $child_path . '/js/script.js' );
    // wp_enqueue_script( 'main_scripts' );
}
add_action( 'wp_enqueue_scripts', 'site_enqueue' );

/*
function load_fonts() {
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=BenchNine:300,400,700');
    wp_enqueue_style( 'googleFonts');
}
*/

//add_action('wp_print_styles', 'load_fonts');

// Hide admin bar
//add_filter( 'show_admin_bar', '__return_false' );


?>