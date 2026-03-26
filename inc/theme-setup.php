<?php

function wptb_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'wp-tailwind-blog-theme'),
        'footer_menu'  => __('Footer Menu', 'wp-tailwind-blog-theme'),
    ));
}

add_action('after_setup_theme', 'wptb_theme_setup');
