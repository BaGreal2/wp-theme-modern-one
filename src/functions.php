<?php

function best_theme_setup()
{
    register_nav_menus([
      'main_menu' => 'Main Menu',
    ]);
}
add_action('after_setup_theme', 'best_theme_setup');

function best_theme_enqueue_styles()
{
    wp_enqueue_style(
        'best-theme-style', // handle
        get_stylesheet_uri(), // points to style.css
        [], // dependencies
        filemtime(get_stylesheet_directory() . '/style.css') // version (cache-busting)
    );
}
add_action('wp_enqueue_scripts', 'best_theme_enqueue_styles');
add_theme_support('post-thumbnails');
