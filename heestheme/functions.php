<?php 

add_theme_support( 'title-tag' );

function wp_heestheme_enqueue_styles(){
    wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wp_heestheme_enqueue_styles');

register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'heestheme')
] );

//init widgets

function wp_heestheme_init_widgets() {
    register_sidebar( [
        'id' => 'main-sidebar',
        'name' => __( 'Main Sidebar', 'heestheme'),
        'description' => __( 'Description main sidebar', 'heestheme'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ] );
}

add_action( 'widgets_init', 'wp_heestheme_init_widgets');
?>