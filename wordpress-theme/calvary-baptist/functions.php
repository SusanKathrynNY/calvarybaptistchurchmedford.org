<?php

function calvary_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'calvary' ),
    ) );
}
add_action( 'after_setup_theme', 'calvary_setup' );

function calvary_enqueue() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap', array(), null );
    wp_enqueue_style( 'calvary-style', get_stylesheet_uri(), array( 'google-fonts' ), '1.0' );
    wp_enqueue_script( 'calvary-nav', get_template_directory_uri() . '/js/nav.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'calvary_enqueue' );
