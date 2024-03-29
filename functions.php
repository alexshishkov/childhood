<?php
    add_action('wp_enqueue_scripts', 'childhood_scripts');

    function childhood_scripts() {
        wp_enqueue_style( 'childhood_style', get_stylesheet_uri());
        wp_enqueue_script( 'childhood_scripts', get_template_directory_uri() . '/assets/js/main.min.js');
    };

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
?>