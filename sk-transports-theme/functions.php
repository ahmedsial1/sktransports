<?php
/**
 * SK Transports Theme Functions
 */

function sk_transports_enqueue_scripts() {
    // Enqueue Google Fonts & Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap', array(), null );
    
    // Main Stylesheet
    wp_enqueue_style( 'sk-main-style', get_template_directory_uri() . '/styles/main.css', array(), '5.0' );
    
    // Theme Stylesheet (metadata mostly)
    wp_enqueue_style( 'sk-theme-style', get_stylesheet_uri(), array(), '5.0' );
    
    // Main JavaScript
    wp_enqueue_script( 'sk-main-script', get_template_directory_uri() . '/js/main.js', array(), '5.0', true );
}
add_action( 'wp_enqueue_scripts', 'sk_transports_enqueue_scripts' );

function sk_transports_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'sk_transports_setup' );
