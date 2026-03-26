<?php

function wptb_enqueue_assets() {
    wp_enqueue_style(
        'wptb-main-style',
        get_template_directory_uri() . '/dist/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'wptb-main-script',
        get_template_directory_uri() . '/dist/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'wptb_enqueue_assets');
