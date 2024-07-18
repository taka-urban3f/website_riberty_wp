<?php
function riberty_theme_setup()
{
    // add_theme_support('title-tag');
}
add_action('after_setup_theme', 'riberty_theme_setup');

function riberty_enqueue_scripts()
{
    wp_enqueue_style(
        'riberty_theme_destyle',
        get_template_directory_uri() . '/assets/css/destyle.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_style(
        'riberty_theme_style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );

    // wp_enqueue_script(
    //     'riberty_theme_common',
    //     get_template_directory_uri() . '/assets/css/style.css',
    //     array(),
    //     '1.0.0',
    //     true
    // );
}
add_action('wp_enqueue_scripts', 'riberty_enqueue_scripts');
